<?php get_header(); ?>

<?php if( get_theme_mod('clean_home_category') ) : ?>

  <div id="fh5co-portfolio">

    <?php $query = new WP_Query( array(
      'category_name' => get_theme_mod('clean_home_category'),
      'posts_per_page' => 4
    ) ); ?>

    <?php if ( $query->have_posts() ) : $i = 1; while ( $query->have_posts() ) : $query->the_post();

      get_template_part( 'template-parts/content', 'preview' );

    $i++; endwhile;
    else :
      _e('No posts in category', 'clean');
    endif;
    wp_reset_postdata();
    ?>

  </div>

<?php endif; ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; endif; wp_reset_postdata(); ?>

<?php dynamic_sidebar('features-block'); ?>

<?php get_footer();