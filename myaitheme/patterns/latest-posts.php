<?php
/**
 * Title: Latest Posts
 * Slug: myaitheme/latest-posts
 * Categories: query, featured
 * Description: A modern SaaS card layout grid showing the latest blog posts.
 * Keywords: query, latest, posts, grid
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg)">
    <!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:heading {"textAlign":"center","level":2,"fontSize":"xx-large"} -->
        <h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php esc_html_e( 'Latest News & Insights', 'myaitheme' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|lg"}}},"fontSize":"medium"} -->
        <p class="has-text-align-center has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--lg)"><?php esc_html_e( 'Stay up to date with our latest stories, product updates, and SaaS advice.', 'myaitheme' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
        <div class="wp-block-query">
            <!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|md"}}} -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|md","bottom":"var:preset|spacing|md","left":"var:preset|spacing|md","right":"var:preset|spacing|md"}},"border":{"radius":"12px","shadow":"0 4px 20px rgba(0,0,0,0.05)","width":"1px","style":"solid","color":"var:preset|color|very-light-gray"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-white-background-color has-background" style="border-style:solid;border-width:1px;border-color:var(--wp--preset--color--very-light-gray);border-radius:12px;box-shadow:0 4px 20px rgba(0,0,0,0.05);padding-top:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--md);padding-left:var(--wp--preset--spacing--md);padding-right:var(--wp--preset--spacing--md)">
                
                <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"border":{"radius":"8px"}}} /-->
                
                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","gap":"var:preset|spacing|xs"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|sm","bottom":"var:preset|spacing|xs"}}}} -->
                <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--sm);margin-bottom:var(--wp--preset--spacing--xs)">
                    <!-- wp:post-date {"fontSize":"small"} /-->
                    <!-- wp:post-terms {"term":"category","fontSize":"small"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:post-title {"isLink":true,"fontSize":"large","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xs"}}}} /-->

                <!-- wp:post-excerpt {"fontSize":"small","moreText":"Read Article"} /-->
                
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
