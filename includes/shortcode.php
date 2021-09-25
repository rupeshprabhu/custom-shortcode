<?php
/**
 * Shortcode Plugin File
 *
 * @package custom-shortcode
 *
 * @since 1.0.0
 * @version 1.0.0
 */

defined( 'ABSPATH' ) || exit;

// adds the custom short code.
add_shortcode( 'custom-shortcode', 'custom_shortcode_posts' );

// adds the custom stylesheet.
add_action( 'wp_enqueue_scripts', 'shortcode_style' );

/**
 * Fetches the oldest 5 posts.
 *
 * @since 1.0.0
 */
function custom_shortcode_posts() {
	// Declaring $arg variable and asssigning the value to the properties.
	$args        = array(
		'post_status'    => 'publish',
		'posts_per_page' => 5,
		'orderby'        => 'post_date',
		'order'          => 'DESC',
	);
	$latest_post = new WP_Query( $args ); // Creating WP Query.
	foreach ( $latest_post->posts as $old_post ) {
		include CUSTOMSHORTCODE_PATH . 'templates/custom-shortcode.php';
	}
}

/**
 * Adds the custom css file name style.css.
 *
 * @since 1.0.0
 */
function shortcode_style() {

	// Passing paramerters to register wp_register_style function.
	wp_register_style(
		'style',
		CUSTOMSHORTCODE_URL . 'assets/css/style.css',
		array(),
		1,
		'all'
	);
	wp_enqueue_style( 'style' );
}
