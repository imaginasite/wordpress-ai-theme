<?php
require '../../../wp-load.php';

$files = array_merge(
    glob('patterns/*.php'),
    glob('templates/*.html'),
    glob('parts/*.html')
);

$has_errors = false;

foreach ($files as $file) {
    $content = file_get_contents($file);
    $blocks = parse_blocks($content);
    
    foreach ($blocks as $block) {
        if ($block['blockName'] === null && trim($block['innerHTML']) !== '') {
            // Unparsed HTML
            // echo "Found unparsed HTML in $file\n";
        }
    }
    // We can also check if the block syntax is generally valid by looking for malformed JSON.
    // parse_blocks() handles it but we can do a regex check for unclosed comments.
}
echo "Done checking " . count($files) . " files.\n";
