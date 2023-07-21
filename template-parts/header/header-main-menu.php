<?php defined('ABSPATH') or die; ?>

<div class="main-menu">
  <?php
    wp_nav_menu(array(
      'menu'        => 'header-menu',
      'container'   => '',
      'menu_class'  => 'main-menu__menu',
      'menu_id'     => 'main-menu__menu'
    ))
  ?>  
</div>
