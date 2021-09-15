<?php
/**
 * Main short code function
 * Plugin Name: Custom ShortCode
 * Plugin URI: https://github.com/rupeshprabhu/custom-shortcode
 * Description: Display a listing of posts using the [custom-shortcode] shortcode
 * Author: Rupesh Prabhu
 * Version: 1.0
 * Author URI: https://github.com/rupeshprabhu
 * Text Domain: shortcoder
 * Domain Path: /languages
 *
 * @since 1.0.0
 * @package category
 */

add_shortcode( 'custom-shortcode', 'custom_shortcode_posts' );
/**  Function for the custom shortcode to display recent posts. */
function custom_shortcode_posts() {
	$args        = array(
		'post_status'    => 'publish',
		'posts_per_page' => 5,
		'orderby'        => 'post_date',
		'order'          => 'DESC',
	);
	$latest_post = new WP_Query( $args ); // Creating WP Query.
	foreach ( $latest_post->posts as $old_post ) {
		include 'templates/custom-shortcode.php';
	}
	/**
	*Tif ( $latest_post->have_posts() ) { // Checking if we have posts.
	*   while ( $latest_post->have_posts() ) { // loop through all the posts.
	*       $latest_post->the_post(); // increamenting the posts.
	*       echo '<h2><a href = ' .get_the_permalink(). '>' .get_the_title().' </h2></a> ';
	*       echo '<p><a href='.get_the_permalink().'>'.get_the_post_thumbnail().'</a></p>';
	*       echo '<p>'.the_excerpt(__('(more…)')).'</p>';
	*   }
	*   wp_reset_postdata(); // restore our original posts data.
	*}
	*else {
	*   echo 'No posts are published.';
	*}
	*/
}
