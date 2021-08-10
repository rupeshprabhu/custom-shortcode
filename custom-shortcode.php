<?php
/**
 * Undocumented function
 * Plugin Name: Custom ShortCode
 * Plugin URI: https://github.com/rupeshprabhu/custom-shortcode
 * Description: Display a listing of posts using the [custom-shortcode] shortcode
 * Author: Rupesh Prabhu
 * Version: 1.0
 * Author URI: https://github.com/rupeshprabhu
 * Text Domain: shortcoder
 * Domain Path: /languages
 *
 * @since 0.0.0
 */
add_shortcode('custom-shortcode','custom_shortcode_posts');
function custom_shortcode_posts() {
    /** funtion for test php file to return the image */
    $args = array(
    'post_status' => 'publish',
    'posts_per_page' => 5,
    'orderby' => 'post_date',
    'order' => 'DESC',); //Conditional Statements for latest posts
    $latest_post = new WP_Query( $args ); //Creating WP Query
    if($latest_post->have_posts()){ //checking if we have posts
        while($latest_post->have_posts()){ //loop through all the posts
            $latest_post->the_post();//increamenting the posts
            echo '<h2><a href='.get_the_permalink().'>'.get_the_title().'</h2></a><p>'.the_excerpt(__('(more…)')).'</p>';
        }
        wp_reset_postdata(); //restore our original posts data
    }
    else{
        //no posts
    }
}