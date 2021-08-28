<?php
/**
 * Enqueue scripts.
 *
 * @since WOW 2021
 *
 * @return void
 */
function wow_scripts() {
	// Note, the is_IE global variable is defined by WordPress and is used
	// to detect if the current browser is internet explorer.
	global $is_IE, $wp_scripts, $wow_theme;;
	
	// Responsive embeds script.
	wp_enqueue_script(
		'wow-assets-core-script',
		get_template_directory_uri() . '/dist/js/wow.js',
		wp_get_theme()->get( 'Version' ),
		true
	);
	wp_enqueue_script(
		'wow-assets-main-script',
		get_template_directory_uri() . '/dist/js/main.js',
		wp_get_theme()->get( 'Version' ),
		true,
		true
	);
	wp_enqueue_script(
		'wow-assets-theme-script',
		get_template_directory_uri() . '/dist/js/theme.js',
		wp_get_theme()->get( 'Version' ),
		true,
		true
	);

	if (!is_admin() && current_user_can('administrator') && intval($wow_theme['wow-theme-global-dev-toogle-tag']) == 1) {
		wp_enqueue_script(
			'wow-assets-admin-tool',
			get_template_directory_uri() . '/dist/js/admin-tool.js',
			wp_get_theme()->get( 'Version' ),
			true,
			true
		);
	}

}
add_action( 'wp_enqueue_scripts', 'wow_scripts' );


function wow_admin_scripts() {

	wp_enqueue_script(
		'wow-admin-main-script',
		get_template_directory_uri() . '/admin/dist/js/admin.js',
		wp_get_theme()->get( 'Version' ),
		true
	);
	wp_enqueue_script(
		'wow-admin-prism-script',
		get_template_directory_uri() . '/admin/vendor/prism.js',
		wp_get_theme()->get( 'Version' ),
		true
	);
}

add_action( 'admin_enqueue_scripts', 'wow_admin_scripts' );
