<?php
/**
* @package WOW WordPress 
* @subpackage Theme by Nguyen Pham
* https://baonguyenyam.github.io
* @since 2021
*/

use ScssPhp\ScssPhp\Compiler;

add_action('redux/options/' . $opt_name . '/saved',  "wow_compiler_sass"  );
add_action('redux/options/' . $opt_name . '/saved',  "wow_save_css"  );
add_action('redux/options/' . $opt_name . '/saved',  "wow_save_js"  );
add_filter('redux/options/' . $opt_name . '/compiler', 'wow_compiler_css', 10, 3);

	if ( ! function_exists( 'wow_compiler_css' ) ) {
		function wow_compiler_css( $options, $css, $changed_values) {
			global $wp_filesystem;
			global $wow_theme;

			$filename = get_template_directory() . '/dist/css/export.css';
		
			if( empty( $wp_filesystem ) ) {
				require_once( ABSPATH .'/wp-admin/includes/file.php' );
				WP_Filesystem();
			}

			// OUTPUT
			$gen_css = '';

			// BACKTOTOP
			// if($options['wow-theme-global-function-backtotop-spacing']) {
			// 	$gen_css .= '#backtotop{right:'.$options['wow-theme-global-function-backtotop-spacing']['right'].';bottom:'.$options['wow-theme-global-function-backtotop-spacing']['bottom'].'}';
			// }
			

			$tmp = '/*!
* ╦  ╦╔═╗╔╦╗  ╔═╗┬─┐┌─┐┌─┐┌┬┐┬┌─┐┌┐┌┌─┐
* ║  ║╠╣  ║   ║  ├┬┘├┤ ├─┤ │ ││ ││││└─┐
* ╩═╝╩╚   ╩   ╚═╝┴└─└─┘┴ ┴ ┴ ┴└─┘┘└┘└─┘
* Coding by Nguyen Pham
* https://baonguyenyam.github.io
*/';
		
			if( $wp_filesystem ) {
				$wp_filesystem->put_contents(
					$filename,
					$tmp.$gen_css,
					FS_CHMOD_FILE // predefined mode settings for WP files
				);
			}
		}
	}

	if ( ! function_exists( 'wow_compiler_sass' ) ) {
		function wow_compiler_sass($values) {
			global $wp_filesystem;
			global $wow_theme;
		
			$filename = get_template_directory() . '/dist/css/style.css';

			if( empty( $wp_filesystem ) ) {
				require_once( ABSPATH .'/wp-admin/includes/file.php' );
				WP_Filesystem();
			}
		
			if( $wp_filesystem ) {

				$tmp = '/*!
* ╦  ╦╔═╗╔╦╗  ╔═╗┬─┐┌─┐┌─┐┌┬┐┬┌─┐┌┐┌┌─┐
* ║  ║╠╣  ║   ║  ├┬┘├┤ ├─┤ │ ││ ││││└─┐
* ╩═╝╩╚   ╩   ╚═╝┴└─└─┘┴ ┴ ┴ ┴└─┘┘└┘└─┘
* Coding by Nguyen Pham
* https://baonguyenyam.github.io
*/';

				$scss = new Compiler();
				$css = $scss->compileString($tmp.$wow_theme['wow-theme-cssjs-scss-code'])->getCss();
		
				$wp_filesystem->put_contents(
					$filename,
					$css,
					FS_CHMOD_FILE // predefined mode settings for WP files
				);
			}
		}
	}	

	if ( ! function_exists( 'wow_save_css' ) ) {
		function wow_save_css($values) {
			global $wp_filesystem;
			global $wow_theme;

			$filename = get_template_directory() . '/dist/css/theme.css';
		
			if( empty( $wp_filesystem ) ) {
				require_once( ABSPATH .'/wp-admin/includes/file.php' );
				WP_Filesystem();
			}

			$tmp = '/*!
* ╦  ╦╔═╗╔╦╗  ╔═╗┬─┐┌─┐┌─┐┌┬┐┬┌─┐┌┐┌┌─┐
* ║  ║╠╣  ║   ║  ├┬┘├┤ ├─┤ │ ││ ││││└─┐
* ╩═╝╩╚   ╩   ╚═╝┴└─└─┘┴ ┴ ┴ ┴└─┘┘└┘└─┘
* Coding by Nguyen Pham
* https://baonguyenyam.github.io
*/';
		
			if( $wp_filesystem ) {
				$css = $tmp.$wow_theme['wow-theme-cssjs-css-code'];
				$wp_filesystem->put_contents(
					$filename,
					$css,
					FS_CHMOD_FILE // predefined mode settings for WP files
				);
			}
		}
	}

	if ( ! function_exists( 'wow_save_js' ) ) {
		function wow_save_js($values) {
			global $wp_filesystem;
			global $wow_theme;

			$filename = get_template_directory() . '/dist/js/theme.js';
		
			if( empty( $wp_filesystem ) ) {
				require_once( ABSPATH .'/wp-admin/includes/file.php' );
				WP_Filesystem();
			}

			$tmp = '/*!
* ╦  ╦╔═╗╔╦╗  ╔═╗┬─┐┌─┐┌─┐┌┬┐┬┌─┐┌┐┌┌─┐
* ║  ║╠╣  ║   ║  ├┬┘├┤ ├─┤ │ ││ ││││└─┐
* ╩═╝╩╚   ╩   ╚═╝┴└─└─┘┴ ┴ ┴ ┴└─┘┘└┘└─┘
* Coding by Nguyen Pham
* https://baonguyenyam.github.io
*/';
		
			if( $wp_filesystem ) {
				$js = $tmp.$wow_theme['wow-theme-cssjs-js-code'];
				$wp_filesystem->put_contents(
					$filename,
					$js,
					FS_CHMOD_FILE // predefined mode settings for WP files
				);
			}
		}
	}

