<?php
function clean_scripts() {
  /*wp_enqueue_script( 'clean-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

  wp_enqueue_script( 'clean-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }*/

  wp_enqueue_script( 'modernizr-js', get_template_directory_uri() . '/assets/js/modernizr-2.6.2.min.js', array(), '', false);

  wp_deregister_script('jquery');
  wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '', true);
  wp_enqueue_script('jquery');

  wp_enqueue_script('scripts-min-js', get_template_directory_uri() . '/js/scripts.min.js',
    array('jquery'),
    filemtime(get_template_directory_uri() . '/js/scripts.min.js'),
    true
  );
}
add_action( 'wp_enqueue_scripts', 'clean_scripts' );