<?php 

  function load_scripts() {      
  	// to load just main css in root directory
    // wp_enqueue_style( 'style-name', get_stylesheet_uri() );


  	// CSS FILES
    wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/css/main.css' );
    wp_enqueue_style( 'font-awesome-min', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );

    // JS FILES 
    wp_enqueue_script( 'jquery-min', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3', true );
    wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), null, true );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(), null, true );
  }

  add_action( 'wp_enqueue_scripts', 'load_scripts' );

?>