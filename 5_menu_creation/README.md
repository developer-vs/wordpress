## The WP Menu Creation

### functions.php

Usage
```php
<?php register_nav_menus( $locations ); ?>
```

Parameters

$locations<br>
    (array) (required) An associative array of menu location slugs (key) and descriptions (according value).<br>
    Default: None

Return Values<br>
    None
 
 ```php
  add_action( 'after_setup_theme', 'register_custom_nav_menus' );
  
  function register_custom_nav_menus() {
   register_nav_menus( array(
    'main_menu' => 'Main Menu',
    'footer_menu' => 'Footer Menu',
   ) );
  }
 ```
https://codex.wordpress.org/Function_Reference/register_nav_menus

https://developer.wordpress.org/reference/functions/register_nav_menus/




### header.php, footer.php

Use wp_nav_menu() to display your custom menu.
 https://developer.wordpress.org/reference/functions/wp_nav_menu/

- wp_nav_menu( array $args = array() )

 ```html
 <!-- header.php -->
 <nav class="main-menu col-md-10 text-right">
   <?php wp_nav_menu(array('theme_location' => 'main_menu')); ?>
 </nav>

 <!-- footer.php -->
 <nav class="footer-menu col-sm-5 col-8 text-right">
   <?php wp_nav_menu(array('theme_location' => 'footer_menu')); ?>
 </nav>
 ```
