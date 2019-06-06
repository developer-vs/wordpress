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
#### register_nav_menus
https://codex.wordpress.org/Function_Reference/register_nav_menus
https://developer.wordpress.org/reference/functions/register_nav_menus/

#### after_setup_theme
https://codex.wordpress.org/Plugin_API/Action_Reference/after_setup_theme
https://developer.wordpress.org/reference/hooks/after_setup_theme/

Description<br>
This hook is called during each page load, after the theme is initialized. It is generally used to perform basic setup, registration, and init actions for a theme.

Usage
```php
<?php add_action( 'after_setup_theme', 'function_name' ); ?>
```
where "function_name" is the name of the function to be called.


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
