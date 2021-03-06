<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WOW WordPress 
 * @subpackage Theme by Nguyen Pham
 * https://baonguyenyam.github.io
 * @since 2021
 */

// This theme requires WordPress 5.3 or later.
if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

require get_template_directory() . '/nguyen-app.php';
require get_template_directory() . '/theme-config/setup.php';
require get_template_directory() . '/theme-config/sidebar.php';
require get_template_directory() . '/theme-config/breadcrumb.php';
require get_template_directory() . '/theme-config/scripts.php';
require get_template_directory() . '/theme-config/styles.php';
require get_template_directory() . '/theme-config/non-latin-language.php';
require get_template_directory() . '/theme-config/content-width.php';
require get_template_directory() . '/theme-config/customize-tab.php';

require get_template_directory() . '/classes/Mobile_Detect.php';

// Add new widget in widgets area 
require get_template_directory() . '/classes/class-nguyen-widget.php';

// SVG Icons class.
require get_template_directory() . '/classes/class-nguyen-svg-icons.php';

// Custom color classes.
require get_template_directory() . '/classes/class-nguyen-custom-colors.php';
new WOW_Theme_Custom_Colors();

// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Menu functions and filters.
require get_template_directory() . '/inc/menu-functions.php';

// Custom template tags for the theme.
require get_template_directory() . '/inc/template-tags.php';

// Customizer additions.
require get_template_directory() . '/classes/class-nguyen-customize.php';
new WOW_Theme_Customize();

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Block Styles.
require get_template_directory() . '/inc/block-styles.php';
