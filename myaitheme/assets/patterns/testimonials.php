<?php
/**
 * Title: Testimonials
 * Slug: myaitheme/testimonials
 * Categories: testimonials
 * Description: Customer testimonials in a slider layout
 * Keywords: testimonials, reviews, quotes
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    <!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
    <h2 class="wp-block-heading has-text-align-center has-x-large-font-size">What Our Clients Say</h2>
    <!-- /wp:heading -->
    
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"very-light-gray","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-very-light-gray-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size">"Outstanding service! The team delivered exactly what we needed on time and within budget. Highly recommended!"</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"width":50,"height":50,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
                    <figure class="wp-block-image is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/avatar-1.jpg" alt="Sarah Johnson" width="50" height="50"/></figure>
                    <!-- /wp:image -->
                    
                    <!-- wp:group -->
                    <div class="wp-block-group">
                        <!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size"><strong>Sarah Johnson</strong></p>
                        <!-- /wp:paragraph -->
                        
                        <!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size">Marketing Director</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
        
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"very-light-gray","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-very-light-gray-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size">"Professional, creative, and efficient. They understood our vision and brought it to life better than we imagined."</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"width":50,"height":50,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
                    <figure class="wp-block-image is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/avatar-2.jpg" alt="Mike Chen" width="50" height="50"/></figure>
                    <!-- /wp:image -->
                    
                    <!-- wp:group -->
                    <div class="wp-block-group">
                        <!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size"><strong>Mike Chen</strong></p>
                        <!-- /wp:paragraph -->
                        
                        <!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size">Tech Startup Founder</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->