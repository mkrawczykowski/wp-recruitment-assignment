<?php defined('ABSPATH') or die; ?>

<?php
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Główna nawigacja' ),
      'language-switcher' => __( 'Polylang switcher' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );
?>