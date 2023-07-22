<?php defined('ABSPATH') or die; ?>

<?php
  if (has_nav_menu( 'header-menu')) {
    wp_nav_menu(array(
      'menu'        => 'header-menu',
      'theme_location' => 'header-menu',
      'container'   => 'div',
      'container_class'   => 'main-menu',
      'container_id'   => 'js-main-menu',
      'menu_class'  => 'main-menu__menu',
      'menu_id'     => 'main-menu__menu'
    ));
  }
?>  
