<?php
/**
 * Tab Group
 */
function be_tabgroup_shortcode( $atts, $content = null ) {

	// Load scripts
	wp_enqueue_script( 'be-tabs' );

	// Display Tabs
	$defaults = array();
	extract( shortcode_atts( $defaults, $atts ) );
	preg_match_all( '/tab title="([^\"]+)"/i', $content, $matches, PREG_OFFSET_CAPTURE );

	$tab_titles = array();
	if ( isset($matches[1]) ) {
		$tab_titles = $matches[1];
	}

	$output = '';
	if ( count( $tab_titles ) ){
		$output .= '<div id="be-tab-'. rand(1, 100) .'" class="be-tabs">';
			$output .= '<ul class="ui-tabs-nav be-clearfix">';
			foreach( $tab_titles as $tab ){
				$output .= '<li><a href="#be-tab-'. sanitize_title( $tab[0] ) .'">' . esc_attr( $tab[0] ) . '</a></li>';
			}
			$output .= '</ul>';
			$output .= wp_kses_post( do_shortcode( $content ) );
		$output .= '</div>';
	} else {
		$output .= wp_kses_post( do_shortcode( $content ) );
	}

	return $output;
}
add_shortcode( 'be_tabgroup', 'be_tabgroup_shortcode' );

function be_tab_shortcode( $atts, $content = null ) {

	$defaults = array(
		'title'      => 'Tab',
		'class'      => '',
		'visibility' => 'all',
	);

	extract( shortcode_atts( $defaults, $atts ) );

	return '<div id="be-tab-' . sanitize_title( $title ) . '" class="tab-content ' . esc_attr( $class ) . ' be-' . esc_attr( $visibility ) . '"><p>' . wp_kses_post( do_shortcode( $content ) ) . '</p></div>';
}
add_shortcode( 'be_tab', 'be_tab_shortcode' );
