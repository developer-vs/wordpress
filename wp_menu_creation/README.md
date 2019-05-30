## The WP Menu Creation

### functions.php

 - register_nav_menus( array $locations = array() ) -> registers navigation menu locations for a theme. 
 
 ```php
 register_nav_menus(
    array (
      'main_menu' => 'Main Menu',
      'footer_menu' => 'Footer Menu'
    )
  );
 ```
https://developer.wordpress.org/reference/functions/register_nav_menus/


### header.php, footer.php

- wp_nav_menu( array $args = array() ) -> displays a navigation menu.

 ```php
 <nav class="main-menu col-md-10 text-right">
   <?php wp_nav_menu(array('theme_location' => 'main_menu')); ?>
 </nav>
 ```
 
https://developer.wordpress.org/reference/functions/wp_nav_menu/
