<?php
$files = array_merge(
    glob('patterns/*.php'),
    glob('templates/*.html'),
    glob('parts/*.html')
);

$errors = [];

foreach ($files as $file) {
    $content = file_get_contents($file);
    
    // Find all block starts (not self-closing)
    preg_match_all('/<!--\s*wp:([a-zA-Z0-9\-\/]+)(?:\s+({.*?}))?\s*-->/', $content, $starts);
    // Find all block ends
    preg_match_all('/<!--\s*\/wp:([a-zA-Z0-9\-\/]+)\s*-->/', $content, $ends);
    
    // Count occurrences
    $startCounts = array_count_values($starts[1]);
    $endCounts = array_count_values($ends[1]);
    
    // Check mismatches
    $allTypes = array_unique(array_merge(array_keys($startCounts), array_keys($endCounts)));
    foreach ($allTypes as $type) {
        $s = isset($startCounts[$type]) ? $startCounts[$type] : 0;
        $e = isset($endCounts[$type]) ? $endCounts[$type] : 0;
        if ($s !== $e) {
            $errors[] = "$file: Mismatch for '$type' (Open: $s, Close: $e)";
        }
    }
}

if (empty($errors)) {
    echo "All block tags are perfectly balanced.\n";
} else {
    echo implode("\n", $errors);
}
