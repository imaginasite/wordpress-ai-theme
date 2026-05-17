<?php
/**
 * Title: Hero Section
 * Slug: myaitheme/hero-section
 * Categories: featured, banner
 * Description: A hero section with heading, text, and buttons
 * Keywords: hero, banner, call-to-action
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"very-light-gray","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-very-light-gray-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--3xl);padding-bottom:var(--wp--preset--spacing--3xl)">
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"width":"60%"} -->
        <div class="wp-block-column" style="flex-basis:60%">
            <!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.1"}},"fontSize":"xx-large"} -->
            <h1 class="wp-block-heading has-xx-large-font-size" style="line-height:1.1">Welcome to Our Website</h1>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"fontSize":"large"} -->
            <p class="has-large-font-size">We create amazing digital experiences that help businesses grow and succeed in the modern world.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"black","textColor":"white","className":"is-style-fill"} -->
                <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-black-background-color has-text-color has-background wp-element-button">Get Started</a></div>
                <!-- /wp:button -->
                
                <!-- wp:button {"className":"is-style-outline"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Learn More</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
        
        <!-- wp:column {"width":"40%"} -->
        <div class="wp-block-column" style="flex-basis:40%">
            <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/placeholder-hero.png" alt="Hero image"/></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->