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
    
    // Add WooCommerce and gallery support only if WooCommerce is active
    if (class_exists('WooCommerce')) {
        add_theme_support('woocommerce');
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');
    }

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

/**
 * Configure PHPMailer to use custom SMTP server details for transactional email delivery.
 *
 * @param object $phpmailer The PHPMailer instance to configure.
 * @return void
 */
function myaitheme_set_phpmailer_details($phpmailer)
{
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sub.domain.org';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = '465'; //25 or 465
    $phpmailer->Username = 'name@domain.org';
    $phpmailer->Password = 'PASSWORD';
    $phpmailer->SMTPSecure = 'ssl'; //ssl or tls
}
add_action('phpmailer_init', 'myaitheme_set_phpmailer_details');

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

/**
 * Disable the detection and loading of WordPress Emoji scripts and styles.
 * This reduces unnecessary HTTP requests and optimizes page load times.
 *
 * @return void
 */
function myaitheme_disable_emojis()
{
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    add_filter('wp_resource_hints', 'myaitheme_disable_emojis_remove_dns_prefetch', 10, 2);
}
add_action('init', 'myaitheme_disable_emojis');

/**
 * Remove DNS prefetching for WordPress Emoji servers.
 *
 * @param array  $urls          List of URLs to prefetch.
 * @param string $relation_type Relation type of the resource (e.g., dns-prefetch).
 * @return array Filtered list of URLs.
 */
function myaitheme_disable_emojis_remove_dns_prefetch($urls, $relation_type)
{
    if ('dns-prefetch' == $relation_type) {
        $emoji_svg_url = apply_filters('emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/');
        $urls = array_diff($urls, array($emoji_svg_url));
    }
    return $urls;
}

/**
 * Load Gutenberg block styles only when the block is used on the page.
 * This dramatically improves CSS performance and pagespeed scores.
 */
add_filter('should_load_separate_core_block_assets', '__return_true');

/**
 * Clean up redundant or obsolete links injected in the HTML head.
 *
 * @return void
 */
function myaitheme_cleanup_head()
{
    // Windows Live Writer link (obsolete since 2012)
    remove_action('wp_head', 'wlwmanifest_link');
    // RSD link used by obsolete external XML-RPC clients (rsd_link is also removed safely here)
    remove_action('wp_head', 'rsd_link');
    // Shortlink for the current page (useless and bad for clean SEO)
    remove_action('wp_head', 'wp_shortlink_wp_head', 10);
    // REST API link tag in HTML head
    remove_action('wp_head', 'rest_output_link_wp_head', 10);
    // OEMBED links in HTML head
    remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
}
add_action('init', 'myaitheme_cleanup_head');

/**
 * Disable Gutenberg duotone SVG filters from loading on the frontend.
 *
 * @return void
 */
function myaitheme_remove_duotone_svg()
{
    remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');
}
add_action('wp_body_open', 'myaitheme_remove_duotone_svg', 1);

/**
 * Customize the login failure error message for security hardening.
 *
 * @return string Generic login error message.
 */
add_filter('login_errors', function () {
    return 'Erreur de connexion.';
});

/**
 * Disable the XML-RPC protocol to protect the site from brute-force attacks.
 */
add_filter('xmlrpc_enabled', '__return_false');
remove_action('wp_head', 'rsd_link');

/**
 * Remove X-Pingback headers from HTTP responses to prevent pingback spam.
 *
 * @param array $headers List of HTTP headers sent by WordPress.
 * @return array Cleaned HTTP headers list.
 */
function myaitheme_remove_x_pingback($headers)
{
    unset($headers['X-Pingback']);
    return $headers;
}
add_filter('wp_headers', 'myaitheme_remove_x_pingback');

/**
 * Disable default pingbacks and trackbacks configurations for new posts.
 *
 * @return void
 */
function myaitheme_disable_pingback_and_trackback()
{
    update_option('default_ping_status', 'closed');
    update_option('default_pingback_flag', 0);
}
add_action('after_setup_theme', 'myaitheme_disable_pingback_and_trackback');

/**
 * Prevent the site from sending self-pingbacks (when a post links to another post on the same site).
 *
 * @param array $links List of target pingback URLs.
 * @return void
 */
add_action('pre_ping', function (&$links) {
    $home = get_option('home');
    foreach ($links as $l => $link) {
        if (strpos($link, $home) === 0) {
            unset($links[$l]);
        }
    }
});

/**
 * Remove the WordPress version from the generator meta tag in the HTML head.
 */
remove_action('wp_head', 'wp_generator');

/**
 * Remove the WordPress version generated in RSS feeds and other generators.
 *
 * @return string Empty string to hide the version.
 */
function myaitheme_remove_wordpress_version()
{
    return '';
}
add_filter('the_generator', 'myaitheme_remove_wordpress_version');



/**
 * Restrict Rest API access to the users endpoint for non-logged-in users.
 * This prevents public user enumeration and hardens site security.
 *
 * @param mixed $result Rest authentication error or null.
 * @return mixed WP_Error if access is restricted, or the original authentication status.
 */
function myaitheme_restrict_rest_users_api($result)
{
    if (!empty($result)) {
        return $result;
    }

    $request_uri = $_SERVER['REQUEST_URI'] ?? '';

    if (!is_user_logged_in() && strpos($request_uri, '/wp/v2/users') !== false) {
        return new WP_Error(
            'rest_forbidden_users',
            'Accès refusé.',
            ['status' => 401]
        );
    }

    return $result;
}
add_filter('rest_authentication_errors', 'myaitheme_restrict_rest_users_api');

/**
 * Disable WordPress application passwords to secure the site from credential misuse.
 */
add_filter('wp_is_application_passwords_available', '__return_false');

/**
 * Load Contact Form 7 styles and scripts conditionally.
 * This improves frontend performance by enqueuing assets only on singular pages 
 * that actually contain the CF7 shortcode or the custom block.
 *
 * @return void
 */
function myaitheme_load_cf7_assets_conditionally()
{
    // Exit early if Contact Form 7 is not installed or active
    if (!function_exists('wpcf7_enqueue_styles')) {
        return;
    }

    if (is_singular()) {
        global $post;

        if (
            isset($post->post_content) &&
            (
                has_shortcode($post->post_content, 'contact-form-7') ||
                has_block('contact-form-7/contact-form-selector', $post)
            )
        ) {
            wpcf7_enqueue_styles();
            wpcf7_enqueue_scripts();
        }
    }
}
add_action('wp_enqueue_scripts', 'myaitheme_load_cf7_assets_conditionally');

/**
 * Hide Rank Math SEO comments and credit notices from the page HTML source.
 */
add_filter('rank_math/frontend/show_comment', '__return_false');
add_filter('rank_math/frontend/remove_credit_notice', '__return_true');

/**
 * Enable the Gutenberg block editor for WooCommerce products.
 *
 * @param bool   $can_edit  Whether the post type can be edited with the block editor.
 * @param string $post_type The post type slug.
 * @return bool True if the post type is 'product', otherwise the original status.
 */
function myaitheme_enable_gutenberg_for_products($can_edit, $post_type)
{
    if (class_exists('WooCommerce') && $post_type === 'product') {
        return true;
    }
    return $can_edit;
}
add_filter('use_block_editor_for_post_type', 'myaitheme_enable_gutenberg_for_products', 10, 2);

/**
 * Dequeue WooCommerce styles and scripts on non-WooCommerce pages to improve page speed.
 *
 * @return void
 */
function myaitheme_conditionally_dequeue_woocommerce_assets()
{
    // Do nothing if WooCommerce is not active
    if (!class_exists('WooCommerce')) {
        return;
    }

    // Check if we are on a WooCommerce-related page (Shop, Product, Cart, Checkout, My Account)
    $is_wc_page = is_woocommerce() || is_cart() || is_checkout() || is_account_page();

    // If it is not a WooCommerce page, dequeue all styles and scripts
    if (!$is_wc_page) {
        // Dequeue frontend styles
        wp_dequeue_style('woocommerce-layout');
        wp_dequeue_style('woocommerce-general');
        wp_dequeue_style('woocommerce-smallscreen');
        wp_dequeue_style('woocommerce_frontend_styles');
        wp_dequeue_style('woocommerce-inline');

        // Dequeue frontend scripts
        wp_dequeue_script('woocommerce');
        wp_dequeue_script('wc-add-to-cart');
        wp_dequeue_script('wc-cart-fragments');
        wp_dequeue_script('js-cookie');
        wp_dequeue_script('jquery-blockui');
    }
}
add_action('wp_enqueue_scripts', 'myaitheme_conditionally_dequeue_woocommerce_assets', 99);