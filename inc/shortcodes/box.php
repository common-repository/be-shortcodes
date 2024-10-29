<?php
/**
 * Boxes
 */
function be_box_shortcode( $atts, $content = null ) {

	extract( shortcode_atts( array(
		'color'         => 'gray',
		'float'         => 'center',
		'text_align'    => 'left',
		'width'         => '100%',
		'margin_top'    => '',
		'margin_bottom' => '',
		'class'         => '',
		'visibility'    => 'all',
	), $atts ) );

	$style_attr = '';
	if ( $margin_bottom ) {
		$style_attr .= 'margin-bottom: ' . esc_attr( $margin_bottom ) . ';';
	}
	if ( $margin_top ) {
		$style_attr .= 'margin-top: ' . esc_attr( $margin_top ) . ';';
	}

	$class = ( $class ) ? '' . esc_attr( $class ) . ' ' : '';

	$box = '';
	$box .= '<div class="be-box ' . esc_attr( $color ) . ' ' . esc_attr( $float ) . ' ' . esc_attr( $class ) .'be-'. esc_attr( $visibility ) . '" style="text-align:' . esc_attr( $text_align ) . '; width:' . esc_attr( $width ) .';' . esc_attr( $style_attr ) .'">';
	$box .= '' . wp_kses_post( do_shortcode( $content ) ) . '</div>';

	return $box;
}
add_shortcode( 'be_box', 'be_box_shortcode' );
