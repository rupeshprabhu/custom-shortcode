<?php
/**
 * Undocumented function
 * Plugin Name: Custom ShortCode
 * Plugin URI: https://github.com/rupeshprabhu/custom-shortcode
 * Description: A Custom short code plugin to showcase the recent 5 posts in wordpress
 * Author: Rupesh Prabhu
 * Version: 1.0
 * Author URI: https://github.com/rupeshprabhu
 * Text Domain: shortcoder
 * Domain Path: /languages
 *
 * @since 0.0.0
 */
function custom_shortcode_posts() {
    /** funtion for test php file to return the image */
    $args = array(
    'post_status' => 'publish',
    'posts_per_page' => 5,
    'orderby' => 'post_date',
    'order' => 'DESC',);
    $latest_post = new WP_Query( $args );

    wp_reset_postdata();
    return '<img src="http://dayoftheindie.com/wp-content/uploads/avatar-simple.png" alt="doti-avatar" width="96" height="96" class="left-align" />';
}

add_shortcode('custom-shortcode','custom_shortcode_posts');