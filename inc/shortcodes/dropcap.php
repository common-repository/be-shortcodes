<?php
/**
 * Dropcap
 */
function be_dropcap_shortcode( $atts, $content = null ) {

	extract( shortcode_atts( array(
		'color'      => '#000',
		'size'       => '72px',
		'class'      => '',
		'visibility' => 'all',
	),
	$atts ) );

	$class = ( $class ) ? '' . esc_attr( $class ) . ' ' : '';

	return '<span style="color:' . sanitize_hex_color( $color ) . ';font-size: ' . esc_attr( $size ) . ';" class="be-dropcap '. esc_attr( $class ) .'be-'. esc_attr( $visibility ) .'">' . wp_kses_post( do_shortcode( $content ) ) . '</span>';
}
add_shortcode( 'be_dropcap', 'be_dropcap_shortcode' );
