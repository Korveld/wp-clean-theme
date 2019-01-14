<?php
/**
 * The template for displaying category pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package clean
 */

get_header();
?>

<div id="fh5co-portfolio">

  <?php if ( have_posts() ) : $i = 1; while ( have_posts() ) : the_post();

    get_template_part( 'template-parts/content', 'preview' );

  $i++; endwhile;
  the_posts_pagination( array(
    'end_size' => 1,
    'mid_size' => 1,
    'type' => 'list',
  ) );
  else :
    _e('No posts in category', 'clean');
  endif;
  wp_reset_postdata(); ?>

</div>

<?php dynamic_sidebar('features-block'); ?>

<?php
//get_sidebar();
get_footer();
