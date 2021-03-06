<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package clean
 */

get_header();
?>

<div id="fh5co-portfolio">

  <?php if ( have_posts() ) : $i = 1; while ( have_posts() ) : the_post(); ?>
    <?php
    if (has_post_thumbnail()) {
      $img_url = get_the_post_thumbnail_url();
    } else {
      $img_url = '//picsum.photos/1280/864';
    }
    ?>

    <div class="fh5co-portfolio-item <?php if ($i % 2 == 0) echo 'fh5co-img-right'; ?>">
      <div class="fh5co-portfolio-figure animate-box" style="background-image: url(<?php echo $img_url; ?>);"></div>
      <div class="fh5co-portfolio-description">
        <h2><?php the_title(); ?></h2>
        <?php the_content(''); ?>
        <p><a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php _e('Read more', 'clean') ?></a></p>
      </div>
    </div>

  <?php
  $i++;
  endwhile;
  else :
    _e('No posts in category', 'clean');
  endif;
  wp_reset_postdata();
  ?>

</div>

<?php get_footer();