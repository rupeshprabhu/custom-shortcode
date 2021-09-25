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
 * @package categoryp
 */

defined( 'ABSPATH' ) || exit;

/**
 * Plugin's file path
 *
 * @since 0.1.0
 */
define( 'CUSTOMSHORTCODE_PATH', plugin_dir_path( __FILE__ ) );

/**
 * Plugin's url path
 *
 * @since 0.1.0
 */
define( 'CUSTOMSHORTCODE_URL', plugin_dir_url( __FILE__ ) );

/**
 * Includes the main functionality file.
 *
 * @since 1.0.0
 */
require_once 'includes/shortcode.php';
