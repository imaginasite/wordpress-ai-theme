<?php
/**
 * Title: Features Grid
 * Slug: myaitheme/features-grid
 * Categories: features, services
 * Description: Three-column features grid with icons
 * Keywords: features, services, grid
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--3xl);padding-bottom:var(--wp--preset--spacing--3xl)">
    <!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
    <h2 class="wp-block-heading has-text-align-center has-x-large-font-size">Why Choose Us</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">We provide exceptional services with a focus on quality and customer satisfaction.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:image {"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/icon-design.svg" alt="Design icon" width="60" height="60"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:heading {"level":3} -->
            <h3>Modern Design</h3>
            <!-- /wp:heading -->
            
            <!-- wp:list {"className":"is-style-checkmark"} -->
            <ul class="is-style-checkmark">
                <!-- wp:list-item -->
                <li>Responsive layouts</li>
                <!-- /wp:list-item -->
                
                <!-- wp:list-item -->
                <li>Clean aesthetics</li>
                <!-- /wp:list-item -->
                
                <!-- wp:list-item -->
                <li>User-friendly interfaces</li>
                <!-- /wp:list-item -->
            </ul>
            <!-- /wp:list -->
        </div>
        <!-- /wp:column -->
        
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:image {"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/icon-speed.svg" alt="Speed icon" width="60" height="60"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:heading {"level":3} -->
            <h3>Fast Performance</h3>
            <!-- /wp:heading -->
            
            <!-- wp:list {"className":"is-style-arrow"} -->
            <ul class="is-style-arrow">
                <!-- wp:list-item -->
                <li>Optimized loading</li>
                <!-- /wp:list-item -->
                
                <!-- wp:list-item -->
                <li>SEO friendly</li>
                <!-- /wp:list-item -->
                
                <!-- wp:list-item -->
                <li>Mobile first</li>
                <!-- /wp:list-item -->
            </ul>
            <!-- /wp:list -->
        </div>
        <!-- /wp:column -->
        
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:image {"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/icon-support.svg" alt="Support icon" width="60" height="60"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:heading {"level":3} -->
            <h3>Expert Support</h3>
            <!-- /wp:heading -->
            
            <!-- wp:list {"className":"is-style-plus"} -->
            <ul class="is-style-plus">
                <!-- wp:list-item -->
                <li>24/7 availability</li>
                <!-- /wp:list-item -->
                
                <!-- wp:list-item -->
                <li>Technical expertise</li>
                <!-- /wp:list-item -->
                
                <!-- wp:list-item -->
                <li>Quick response times</li>
                <!-- /wp:list-item -->
            </ul>
            <!-- /wp:list -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->