<?php
/**
 * The main template file
 * This is required for theme compatibility
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php block_template_part( 'header' ); ?>
    
    <main>
        <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                the_content();
            }
        }
        ?>
    </main>
    
    <?php block_template_part( 'footer' ); ?>
    <?php wp_footer(); ?>
</body>
</html>