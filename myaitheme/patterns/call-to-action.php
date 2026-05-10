<?php
/**
 * Title: Call to Action
 * Slug: myaitheme/call-to-action
 * Categories: call-to-action, banner
 * Description: A prominent call to action section
 * Keywords: cta, banner, action
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"black","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-color has-black-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"width":"70%"} -->
        <div class="wp-block-column" style="flex-basis:70%">
            <!-- wp:heading {"textColor":"white","fontSize":"x-large"} -->
            <h2 class="wp-block-heading has-white-color has-text-color has-x-large-font-size">Ready to Get Started?</h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"textColor":"white"} -->
            <p class="has-white-color has-text-color">Join thousands of satisfied customers who have transformed their business with our solutions.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
        
        <!-- wp:column {"width":"30%","layout":{"type":"constrained","justifyContent":"center"}} -->
        <div class="wp-block-column" style="flex-basis:30%">
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"white","textColor":"black","className":"is-style-outline"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background wp-element-button">Contact Us Today</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->