<?php

function custom_scripts_and_styles() {
  $ASSET_INFO = include get_stylesheet_directory() . '/build/theme/index.asset.php';
  wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/build/theme/index.css', array(), $ASSET_INFO['version'] );
  wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/build/theme/index.js', $ASSET_INFO['dependencies'], $ASSET_INFO['version'] );
}
add_action( 'wp_enqueue_scripts', 'custom_scripts_and_styles' );

?>