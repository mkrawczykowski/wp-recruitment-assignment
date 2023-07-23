<?php

function custom_scripts_and_styles() {
  $ASSET_INFO = include get_stylesheet_directory() . '/build/theme/index.asset.php';
  wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/build/theme/index.css', array(), $ASSET_INFO['version'] );
  wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/build/theme/index.js', $ASSET_INFO['dependencies'], $ASSET_INFO['version'] );
}
add_action( 'wp_enqueue_scripts', 'custom_scripts_and_styles' );



// add_action( 'admin_init', 'wpdocs_add_editor_styles' );
add_action( 'after_setup_theme', 'wpdocs_add_editor_styles' );
function wpdocs_add_editor_styles() {
  // add_theme_support( 'editor-styles' );
  add_theme_support( 'wp-block-styles' );
  // add_editor_style( 'editor-style.css' );

  add_editor_style( get_stylesheet_directory_uri() . '/build/theme/index.css' );
}



// function custom_admin_scripts_and_styles(){
// 	global $pagenow;

// 	if ($pagenow != 'post.php') {
// 		return;
// 	}

//   $ASSET_INFO = include get_stylesheet_directory() . '/build/theme/index.asset.php';
//   wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/build/theme/index.css', array(), $ASSET_INFO['version'] );

// 	// wp_register_script( 'some-js', get_template_directory_uri().'/js/some.js', array('jquery-core'), false, true );
//   // wp_enqueue_script( 'some-js' );
// }

// add_action( 'admin_enqueue_scripts', 'custom_admin_scripts_and_styles', 9999);


// add_action( 'enqueue_block_editor_assets', 'my_enqueue_block_editor_assets', 102);
// function my_enqueue_block_editor_assets () {
//   // wp_deregister_style('wp-reset-editor-styles');
//   $ASSET_INFO = include get_stylesheet_directory() . '/build/theme/index.asset.php';
//   wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/build/theme/index.css', array(),$ASSET_INFO['version'] );
// }




// // Add backend styles for Gutenberg.
// add_action('enqueue_block_editor_assets', 'gutenberg_editor_assets');

// function gutenberg_editor_assets() {
//   // Load the theme styles within Gutenberg.
// $ASSET_INFO = include get_stylesheet_directory() . '/build/theme/index.asset.php';
//   wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/build/theme/index.css', array(), $ASSET_INFO['version'] );}


?>