<?php
/**
 * Title: Latest Posts
 * Slug: myaitheme/latest-posts
 * Categories: posts
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group alignwide" style="padding-top:3rem;padding-bottom:3rem"><!-- wp:heading --><h2 class="wp-block-heading"><?php echo esc_html__( 'Latest posts', 'myaitheme' ); ?></h2><!-- /wp:heading --><!-- wp:query {"query":{"perPage":3,"postType":"post","order":"desc","orderBy":"date"},"align":"wide"} --><div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} --><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /--><!-- wp:post-title {"isLink":true,"level":3} /--><!-- wp:post-date {"fontSize":"small"} /--><!-- wp:post-excerpt /--><!-- /wp:post-template --></div><!-- /wp:query --></div><!-- /wp:group -->
