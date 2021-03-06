<?php
/**
 * Customize API: WOW_Theme_Customize_Notice_Control class
 *
 * @package WOW WordPress 
 * @subpackage Theme by Nguyen Pham
 * https://baonguyenyam.github.io
 * @since 2021
 */

/**
 * Customize Notice Control class.
 *
 * @since WOW 2021
 *
 * @see WP_Customize_Control
 */
class WOW_Theme_Customize_Notice_Control extends WP_Customize_Control {
	/**
	 * The control type.
	 *
	 * @since WOW 2021
	 *
	 * @var string
	 */
	public $type = 'wow-assets-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
	 * @access public
	 *
	 * @since WOW 2021
	 *
	 * @return void
	 */
	public function render_content() {
		?>
		<div class="notice notice-warning">
			<p><?php esc_html_e( 'To access the Dark Mode settings, select a light background color.', 'wp-wow-theme' ); ?></p>
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/support/article/wow-assets/#dark-mode-support', 'wp-wow-theme' ) ); ?>">
				<?php esc_html_e( 'Learn more about Dark Mode.', 'wp-wow-theme' ); ?>
			</a></p>
		</div>
		<?php
	}
}
