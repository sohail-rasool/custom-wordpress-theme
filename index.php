<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
get_header(); ?>

<?php

//(Loops)  https://developer.wordpress.org/themes/basics/the-loop/
if ( have_posts() ) : 
    while ( have_posts() ) : 
        the_post();
        // Get blog title
        the_title( '<h1>', '</h1>' ); 
        // Get blog content
        the_content();
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
?>

<?php get_sidebar() ?>
<?php get_footer(); ?>