<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WOW WordPress 
 * @subpackage Theme by Nguyen Pham
 * https://baonguyenyam.github.io
 * @since 2021
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since WOW Theme 1.0
	 *
	 * @return void
	 */
	function wow_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'wowtheme-columns-overlap',
				'label' => esc_html__( 'Overlap', 'wp-wow-theme' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'wowtheme-border',
				'label' => esc_html__( 'Borders', 'wp-wow-theme' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'wowtheme-border',
				'label' => esc_html__( 'Borders', 'wp-wow-theme' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'wowtheme-border',
				'label' => esc_html__( 'Borders', 'wp-wow-theme' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'wowtheme-image-frame',
				'label' => esc_html__( 'Frame', 'wp-wow-theme' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'wowtheme-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'wp-wow-theme' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'wowtheme-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'wp-wow-theme' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'wowtheme-border',
				'label' => esc_html__( 'Borders', 'wp-wow-theme' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'wowtheme-separator-thick',
				'label' => esc_html__( 'Thick', 'wp-wow-theme' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'wowtheme-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'wp-wow-theme' ),
			)
		);
	}
	add_action( 'init', 'wow_register_block_styles' );
}
