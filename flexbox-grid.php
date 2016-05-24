<?php
/**
 * @package flexbox-grid
 * @version 0.1.0
 */
/*
Plugin Name: Flexbox Grid
Plugin URI: https://wpzoo.ch/en/plugins/flexbox-grid/
Description: Just a simple shortcode plugin which uses the styles of flexboxgrid.com
Author: WPZOO
Version: 0.1.0
Author URI: https://wpzoo.ch/en/
*/

// Row Shortcode
function cobra_row( $atts, $content = null ) {

	$atts = shortcode_atts( array( 'class' => '' ), $atts, 'flex_row' );
	return '<div class="row ' . $atts['class'] . '">' . do_shortcode( $content ) . '</div>';
}
add_shortcode('flex_row', 'cobra_row');

// Col Shortcode
function cobra_col( $atts, $content = null ) {

	$atts = shortcode_atts( array( 'class' => 'col-xs' ), $atts, 'flex_col' );
	return '<div class="' . $atts['class'] . '">' . do_shortcode( $content ) . '</div>';
}
add_shortcode('flex_col', 'cobra_col');

// Load stylesheet
function cobra_styles() {
	wp_enqueue_style( 'cobra_stylesheet', plugins_url('css/flexboxgrid.min.css', __FILE__) );
}
add_action( 'wp_enqueue_scripts', 'cobra_styles' );