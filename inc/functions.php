<?php

/**
 * Allow shortcodes in widgets
 */
add_filter( 'widget_text', 'do_shortcode' );

/**
 * Fix Shortcodes
 */
if ( ! function_exists( 'be_fix_shortcodes' ) ) :
	function be_fix_shortcodes( $content ){
		$array = array (
			'<p>['    => '[',
			']</p>'   => ']',
			']<br />' => ']'
		);
		$content = strtr( $content, $array );

		return $content;
	}
	add_filter( 'the_content', 'be_fix_shortcodes' );
endif;
