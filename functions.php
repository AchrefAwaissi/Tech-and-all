<?php
 function register_navwalker(){
   require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
 }
 add_action( 'after_setup_theme', 'register_navwalker' );

  // Theme Support
  function wpb_theme_setup(){
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('widgets');





    // Nav Menus
    register_nav_menus(array(
      'primary' => __('Primary Menu','Tech and All theme'),
  
    ));
  }
  add_action('after_setup_theme','wpb_theme_setup');
//add the navwalker wp
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Customizer File
require get_template_directory(). '/inc/customizer.php';
