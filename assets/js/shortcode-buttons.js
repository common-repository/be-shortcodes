( function( $ ) {

	$( function() {

		'use strict';

		$( '.insert-shortcode' ).on( 'click', function() {

			// Close the thickbox modal window when a shortcode button is clicked
			self.parent.tb_remove();

			// Prepare shortcode variable
			var shortcode = '';

			// Get the id of the clicked element and load the correct shortcode
			switch ( this.id ) {

				// Columns
				case 'be_half':
					shortcode = '[be_column size="one-half" position="first"]' + beTranslate.exampleText + '[/be_column]';
					break;

				case 'be_third':
					shortcode = '[be_column size="one-third" position="first"]' + beTranslate.exampleText + '[/be_column]';
					break;

				case 'be_fourth':
					shortcode = '[be_column size="one-fourth" position="first"]' + beTranslate.exampleText + '[/be_column]';
					break;

				case 'be_fifth':
					shortcode = '[be_column size="one-fifth" position="first"]' + beTranslate.exampleText + '[/be_column]';
					break;

				case 'be_sixth':
					shortcode = '[be_column size="one-sixth" position="first"]' + beTranslate.exampleText + '[/be_column]';
					break;

				case 'be_twothird':
					shortcode = '[be_column size="two-third" position="first"]' + beTranslate.exampleText + '[/be_column]';
					break;

				case 'be_threefourth':
					shortcode = '[be_column size="three-fourth" position="first"]' + beTranslate.exampleText + '[/be_column]';
					break;

				case 'be_twofifth':
					shortcode = '[be_column size="two-fifth" position="first"]' + beTranslate.exampleText + '[/be_column]';
					break;

				case 'be_threefifth':
					shortcode = '[be_column size="three-fifth" position="first"]' + beTranslate.exampleText + '[/be_column]';
					break;

				// Elements
				case 'be_button':
					shortcode = '[be_button color="green" url="" title=""]' + beTranslate.exampleText + '[/be_button]';
					break;

				case 'be_dropcap':
					shortcode = '[be_dropcap color="#000" size="72px"]A[/be_dropcap]';
					break;

				case 'be_icon':
					shortcode = '[icon type="cloud" size="3x" pull="left" color="#cccccc"]';
					break;

				case 'be_map':
					shortcode = '[be_googlemap title="" location="5046 S Greenwood Ave, Chicago, IL 60615" zoom="14" height=250 key=]';
					break;

				case 'be_tabbed':
					shortcode = '[be_tabgroup]<br />[be_tab title="First Tab"]<br />First tab content<br />[/be_tab]<br />[be_tab title="Second Tab"]<br />Second Tab Content.<br />[/be_tab]<br />[/be_tabgroup]';
					break;

				case 'be_toggle':
					shortcode = '[be_toggle title="Toggle Title"]' + beTranslate.exampleText + '[/be_toggle]';
					break;

				case 'be_progress':
					shortcode = '[be_progressbar title="Example" percentage="75" color="#f1c40f"]';
					break;

				case 'be_spacing':
					shortcode = '[be_spacing size="30px"]';
					break;

				case 'be_clear':
					shortcode = '[be_clear_floats]';
					break;

				// Boxes
				case 'be_box_blue':
					shortcode = '[be_box color="blue" text_align="left" width="100%" float="none"]' + beTranslate.exampleText + '[/be_box]';
					break;

				case 'be_box_gray':
					shortcode = '[be_box color="gray" text_align="left" width="100%" float="none"]' + beTranslate.exampleText + '[/be_box]';
					break;

				case 'be_box_green':
					shortcode = '[be_box color="green" text_align="left" width="100%" float="none"]' + beTranslate.exampleText + '[/be_box]';
					break;

				case 'be_box_red':
					shortcode = '[be_box color="red" text_align="left" width="100%" float="none"]' + beTranslate.exampleText + '[/be_box]';
					break;

				case 'be_box_yellow':
					shortcode = '[be_box color="yellow" text_align="left" width="100%" float="none"]' + beTranslate.exampleText + '[/be_box]';
					break;

				// Highlights
				case 'be_highlight_blue':
					shortcode = '[be_highlight color="blue"]' + beTranslate.exampleText + '[/be_highlight]';
					break;

				case 'be_highlight_gray':
					shortcode = '[be_highlight color="gray"]' + beTranslate.exampleText + '[/be_highlight]';
					break;

				case 'be_highlight_green':
					shortcode = '[be_highlight color="green"]' + beTranslate.exampleText + '[/be_highlight]';
					break;

				case 'be_highlight_red':
					shortcode = '[be_highlight color="red"]' + beTranslate.exampleText + '[/be_highlight]';
					break;

				case 'be_highlight_yellow':
					shortcode = '[be_highlight color="yellow"]' + beTranslate.exampleText + '[/be_highlight]';
					break;

					// Animations
				case 'be_animation_slideInDown':
					shortcode = '[be_animation type="slideInDown" duration="2s" delay="0s" iteration="1"]' + beTranslate.exampleText + '[/be_animation]';
					break;

				case 'be_animation_slideInLeft':
					shortcode = '[be_animation type="slideInLeft" duration="2s" delay="0s" iteration="1"]' + beTranslate.exampleText + '[/be_animation]';
					break;

				case 'be_animation_slideInRight':
					shortcode = '[be_animation type="slideInRight" duration="2s" delay="0s" iteration="1"]' + beTranslate.exampleText + '[/be_animation]';
					break;

				case 'be_animation_fadeIn':
					shortcode = '[be_animation type="fadeIn" duration="2s" delay="0s" iteration="1"]' + beTranslate.exampleText + '[/be_animation]';
					break;

				case 'be_animation_fadeInLeft':
					shortcode = '[be_animation type="fadeInLeft" duration="2s" delay="0s" iteration="1"]' + beTranslate.exampleText + '[/be_animation]';
					break;

				case 'be_animation_fadeInRight':
					shortcode = '[be_animation type="fadeInRight" duration="2s" delay="0s" iteration="1"]' + beTranslate.exampleText + '[/be_animation]';
					break;

				case 'be_animation_fadeInUp':
					shortcode = '[be_animation type="fadeInUp" duration="2s" delay="0s" iteration="1"]' + beTranslate.exampleText + '[/be_animation]';
					break;

				case 'be_animation_fadeInDown':
					shortcode = '[be_animation type="fadeInDown" duration="2s" delay="0s" iteration="1"]' + beTranslate.exampleText + '[/be_animation]';
					break;

				case 'be_animation_bounceIn':
					shortcode = '[be_animation type="bounceIn" duration="2s" delay="0s" iteration="1"]' + beTranslate.exampleText + '[/be_animation]';
					break;

				case 'be_animation_bounceInLeft':
					shortcode = '[be_animation type="bounceInLeft" duration="2s" delay="0s" iteration="1"]' + beTranslate.exampleText + '[/be_animation]';
					break;

				case 'be_animation_bounceInRight':
					shortcode = '[be_animation type="bounceInRight" duration="2s" delay="0s" iteration="1"]' + beTranslate.exampleText + '[/be_animation]';
					break;

				case 'be_animation_bounceInUp':
					shortcode = '[be_animation type="bounceInUp" duration="2s" delay="0s" iteration="1"]' + beTranslate.exampleText + '[/be_animation]';
					break;

				case 'be_animation_bounceInDown':
					shortcode = '[be_animation type="bounceInDown" duration="2s" delay="0s" iteration="1"]' + beTranslate.exampleText + '[/be_animation]';
					break;
			}

			// Check if visual editor is active or not
			var tinyMCEstatus = typeof( tinyMCE ) !== "undefined" && tinyMCE.activeEditor !== null ? true : false;

			// Append shortcode to content for both Visual and Text mode
			var wpEditor = $( 'textarea.wp-editor-area' );
			if ( tinyMCEstatus ) {
				tinymce.activeEditor.execCommand( 'mceInsertContent', false, shortcode );
				return false;
			} else {
				wpEditor.append( shortcode );
			}

		} );

	} );

}( jQuery ) );
