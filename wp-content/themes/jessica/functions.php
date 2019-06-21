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
	wp_enqueue_style('google-font-lato', 'https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i&display=swap');
	wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css');
	wp_enqueue_style('animate-on-scroll', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
	wp_enqueue_style('app', get_theme_file_uri('/dist/app.css'));
	wp_enqueue_script('animate-on-scroll', 'https://unpkg.com/aos@2.3.1/dist/aos.js', ['jquery'], false, true);
	wp_enqueue_script('app', get_theme_file_uri('/dist/app.js'), ['jquery'], false, true);
}
add_action('wp_enqueue_scripts', 'custom_wp_enqueue_scripts');

add_filter( 'gform_confirmation_anchor', '__return_true' );