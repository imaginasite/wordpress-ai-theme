<?php
function myaitheme_setup() {
    add_theme_support( 'editor-styles' );
    add_editor_style( 'assets/editor-style.css' );
}
add_action( 'after_setup_theme', 'myaitheme_setup' );

function myaitheme_scripts() {
    wp_enqueue_style( 'myaitheme-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version') );
    wp_enqueue_script( 'myaitheme-script', get_template_directory_uri() . '/assets/script.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'myaitheme_scripts' );

/*****/
// add_action( 'wp_enqueue_scripts', 'remove_global_styles' );
// function remove_global_styles(){
//     wp_dequeue_style( 'global-styles' );
// }

function mon_theme_enqueue_google_fonts() {
    // Préchargement pour améliorer les performances
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
    echo '<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">' . "\n";
}
add_action( 'wp_head', 'mon_theme_enqueue_google_fonts', 1 );