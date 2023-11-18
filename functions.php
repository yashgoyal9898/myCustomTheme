<?php

function mytheme_setup() {
  add_theme_support('post-thumbnails');
  add_theme_support('menus');
  register_nav_menus( 
    array(
      'header-menu' => __('Header Menu', 'myblog'),  // header-menu (this is slug here)
      'footer-menu-one' => __('Footer Menu one', 'myblog'),
      'footer-menu-two' => __('Footer Menu two', 'myblog'),
      'footer-menu-three' => __('Footer Menu three', 'myblog'),
    )
  );
}
add_action('after_setup_theme', 'mytheme_setup');


function enqueue_custom_styles() {
  wp_enqueue_style('custom', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), time(), 'all' );
  wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css', array(), '5.3.1', 'all');
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_styles' );



?>