<?php
/**
 * My Ai Theme functions and definitions.
 *
 * @package MyAiTheme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'myaitheme_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for WordPress features.
	 */
	function myaitheme_setup() {
		load_theme_textdomain( 'myaitheme', get_template_directory() . '/languages' );

		add_theme_support( 'editor-styles' );
		add_editor_style( 'assets/editor-style.css' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'appearance-tools' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'custom-line-height' );
		add_theme_support( 'custom-spacing' );
		add_theme_support( 'custom-units' );
		add_theme_support( 'link-color' );
		add_theme_support( 'border' );
		add_theme_support( 'typography' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array( 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style', 'search-form', 'navigation-widgets' ) );
		add_theme_support( 'woocommerce' );
	}
}
add_action( 'after_setup_theme', 'myaitheme_setup' );

/**
 * Enqueue front-end assets.
 */
function myaitheme_enqueue_assets() {
	$theme_version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'myaitheme-style', get_stylesheet_uri(), array(), $theme_version );
	wp_enqueue_script( 'myaitheme-script', get_template_directory_uri() . '/assets/script.js', array(), $theme_version, true );
}
add_action( 'wp_enqueue_scripts', 'myaitheme_enqueue_assets' );

/**
 * Enqueue block editor assets.
 */
function myaitheme_enqueue_block_editor_assets() {
	$theme_version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'myaitheme-editor-style', get_template_directory_uri() . '/assets/editor-style.css', array(), $theme_version );
}
add_action( 'enqueue_block_editor_assets', 'myaitheme_enqueue_block_editor_assets' );

/**
 * Add WooCommerce block compatibility class hooks.
 */
function myaitheme_woocommerce_body_class( $classes ) {
	if ( function_exists( 'is_woocommerce' ) && ( is_woocommerce() || is_cart() || is_checkout() || is_account_page() ) ) {
		$classes[] = 'myaitheme-woocommerce';
	}

	return $classes;
}
add_filter( 'body_class', 'myaitheme_woocommerce_body_class' );
