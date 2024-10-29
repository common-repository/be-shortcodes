<?php
/**
 * Font Awesome Icons
 */
function be_icon_shortcode( $atts ) {

	extract( shortcode_atts( array(
		'type'     => '',
		'size'     => '',
		'rotate'   => '',
		'flip'     => '',
		'pull'     => '',
		'animated' => '',
		'color'    => '',
	), $atts ) );

	// Load scripts
	wp_enqueue_style( 'be-font-awesome' );

	$type     = ( $type ) ? 'fa-' . esc_attr( $type ) . '' : '';
	$size     = ( $size ) ? 'fa-' . esc_attr( $size ) . '' : '';
	$rotate   = ( $rotate ) ? 'fa-rotate-' . esc_attr( $rotate ) . '' : '';
	$flip     = ( $flip ) ? 'fa-flip-' . esc_attr( $flip ) . '' : '';
	$pull     = ( $pull ) ? 'pull-' . esc_attr( $pull ) . '' : '';
	$animated = ( $animated ) ? 'fa-spin' : '';
	$color    = ( $color ) ? '' . sanitize_hex_color( $color ) . '' : '';

	$icon = '<i style="color:' . $color . ';" class="fa ' . $type . ' ' . $size . ' ' . $rotate . ' ' . $flip . ' ' . $pull . ' ' . $animated . '"></i>';

	return $icon;
}
add_shortcode( 'icon', 'be_icon_shortcode' );
