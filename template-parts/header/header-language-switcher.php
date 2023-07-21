<?php defined('ABSPATH') or die; ?>  

<?php
  if (has_nav_menu('language-switcher')){
    wp_nav_menu(array(
      'theme_location' => 'language-switcher',
      'container'   => '',
      'menu_class'  => 'language-switcher',
      'menu_id'     => 'language-switcher'
    )) ;
  };
?>  