<?php defined('ABSPATH') or die; ?>  

<?php
/**
 * Register our sidebars and widgetized areas.
 */
function assignment_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer column 1 PL', 'assignment-theme' ),
		'id'            => 'footer_column_one_pl',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer column 2 PL', 'assignment-theme' ),
		'id'            => 'footer_column_two_pl',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer column 3 PL', 'assignment-theme' ),
		'id'            => 'footer_column_three_pl',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer column 1 EN', 'assignment-theme' ),
		'id'            => 'footer_column_one_en',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer column 2 EN', 'assignment-theme' ),
		'id'            => 'footer_column_two_en',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer column 3 EN', 'assignment-theme' ),
		'id'            => 'footer_column_three_en',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}

add_action( 'widgets_init', 'assignment_widgets_init' );


/**
 * Adding posiibility to upload a logo in Appearance->Header
 */
function assignment_custom_logo_setup() {
	$defaults = array(
		'height'               => 49,
		'width'                => 208,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => '',
		'unlink-homepage-logo' => false, 
	);
	add_theme_support( 'custom-logo', $defaults );
}

add_theme_support( 'custom-logo' );
add_action( 'after_setup_theme', 'assignment_custom_logo_setup' );



add_image_size('324', 324, '', false);
add_image_size('597', 597, '', false);