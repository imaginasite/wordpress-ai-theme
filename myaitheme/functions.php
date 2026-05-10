<?php
/**
 * My Ai Theme functions and definitions
 *
 * @package MyAiTheme
 */

// Theme setup
add_action( 'after_setup_theme', 'myaitheme_setup' );
function myaitheme_setup() {
    // Add theme support for various features
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'appearance-tools' );
    add_theme_support( 'woocommerce' );
    
    // Enqueue editor styles
    add_editor_style( 'assets/editor-style.css' );
}

// Enqueue styles and scripts
add_action( 'wp_enqueue_scripts', 'myaitheme_enqueue_assets' );
function myaitheme_enqueue_assets() {
    // Enqueue theme stylesheet (loaded last in head)
    wp_enqueue_style( 
        'myaitheme-style', 
        get_stylesheet_uri(), 
        array(), 
        wp_get_theme()->get( 'Version' ) 
    );
    
    // Enqueue theme script (loaded in footer)
    wp_enqueue_script( 
        'myaitheme-script', 
        get_template_directory_uri() . '/assets/script.js', 
        array(), 
        wp_get_theme()->get( 'Version' ), 
        true 
    );
}


// Register block patterns
function myaitheme_register_block_patterns() {
    register_block_pattern_category( 'myaitheme-patterns', array(
        'label' => __( 'My Ai Theme Patterns', 'myaitheme' )
    ) );
}
add_action( 'init', 'myaitheme_register_block_patterns' );

// Register block styles to prevent block recovery errors
function myaitheme_register_block_styles() {
    $button_styles = array(
        'fill'    => __( 'Fill', 'myaitheme' ),
        'outline' => __( 'Outline', 'myaitheme' ),
        'ghost'   => __( 'Ghost', 'myaitheme' ),
        'pill'    => __( 'Pill', 'myaitheme' ),
    );
    foreach ( $button_styles as $name => $label ) {
        register_block_style( 'core/button', array(
            'name'  => $name,
            'label' => $label,
        ) );
    }

    $list_styles = array(
        'checkmark'  => __( 'Checkmark', 'myaitheme' ),
        'arrow'      => __( 'Arrow', 'myaitheme' ),
        'plus'       => __( 'Plus', 'myaitheme' ),
        'numbered'   => __( 'Numbered Circle', 'myaitheme' ),
        'no-bullets' => __( 'No Bullets', 'myaitheme' ),
    );
    foreach ( $list_styles as $name => $label ) {
        register_block_style( 'core/list', array(
            'name'  => $name,
            'label' => $label,
        ) );
    }
}
add_action( 'init', 'myaitheme_register_block_styles' );