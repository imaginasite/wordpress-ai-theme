<?php
/**
 * My Ai Theme functions and definitions
 *
 * @package MyAiTheme
 */

// Theme setup
add_action('after_setup_theme', 'myaitheme_setup');
function myaitheme_setup()
{
    // Add theme support for various features
    add_theme_support('wp-block-styles');
    add_theme_support('editor-styles');
    add_theme_support('appearance-tools');
    add_theme_support('woocommerce');

    // Enqueue editor styles
    add_editor_style('assets/editor-style.css');
}

// Enqueue styles and scripts
add_action('wp_enqueue_scripts', 'myaitheme_enqueue_assets');
function myaitheme_enqueue_assets()
{
    // Enqueue theme stylesheet (loaded last in head)
    wp_enqueue_style(
        'myaitheme-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    // Enqueue theme script (loaded in footer)
    wp_enqueue_script(
        'myaitheme-script',
        get_template_directory_uri() . '/assets/script.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );
}


// Register block patterns
function myaitheme_register_block_patterns()
{
    register_block_pattern_category('myaitheme-patterns', array(
        'label' => __('My Ai Theme Patterns', 'myaitheme')
    ));
}
add_action('init', 'myaitheme_register_block_patterns');

// Register block styles to prevent block recovery errors
function myaitheme_register_block_styles()
{
    $button_styles = array(
        'fill' => __('Fill', 'myaitheme'),
        'outline' => __('Outline', 'myaitheme'),
        'ghost' => __('Ghost', 'myaitheme'),
        'pill' => __('Pill', 'myaitheme'),
    );
    foreach ($button_styles as $name => $label) {
        register_block_style('core/button', array(
            'name' => $name,
            'label' => $label,
        ));
    }

    $list_styles = array(
        'checkmark' => array(
            'label' => __('Checkmark', 'myaitheme'),
            'inline_style' => 'ul.is-style-checkmark{list-style:none;padding-left:0}ul.is-style-checkmark li{position:relative;padding-left:2rem;margin-bottom:.5rem}ul.is-style-checkmark li::before{content:"\2713";position:absolute;left:0;top:0;width:1.5rem;height:1.5rem;background-color:#28a745;color:#fff;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:.875rem;font-weight:bold}'
        ),
        'arrow' => array(
            'label' => __('Arrow', 'myaitheme'),
            'inline_style' => 'ul.is-style-arrow{list-style:none;padding-left:0}ul.is-style-arrow li{position:relative;padding-left:1.5rem;margin-bottom:.5rem}ul.is-style-arrow li::before{content:"\2192";position:absolute;left:0;color:var(--wp--preset--color--black);font-weight:bold}'
        ),
        'plus' => array(
            'label' => __('Plus', 'myaitheme'),
            'inline_style' => 'ul.is-style-plus{list-style:none;padding-left:0}ul.is-style-plus li{position:relative;padding-left:1.5rem;margin-bottom:.5rem}ul.is-style-plus li::before{content:"\002B";position:absolute;left:0;color:var(--wp--preset--color--black);font-weight:bold;font-size:1.125rem}'
        ),
        'numbered' => array(
            'label' => __('Numbered Circle', 'myaitheme'),
            'inline_style' => 'ul.is-style-numbered{list-style:none;padding-left:0;counter-reset:numbered-list}ul.is-style-numbered li{position:relative;padding-left:3rem;margin-bottom:1rem;counter-increment:numbered-list}ul.is-style-numbered li::before{content:counter(numbered-list);position:absolute;left:0;top:0;width:2rem;height:2rem;background-color:var(--wp--preset--color--black);color:#fff;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:.875rem;font-weight:bold}'
        ),
        'no-bullets' => array(
            'label' => __('No Bullets', 'myaitheme'),
            'inline_style' => 'ul.is-style-no-bullets{list-style:none;padding-left:0}'
        ),
    );

    foreach ($list_styles as $name => $style_args) {
        register_block_style('core/list', array(
            'name' => $name,
            'label' => $style_args['label'],
            'inline_style' => $style_args['inline_style'],
        ));
    }
}
add_action('init', 'myaitheme_register_block_styles');

//set a default image thumb for posts
function myaitheme_set_default_thumbnail($post)
{
    if ($post->post_type != 'post') {
        return;
    }

    if (!has_post_thumbnail($post->ID)) {
        $thumbnail_url = site_url('/wp-content/uploads/2026/05/default.jpg');
        $thumbnail_id = attachment_url_to_postid($thumbnail_url);

        set_post_thumbnail($post->ID, $thumbnail_id);
    }
}
add_action('rest_after_insert_post', 'myaitheme_set_default_thumbnail', 10, 3);