<?php
/**
 * Twenty Twenty-Four functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage eminent
 * @since eminent 1.0
 */

/**
 * Register block styles.
 */

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
 add_theme_support( 'woocommerce' );
}   
?>