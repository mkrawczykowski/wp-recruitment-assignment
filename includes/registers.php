<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function assignment_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer column 1', 'assignment-theme' ),
		'id'            => 'sidebar-column-one',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer column 2', 'assignment-theme' ),
		'id'            => 'sidebar-column-two',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}

add_action( 'widgets_init', 'assignment_widgets_init' );


/**
 * Adding posiibility to upload a logo in Appearance->Header
 *
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