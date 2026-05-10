<?php
$files = array_merge(
    glob('patterns/*.php'),
    glob('templates/*.html'),
    glob('parts/*.html')
);

$errors = [];

foreach ($files as $file) {
    $content = file_get_contents($file);
    
    // Find all block starts
    preg_match_all('/<!--\s*wp:([a-zA-Z0-9\-\/]+)(?:\s+({.*?}))?\s*(\/)?-->/', $content, $starts, PREG_OFFSET_CAPTURE);
    
    // Check JSON validity
    foreach ($starts[2] as $index => $jsonMatch) {
        if (!empty($jsonMatch[0])) {
            $jsonStr = $jsonMatch[0];
            $decoded = json_decode($jsonStr);
            if (json_last_error() !== JSON_ERROR_NONE) {
                $errors[] = "$file: Invalid JSON in wp:{$starts[1][$index][0]} -> " . json_last_error_msg() . "\n$jsonStr";
            }
        }
    }
}

if (empty($errors)) {
    echo "All block JSON attributes are perfectly valid.\n";
} else {
    echo implode("\n", $errors);
}
