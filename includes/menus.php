<?php defined('ABSPATH') or die; ?>

<?php
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Główna nawigacja' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );
?>