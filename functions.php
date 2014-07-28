<?php
/**
 * Functions of the child theme for Webmarket WP
 */


/**
 * Add the style.css (from this folder) after the main.css file
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_enqueue_style Codex for wp_enqueue_style()
 */
if ( ! function_exists( 'add_additional_css' ) ) {
	function add_additional_css() {
		wp_enqueue_style( 'webmarket-child', get_stylesheet_uri() , array( 'main' ) );
	}
	add_action( 'wp_enqueue_scripts', 'add_additional_css', 20 );
}
