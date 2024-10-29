<?php
/**
 * Add button to the post editing screen
 */
function be_shortcodes_media_button() {

	$title = esc_html__( 'Shortcodes', 'be-shortcodes' );  ?>

	<a id="thickbox_shortcode_button" class="button thickbox" title="<?php echo esc_attr( $title ); ?>" href="#TB_inline?width=600&height=700&inlineId=thickbox_shortcode_window">
		<span class="be-shortcodes-icon"></span> <?php echo esc_html( $title ); ?>
	</a>

	<style>
		.be-shortcodes-icon:before {
			-moz-osx-font-smoothing: grayscale;
			color: #888;
			content: "\f111";
			font: 400 16px/1 dashicons;
			vertical-align: text-bottom;
		}
	</style>

<?php }
add_action( 'media_buttons', 'be_shortcodes_media_button', 1000 );

/**
 * Content displayed in the modal box
 */
function be_shortcodes_thickbox_content() {

	// Load the shortcode button script for the modal window
	wp_enqueue_script( 'be-shortcode-buttons' );

	// Translatable text
	$translation_array = array(
		'exampleText' => esc_html__( 'Example Text', 'be-shortcodes' )
	);

	wp_localize_script( 'be-shortcode-buttons', 'beTranslate', $translation_array );

?>

	<div id="thickbox_shortcode_window" style="display: none;">

		<p>
			<?php esc_html_e( 'To use the shortcode, you just need to click one of the button below and the shortcode will automatically insert to the editor.', 'be-shortcodes' ); ?>
		</p>

		<table cellspacing="0" cellpadding="5" width="100%">

			<style>
			   .wp-core-ui .button.insert-shortcode {
					margin-bottom: 0.75em;
					margin-right: 0.75em;
				}
				#TB_ajaxContent {
					width: 96%!important;
				}
				#TB_ajaxContent h3 {
					margin: 0;
				}
			</style>

			<tbody>
				<tr>
					<th>
						<h3><?php esc_html_e( 'Columns', 'be-shortcodes' ); ?></h3>
					</th>
				</tr>
				<tr>
					<!-- Columns -->
					<td>
						<a id="be_half" class="insert-shortcode button"><?php esc_html_e( 'One Half','be-shortcodes' ); ?></a>
						<a id="be_third" class="insert-shortcode button"><?php esc_html_e( 'One Third','be-shortcodes' ); ?></a>
						<a id="be_fourth" class="insert-shortcode button"><?php esc_html_e( 'One Fourth','be-shortcodes' ); ?></a>
						<a id="be_fifth" class="insert-shortcode button"><?php esc_html_e( 'One Fifth','be-shortcodes' ); ?></a>
						<a id="be_sixth" class="insert-shortcode button"><?php esc_html_e( 'One Sixth','be-shortcodes' ); ?></a>
						<a id="be_twothird" class="insert-shortcode button"><?php esc_html_e( 'One Seventh','be-shortcodes' ); ?></a>
						<a id="be_threefourth" class="insert-shortcode button"><?php esc_html_e( 'Three Fourth','be-shortcodes' ); ?></a>
						<a id="be_twofifth" class="insert-shortcode button"><?php esc_html_e( 'Two Fifth','be-shortcodes' ); ?></a>
						<a id="be_threefifth" class="insert-shortcode button"><?php esc_html_e( 'Three Fifth','be-shortcodes' ); ?></a>
					</td>
				</tr>

				<tr>
					<td>
						<hr>
					</td>
				</tr>

				<tr>
					<th>
						<h3><?php esc_html_e( 'Elements', 'be-shortcodes' ); ?></h3>
					</th>
				</tr>
				<tr>
					<td>
						<a id="be_button" class="insert-shortcode button"><?php esc_html_e( 'Button','be-shortcodes' ); ?></a>
						<a id="be_dropcap" class="insert-shortcode button"><?php esc_html_e( 'Dropcap','be-shortcodes' ); ?></a>
						<a id="be_icon" class="insert-shortcode button"><?php esc_html_e( 'Icon','be-shortcodes' ); ?></a>
						<a id="be_map" class="insert-shortcode button"><?php esc_html_e( 'Google Map','be-shortcodes' ); ?></a>
						<a id="be_tabbed" class="insert-shortcode button"><?php esc_html_e( 'Tabbed Content','be-shortcodes' ); ?></a>
						<a id="be_toggle" class="insert-shortcode button"><?php esc_html_e( 'Toggle','be-shortcodes' ); ?></a>
						<a id="be_progress" class="insert-shortcode button"><?php esc_html_e( 'Progress Bar','be-shortcodes' ); ?></a>
						<a id="be_spacing" class="insert-shortcode button"><?php esc_html_e( 'Spacing','be-shortcodes' ); ?></a>
						<a id="be_clear" class="insert-shortcode button"><?php esc_html_e( 'Clear Floats','be-shortcodes' ); ?></a>
						<p>
							<?php
								$fontawesome_link = 'http://fortawesome.github.io/Font-Awesome/icons';
								echo sprintf( wp_kses_post( __( 'Complete list of icon names are available on the <a target="_blank" href="%s">Font Awesome</a> site.', 'be-shortcodes' ) ), esc_url( $fontawesome_link ) );
							?>
						</p>
					</td>
				</tr>

				<tr>
					<td>
						<hr>
					</td>
				</tr>

				<tr>
					<th>
						<h3><?php esc_html_e( 'Boxes', 'be-shortcodes' ); ?></h3>
					</th>
				</tr>
				<tr>
					<!-- Content Boxes -->
					<td>
						<a id="be_box_blue" class="insert-shortcode button"><?php esc_html_e( 'Blue Box','be-shortcodes' ); ?></a>
						<a id="be_box_gray" class="insert-shortcode button"><?php esc_html_e( 'Gray Box','be-shortcodes' ); ?></a>
						<a id="be_box_green" class="insert-shortcode button"><?php esc_html_e( 'Green Box','be-shortcodes' ); ?></a>
						<a id="be_box_red" class="insert-shortcode button"><?php esc_html_e( 'Red Box','be-shortcodes' ); ?></a>
						<a id="be_box_yellow" class="insert-shortcode button"><?php esc_html_e( 'Yellow Box','be-shortcodes' ); ?></a>
					</td>
				</tr>

				<tr>
					<td>
						<hr>
					</td>
				</tr>

				<tr>
					<th>
						<h3><?php esc_html_e( 'Highlights', 'be-shortcodes' ); ?></h3>
					</th>
				</tr>
				<tr>
					<!-- Highlight Text -->
					<td>
						<a id="be_highlight_blue" class="insert-shortcode button"><?php esc_html_e( 'Blue Highlight','be-shortcodes' ); ?></a>
						<a id="be_highlight_gray" class="insert-shortcode button"><?php esc_html_e( 'Gray Highlight','be-shortcodes' ); ?></a>
						<a id="be_highlight_green" class="insert-shortcode button"><?php esc_html_e( 'Green Highlight','be-shortcodes' ); ?></a>
						<a id="be_highlight_red" class="insert-shortcode button"><?php esc_html_e( 'Red Highlight','be-shortcodes' ); ?></a>
						<a id="be_highlight_yellow" class="insert-shortcode button"><?php esc_html_e( 'Yellow Highlight','be-shortcodes' ); ?></a>
					</td>
				</tr>

				<tr>
					<td>
						<hr>
					</td>
				</tr>

				<tr>
					<th>
						<h3><?php esc_html_e( 'Animations', 'be-shortcodes' ); ?></h3>
					</th>
				</tr>
				<tr>
					<td>
						<a id="be_animation_slideInDown" class="insert-shortcode button"><?php esc_html_e( 'SlideInDown','be-shortcodes' ); ?></a>
						<a id="be_animation_slideInLeft" class="insert-shortcode button"><?php esc_html_e( 'slideInLeft','be-shortcodes' ); ?></a>
						<a id="be_animation_slideInRight" class="insert-shortcode button"><?php esc_html_e( 'slideInRight','be-shortcodes' ); ?></a>
						<a id="be_animation_fadeIn" class="insert-shortcode button"><?php esc_html_e( 'fadeIn','be-shortcodes' ); ?></a>
						<a id="be_animation_fadeInLeft" class="insert-shortcode button"><?php esc_html_e( 'fadeInLeft','be-shortcodes' ); ?></a>
						<a id="be_animation_fadeInRight" class="insert-shortcode button"><?php esc_html_e( 'fadeInRight','be-shortcodes' ); ?></a>
						<a id="be_animation_fadeInUp" class="insert-shortcode button"><?php esc_html_e( 'fadeInUp','be-shortcodes' ); ?></a>
						<a id="be_animation_fadeInDown" class="insert-shortcode button"><?php esc_html_e( 'fadeInDown','be-shortcodes' ); ?></a>
						<a id="be_animation_bounceIn" class="insert-shortcode button"><?php esc_html_e( 'bounceIn','be-shortcodes' ); ?></a>
						<a id="be_animation_bounceInLeft" class="insert-shortcode button"><?php esc_html_e( 'bounceInLeft','be-shortcodes' ); ?></a>
						<a id="be_animation_bounceInRight" class="insert-shortcode button"><?php esc_html_e( 'bounceInRight','be-shortcodes' ); ?></a>
						<a id="be_animation_bounceInUp" class="insert-shortcode button"><?php esc_html_e( 'bounceInUp','be-shortcodes' ); ?></a>
						<a id="be_animation_bounceInDown" class="insert-shortcode button"><?php esc_html_e( 'bounceInDown','be-shortcodes' ); ?></a>
					</td>
				</tr>

			</tbody>
		</table>

	</div><!-- #thickbox_shortcode_window -->
<?php }
add_action( 'admin_footer', 'be_shortcodes_thickbox_content' );
