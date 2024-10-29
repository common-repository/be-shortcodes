<?php
/**
 * Clear Floats
 */
function be_clear_float_shortcode() {
	return '<div class="be-clear-floats"></div>';
}
add_shortcode( 'be_clear_floats', 'be_clear_float_shortcode' );
