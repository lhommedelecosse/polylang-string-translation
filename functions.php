<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

/**
 * Polylang strings for translation
 * Add strings not found in plugins by Polylang
 * These strings will appeare under string translations
 * pll_register_string( group, string to taranslate, text domain )
 */
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

  add_action('init', function() {
    pll_register_string('free_home_delivery', 'Free Home Delivery', 'WooCommerce Shipping Methods');
    pll_register_string('paid_home_delivery', 'Paid Home Delivery', 'WooCommerce Shipping Methods');
    pll_register_string('we_are_closed', 'We are closed', 'Store Hours');
    pll_register_string('we_are_currently_closed', 'Sorry but we are currently closed for online orders. Please see our hours of operation and come back soon.', 'Store Hours');
  });
