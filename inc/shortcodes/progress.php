<?php
/**
 * Donation Progress
 */
function be_progressbar_shortcode( $atts  ) {

	extract( shortcode_atts( array(
		'title'        => '',
		'percentage'   => '75',
		'color'        => '#f1c40f',
		'class'        => '',
		'show_percent' => 'true',
		'visibility'   => 'all',
	), $atts ) );

	// Load scripts
	wp_enqueue_script( 'be-progressbar' );
	wp_enqueue_script( 'be-waypoints' );

	$class = ( $class ) ? '' . esc_attr( $class ) . ' ' : '';

	// Display the progress bar
	$output = '<div class="be-progressbar ' . esc_attr( $class ) .'be-' . esc_attr( $visibility ) . '" data-percent="' . absint( $percentage ) . '%">';
		if ( $title !== '' ) $output .= '<div class="be-progressbar-title" style="background: ' . $color . ';"><span>' . sanitize_title( $title ) . '</span></div>';
		$output .= '<div class="be-progressbar-bar" style="background: ' . $color . ';"></div>';
		if ( $show_percent == 'true' ) {
			$output .= '<div class="be-progress-bar-percent">' . absint( $percentage ) . '%</div>';
		}
	$output .= '</div>';

	return $output;
}
add_shortcode( 'be_progressbar', 'be_progressbar_shortcode' );
