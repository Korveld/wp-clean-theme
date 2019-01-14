<?php
function clean_styles() {
  wp_enqueue_style( 'clean-style', get_stylesheet_uri() );

  wp_enqueue_style('roboto-font', 'http://fonts.googleapis.com/css?family=Roboto:400,300,100,500');
  wp_enqueue_style('roboto-slab-font', 'http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,500');

  wp_enqueue_style('animate-css', get_template_directory_uri() . '/css/animate.css', array(), null);
  wp_enqueue_style('icomoon-css', get_template_directory_uri() . '/css/icomoon.css', array(), null);
  wp_enqueue_style('simple-line-icons-css', get_template_directory_uri() . '/css/simple-line-icons.css', array(), null);

  wp_enqueue_style('style-css', get_template_directory_uri() . '/css/style.css',
    array(),
    filemtime(get_template_directory_uri() . '/css/style.css')
  );
}
add_action( 'wp_enqueue_scripts', 'clean_styles' );