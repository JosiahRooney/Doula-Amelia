<?php

function theme_name_scripts() {
	wp_enqueue_style( 'styles', get_stylesheet_uri() );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'Home right sidebar',
		'id' => 'sidebar-1',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );