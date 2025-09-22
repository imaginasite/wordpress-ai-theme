<?php

// Add theme support
function myaitheme_setup() {
    add_theme_support( 'editor-styles' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'appearance-tools' );
    add_theme_support( 'woocommerce' );

    // Editor styles
    add_editor_style( 'assets/editor-style.css' );
}
add_action( 'after_setup_theme', 'myaitheme_setup' );

// Enqueue styles and scripts
function myaitheme_enqueue_assets() {
    // Load main style.css last in <head>
    wp_enqueue_style( 'myaitheme-style', get_stylesheet_uri(), [], wp_get_theme()->get( 'Version' ) );

    // Load script.js in the footer
    wp_enqueue_script( 'myaitheme-script', get_template_directory_uri() . '/assets/script.js', [], null, true );
}
add_action( 'wp_enqueue_scripts', 'myaitheme_enqueue_assets' );
