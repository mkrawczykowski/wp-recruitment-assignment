<?php defined('ABSPATH') or die; ?>

<?php
  if (has_nav_menu( 'header-menu')) {
    wp_nav_menu(array(
      'menu'        => 'header-menu',
      'theme_location' => 'header-menu',
      'container'   => '',
      'menu_class'  => 'main-menu',
      'menu_id'     => 'main-menu'
    ));
  }
?>  
