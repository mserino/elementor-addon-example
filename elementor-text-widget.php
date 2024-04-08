<?php
/**
 * Plugin Name: Elementor Text Example Widget
 * Description: Text example for Elementor.
 * Plugin URI:  https://elementor.com/
 * Version:     1.0.0
 * Author:      Elementor Developer
 * Author URI:  https://developers.elementor.com/
 * Text Domain: elementor-list-widget
 *
 * Requires Plugins: elementor
 * Elementor tested up to: 3.20.0
 * Elementor Pro tested up to: 3.20.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Register Text Example.
 *
 * Include widget file and register widget class.
 *
 * @since 1.0.0
 * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.
 * @return void
 */
function register_text_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/text-widget.php' );

	$widgets_manager->register( new \Elementor_Text_Example_Widget() );

}
add_action( 'elementor/widgets/register', 'register_text_widget' );