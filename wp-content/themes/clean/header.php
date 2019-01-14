<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clean
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- .header -->
<?php dynamic_sidebar('header'); ?>
<!-- END .header -->

<div id="fh5co-main">
  <div class="fh5co-intro text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <?php if ( is_single() || ( is_page() && !is_front_page() ) ): ?>
            <h1 class="intro-lead"><?php the_title(); ?></h1>
          <?php else: ?>
            <h1 class="intro-lead"><?php bloginfo('description'); ?></h1>
          <?php endif; ?>
          <p class="">100% Free HTML5 Template by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a></p>
        </div>
      </div>
    </div>
  </div>
