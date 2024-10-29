<?php
/**
 * Toggle
 */
function be_toggle_shortcode( $atts, $content = null ) {

	extract( shortcode_atts( array(
		'title'      => esc_html__( 'Toggle Title', 'be-shortcodes' ),
		'class'      => '',
		'visibility' => 'all',
	), $atts ) );

	// Load scripts
	wp_enqueue_script( 'be-toggle' );
	wp_enqueue_script( 'be-font-awesome' );

	$class = ( $class ) ? '' . esc_attr( $class ) . ' ' : '';

	// Display the Toggle
	return '<div class="be-toggle ' . esc_attr( $class ) .'be-' . esc_attr( $visibility ) . '"><div class="be-toggle-trigger">' . esc_attr( $title ) . '</div><div class="be-toggle-container">' . wp_kses_post( do_shortcode( $content ) ) . '</div></div>';
}
add_shortcode( 'be_toggle', 'be_toggle_shortcode' );
