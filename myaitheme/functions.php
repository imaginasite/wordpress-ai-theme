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
