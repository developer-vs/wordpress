<?php

  function load_scripts() {
  
    // Bootstrap
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.3.1', 'all'); 
    
    // CSS
    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.css', array(), '1.0', 'all');   
    
    // Font-Awesome    
    wp_enqueue_style('font-awesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    // alternative path: //maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css
        
    // JQuery
    wp_enqueue_script('main-jquery', get_template_directory_uri() . '/js/main-jquery.js', array('jquery'), null, true);
    
    // JS
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), null, true);      
  }

  add_action('wp_enqueue_scripts', 'load_scripts');
  
 
  function register_custom_nav_menus() {
    register_nav_menus( array(
      'main_menu' => 'Main Menu',
      'footer_menu' => 'Footer Menu',
    ) );
  }
  
  add_action( 'after_setup_theme', 'register_custom_nav_menus' );
