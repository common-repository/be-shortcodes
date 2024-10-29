<?php
/**
 * Buttons
 */
function be_button_shortcode( $atts, $content = null ) {

	extract( shortcode_atts( array(
		'color'         => '',
		'colorhex'      => '',
		'url'           => '',
		'title'         => '',
		'target'        => 'self',
		'rel'           => '',
		'border_radius' => '',
		'class'         => '',
		'icon_left'     => '',
		'icon_right'    => '',
		'visibility'    => 'all',

		 // Icon
		'icon_enabled'  => '',
		'icon_type'     => '',
		'icon_size'     => '',
		'icon_rotate'   => '',
		'icon_flip'     => '',
		'icon_animated' => '',
		'icon_color'    => '',
		'icon_margin'   => '',

	), $atts ) );

	$rel    = ( $rel ) ? 'rel="' . $rel . '"' : '';
	$title  = ( $title ) ? 'title="' . $title . '"' : '';
	$class  = ( $class ) ? '' . esc_attr( $class ) . ' ' : '';
	$button = '';

	$style_attr = '';

	if ( $colorhex ) {
		$style_attr .= 'background-color: ' . sanitize_hex_color( $colorhex ) . ';';
	}

	if ( $border_radius ) {
		$style_attr .= 'border-radius: ' . esc_attr( $border_radius ) . ';';
	}

	$button .= '<a style="font-family: inherit;' . $style_attr . '" href="' . esc_url( $url ) . '" class="be-button ' . esc_attr( $color ) . ' ' . esc_attr( $class ) . 'be-'. esc_attr( $visibility ) .'" target="_' . esc_attr( $target ) . '" ' . $title . ' '. esc_attr( $rel ) .'>';
		$button .= '<span class="be-button-inner">';
			if ( $icon_enabled == true ) $button .=  be_button_icon( $atts );
			if ( $icon_left ) $button .= '<span class="be-button-icon-left icon-'. esc_attr( $icon_left ) .'"></span>';
			$button .= $content;
			if ( $icon_right ) $button .= '<span class="be-button-icon-right icon-'. esc_attr( $icon_right ) .'"></span>';
		$button .= '</span>';

	$button .= '</a>';

	return $button;
}
add_shortcode( 'be_button', 'be_button_shortcode' );

/**
 * Custom button function.
 */
function be_button_icon( $atts ) {

	extract( shortcode_atts( array(
		'icon_type'     => '',
		'icon_size'     => '',
		'icon_rotate'   => '',
		'icon_flip'     => '',
		'icon_margin'   => '10px',
		'icon_animated' => '',
		'icon_color'    => 'inherit',
	), $atts) );

	// load scripts
	wp_enqueue_style( 'be-font-awesome' );

	$icon_type     = ( $icon_type ) ? 'fa-' . $icon_type . '' : '';
	$icon_size     = ( $icon_size ) ? 'fa-' . $icon_size . '' : '';
	$icon_rotate   = ( $icon_rotate ) ? 'fa-rotate-' . $icon_rotate . '' : '';
	$icon_flip     = ( $icon_flip ) ? 'fa-flip-' . $icon_flip . '' : '';
	$icon_margin   = ( $icon_margin ) ? '' . $icon_margin . '' : '';
	$icon_animated = ( $icon_animated ) ? 'fa-spin' : '';
	$icon_color    = ( $icon_color ) ? '' . $icon_color . '' : '';

	$icon = '<i style="color: ' . $icon_color . '; margin-right: ' . esc_attr( $icon_margin ) . '"  class="fa ' . sanitize_html_class( $icon_type ) . ' ' . esc_attr( $icon_size ) . ' ' . esc_attr( $icon_rotate ) . ' ' . esc_attr( $icon_flip ) . ' ' . esc_attr( $icon_animated ) . '"></i>';

	return $icon;
}
