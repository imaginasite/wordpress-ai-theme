<?php
/**
 * Title: Team Members
 * Slug: myaitheme/team-members
 * Categories: team
 * Description: Team member profiles in a grid layout
 * Keywords: team, staff, profiles
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    <!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
    <h2 class="wp-block-heading has-text-align-center has-x-large-font-size">Meet Our Team</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">Dedicated professionals committed to your success</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
            <figure class="wp-block-image size-full is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/team-1.jpg" alt="Alex Johnson"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:heading {"level":3,"textAlign":"center"} -->
            <h3 class="wp-block-heading has-text-align-center">Alex Johnson</h3>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
            <p class="has-text-align-center has-small-font-size">Creative Director</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:social-links {"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
            <ul class="wp-block-social-links is-style-logos-only">
                <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                <!-- wp:social-link {"url":"#","service":"twitter"} /-->
                <!-- wp:social-link {"url":"#","service":"instagram"} /-->
            </ul>
            <!-- /wp:social-lokens -->
        </div>
        <!-- /wp:column -->
        
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
            <figure class="wp-block-image size-full is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/team-2.jpg" alt="Maria Garcia"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:heading {"level":3,"textAlign":"center"} -->
            <h3 class="wp-block-heading has-text-align-center">Maria Garcia</h3>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
            <p class="has-text-align-center has-small-font-size">Lead Developer</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:social-links {"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
            <ul class="wp-block-social-links is-style-logos-only">
                <!-- wp:social-link {"url":"#","service":"github"} /-->
                <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                <!-- wp:social-link {"url":"#","service":"twitter"} /-->
            </ul>
            <!-- /wp:social-lokens -->
        </div>
        <!-- /wp:column -->
        
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
            <figure class="wp-block-image size-full is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/team-3.jpg" alt="David Kim"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:heading {"level":3,"textAlign":"center"} -->
            <h3 class="wp-block-heading has-text-align-center">David Kim</h3>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
            <p class="has-text-align-center has-small-font-size">Project Manager</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:social-links {"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
            <ul class="wp-block-social-links is-style-logos-only">
                <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                <!-- wp:social-link {"url":"#","service":"twitter"} /-->
            </ul>
            <!-- /wp:social-lokens -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->