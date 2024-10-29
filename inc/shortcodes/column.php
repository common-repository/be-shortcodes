<?php
/**
 * Columns
 */
function be_column_shortcode( $atts, $content = null ) {

	extract( shortcode_atts( array(
		'size'       => 'one-third',
		'position'   => 'first',
		'class'      => '',
		'visibility' => 'all',
	), $atts ) );

	$class = ( $class ) ? '' . esc_attr( $class ) . ' ' : '';

	return '<div class="be-column be-' . esc_attr( $size ) . ' be-column-' . esc_attr( $position ) . ' ' . esc_attr( $class ) . 'be-' . esc_attr( $visibility ) . '">' . wp_kses_post( do_shortcode( $content ) ) . '</div>';
}
add_shortcode( 'be_column', 'be_column_shortcode' );
