<?php
/**
 * Animation Effects
 */
function be_animation_shortcode( $atts, $content = null ) {

	extract( shortcode_atts( array(
		'type'      => '',
		'duration'  => '',
		'delay'     => '',
		'iteration' => '',
		'offset'    => '',
	), $atts ) );

	// Load scripts
	wp_enqueue_script( 'be-wow' );
	wp_enqueue_script( 'be-wow-init' );
	wp_enqueue_style( 'be-animation' );

	$type      = ( $type ) ? '' . esc_attr( $type ) . '' : '';
	$duration  = ( $duration ) ? '' . esc_attr( $duration ) . '' : '';
	$delay     = ( $delay ) ? '' . esc_attr( $delay ) . '' : '';
	$iteration = ( $iteration ) ? '' . esc_attr( $iteration ) . '' : '';

	$animation = '<div class="wow ' . $type . '" data-wow-duration="' . $duration . '" data-wow-offset="' . $offset . '" data-wow-delay="' . $delay . '" data-wow-iteration="' . $iteration . '">' . wp_kses_post( do_shortcode( $content ) ) . '</div>';

	return $animation;
}
add_shortcode( 'be_animation', 'be_animation_shortcode' );
