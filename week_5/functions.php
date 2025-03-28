<?php

function twentytwentyfour_child_enqueue_styles(): void {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ), wp_get_theme()->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'twentytwentyfour_child_enqueue_styles' );


