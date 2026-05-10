<?php
/**
 * Title: Benefits Section
 * Slug: myaitheme/benefits-section
 * Categories: features
 * Description: Benefits list with numbered steps
 * Keywords: benefits, steps, process
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis:50%">
            <!-- wp:heading {"fontSize":"x-large"} -->
            <h2 class="wp-block-heading has-x-large-font-size">Our Simple Process</h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph -->
            <p>Follow these easy steps to get started with our services and achieve your goals efficiently.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
        
        <!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis:50%">
            <!-- wp:list {"className":"is-style-numbered"} -->
            <ul class="is-style-numbered">
                <!-- wp:list-item -->
                <li><strong>Initial Consultation</strong><br>We discuss your requirements and goals to understand your needs.</li>
                <!-- /wp:list-item -->
                
                <!-- wp:list-item -->
                <li><strong>Project Planning</strong><br>Our team creates a detailed plan and timeline for your project.</li>
                <!-- /wp:list-item -->
                
                <!-- wp:list-item -->
                <li><strong>Development Phase</strong><br>We build your solution with regular updates and feedback sessions.</li>
                <!-- /wp:list-item -->
                
                <!-- wp:list-item -->
                <li><strong>Testing & Delivery</strong><br>Thorough testing ensures quality before final delivery.</li>
                <!-- /wp:list-item -->
            </ul>
            <!-- /wp:list -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->