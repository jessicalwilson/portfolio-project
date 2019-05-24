<?php
/** Enable HTML5 Templates */
add_theme_support( 'html5', [
	'search-form',
	'comment-list',
	'comment-form',
	'gallery',
	'caption',
] );

/** Allow WordPress to manage the document title */
add_theme_support( 'title-tag' );

/**
 * Register Menus
 */
add_action('init', function () {
	register_nav_menus([
		'header' => __('Header Menu', 'custom'),
	]);
});

function custom_wp_enqueue_scripts() {
	wp_enqueue_style('google-font-benchnine', 'https://fonts.googleapis.com/css?family=BenchNine:300,700');
	wp_enqueue_style('app', get_theme_file_uri('/dist/app.css'));
}
add_action('wp_enqueue_scripts', 'custom_wp_enqueue_scripts');
