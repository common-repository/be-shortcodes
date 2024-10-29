<?php
/**
 * Highlights
 */
function be_highlight_shortcode( $atts, $content = null ) {

	extract( shortcode_atts( array(
		'color'      => 'yellow',
		'class'      => '',
		'visibility' => 'all',
	),
	$atts ) );

	$class = ( $class ) ? '' . esc_attr( $class ) . ' ' : '';

	return '<span class="be-highlight be-highlight-'. esc_attr( $color ) .' '. esc_attr( $class ) .'be-'. esc_attr( $visibility ) .'">' . wp_kses_post( do_shortcode( $content ) ) . '</span>';
}
add_shortcode( 'be_highlight', 'be_highlight_shortcode' );
