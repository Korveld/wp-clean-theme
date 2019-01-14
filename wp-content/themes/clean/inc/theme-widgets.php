<?php
function clean_widgets_init() {
  register_sidebar(array(
    'name' => esc_html__('Sidebar', 'clean'),
    'id' => 'sidebar',
    'description' => esc_html__('Add widgets here.', 'clean'),
    'before_widget' => '<div data-widget-name="Sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));
  register_sidebar(array(
    'name' => esc_html__('Header', 'clean'),
    'id' => 'header',
    'description' => esc_html__('Add widgets here.', 'clean'),
    'before_widget' => '<div data-widget-name="Header">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
  ));
  register_sidebar(array(
    'name' => esc_html__('Footer', 'clean'),
    'id' => 'footer',
    'description' => esc_html__('Add widgets here.', 'clean'),
    'before_widget' => '<div data-widget-name="Footer">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
  ));
  register_sidebar(array(
    'name' => esc_html__('Features block', 'clean'),
    'id' => 'features-block',
    'description' => esc_html__('Add widgets here.', 'clean'),
    'before_widget' => '<div data-widget-name="Features block">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
  ));
}
add_action( 'widgets_init', 'clean_widgets_init' );