<?php
/**
 * Google Map
 */
function be_shortcode_googlemaps( $atts, $content = null ) {

	$atts = shortcode_atts(array(
		'title'      => '',
		'location'   => '',
		'width'      => '',
		'height'     => '300',
		'zoom'       => 8,
		'align'      => '',
		'class'      => '',
		'visibility' => 'all',
		'key'        => '',
	), $atts );

	// Load scripts
	wp_enqueue_script( 'be_googlemap' );

	$title = sanitize_text_field( $atts['title'] );
	$location = sanitize_text_field( $atts['location'] );
	$width = intval( $atts['width'] );
	$height = intval( $atts['height'] );
	$zoom = intval( $atts['zoom'] );
	$align = sanitize_text_field( $atts['align'] );
	$class = sanitize_text_field( $atts['class'] );
	$visibility = sanitize_text_field( $atts['visibility'] );
	$key = sanitize_text_field( $atts['key'] );

	// Load Google API key if provided. Google requires new site to use API
	$api_key = ! empty( $key ) ? '&key=' . $key : '';

	wp_enqueue_script( 'be-googlemap-api', 'https://maps.googleapis.com/maps/api/js?sensor=false' . $api_key , array( 'jquery' ), null, true );

	$output = '<div id="map_canvas_'.rand( 1, 100 ).'" class="googlemap ' . $class .' be-' . $visibility . '" style="height:' . $height . 'px;width:100%">';
		$output .= ( !empty( $title ) ) ? '<input class="title" type="hidden" value="' . $title . '" />' : '';
		$output .= '<input class="location" type="hidden" value="' . $location . '" />';
		$output .= '<input class="zoom" type="hidden" value="' . $zoom . '" />';
		$output .= '<div class="map_canvas"></div>';
	$output .= '</div>';

	return $output;

}
add_shortcode( 'be_googlemap', 'be_shortcode_googlemaps' );
