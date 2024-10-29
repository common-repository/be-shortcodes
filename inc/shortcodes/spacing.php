<?php
/**
 * Spacing shortcode.
 */
function be_spacing_shortcode( $atts ) {

	extract( shortcode_atts( array(
		'size'  => '30px',
		'class' => '',
	),
	$atts ) );

	return '<hr class="be-spacing '. esc_attr( $class ) .'" style="height: '. esc_attr( $size ) .'" />';
}
add_shortcode( 'be_spacing', 'be_spacing_shortcode' );
