<?php
/**
* @package WOW WordPress 
* @subpackage Theme by Nguyen Pham
* https://baonguyenyam.github.io
* @since 2021
*/

// Register Widgets
add_action( 'widgets_init', 'wow_register_widget_theme' );
 
function wow_register_widget_theme() {
    register_widget( 'wow_Social_Widget' );
}

function get_wow_theme_options() {

	$legacy_options  = get_option( 'wow_theme' );
	$current_options = get_option( 'wow_theme_redux' );

	if ( ! empty( $current_options ) ) {
		return $current_options;
	} elseif ( ! empty( $legacy_options ) ) {
		return $legacy_options;
	} else {
		return $current_options;
	}
}

$wow_options = get_wow_theme_options();

// Theme Skin Toggle Class Name
function wow_theme_skin_body_class( $classes ) {

	$wow_options = get_wow_theme_options();
	// LAYOUT 
	$theme_style = $wow_options['wow-theme-global-style-theme'];
	$theme_dark_mode = $wow_options['wow-theme-global-style-theme-dark'];

	$classes[] = '';

	if ( $theme_style === 'modern' ) {
		$classes[] = 'wow-theme-modern';
	} else if ( $theme_style === 'material' ) {
		$classes[] = 'wow-theme-material';
	} else if ( $theme_style === 'monokai' ) {
		$classes[] = 'wow-theme-monokai';
	} else {
		$classes[] = 'wow-theme-default';
	}

	if ( $theme_dark_mode) {
		$classes[] = 'wow-theme-dark-mode';
	}

	return $classes;
}
add_filter( 'body_class', 'wow_theme_skin_body_class' );

// Remove Redux Menu 
function remove_redux_fw_submenu() {
    remove_submenu_page( 'tools.php', 'redux-about' );
}
add_action( 'admin_menu', 'remove_redux_fw_submenu', 999 );

// Add Menu URL Class
function __add_header_menu_item_class($atts) {
	$atts['class'] = "nav-link";
	return $atts;
}
add_filter('nav_menu_link_attributes', '__add_header_menu_item_class');

// Add Bootstrap 
function wow_custom_css_classes_for_vc_row_and_vc_column( $class_string, $tag ) {
	if ( $tag == 'vc_row' || $tag == 'vc_row_inner' ) {
		//   $class_string = str_replace( 'vc_row-fluid', 'my_row-fluid', $class_string ); 
		$class_string = str_replace( 'vc_row', 'row', $class_string ); 
	}
	// var_dump($class_string);
	// if ( $class_string == 'row wpb_row vc_inner row-fluid' ) {
	// 	$class_string = str_replace( $class_string, 'row wpb_row vc_inner row-fluid container', $class_string ); 
	// }
	if ( $tag == 'vc_column' || $tag == 'vc_column_inner' ) {
		// $class_string = preg_replace( '/vc_col-sm-(\d{1,2})/', 'my_col-sm-$1', $class_string );
		$class_string = preg_replace( '/vc_column_container/', '', $class_string );
		$class_string = preg_replace( '/vc_col-(xs|sm|md|lg|xl|xxl)-(\d{1,2})/', 'col-$1-$2', $class_string );
		$class_string = preg_replace( '/vc_col-(xs|sm|md|lg|xl|xxl)-offset-(\d{1,2})/', 'offset-$1-$2', $class_string );
	}
	return $class_string; 
}
add_filter( 'vc_shortcodes_css_class', 'wow_custom_css_classes_for_vc_row_and_vc_column', 10, 2 );


// Check License
function _____WOWcheckLicense() {

	$wow_options = get_wow_theme_options();

	$wow_license['domain'] = $wow_options['wow-theme-license-code-domain'];
	$wow_license['email'] = $wow_options['wow-theme-license-code-email'];
	$wow_license['package'] = $wow_options['wow-theme-license-code-package'];
	$wow_license['key'] = $wow_options['wow-theme-license-code-key'];
	$wow_license['license'] = $wow_options['wow-theme-license-code-license'];
	$password = trim($wow_license['key'].$wow_license['domain'].$wow_license['email'].$wow_license['package']);
	$LicenseVerify = true;
	if (!password_verify($password, $wow_license['license'])) {
		$LicenseVerify = false;
	} else {
		if($wow_license['domain'] !== $_SERVER['SERVER_NAME']) {
			$LicenseVerify = false;
		} else {
			date_default_timezone_set('America/Chicago'); 
			$time1 = strtotime($wow_license['package']);
			$time2 = strtotime(date('m/d/Y'));
			if($time1<$time2){
				$LicenseVerify = false;
			}
		}
	}
	if(!$LicenseVerify){
		echo '<div class="wrap"><div style="margin: 1rem 0; display: block; background: #ffcfcf; border: 1px solid #d28585; padding: 1rem; border-radius: 5px;">Your license is expired. Please renew the license to get the latest update of WOW Theme. In order to receive all benefits of WOW Theme, you need to activate your copy of the plugin. By activating WOW Theme license you will unlock premium options - direct plugin updates, access to template library and official support. Don\'t have direct license yet? <a href="//wow-wp.com" target="_blank">Purchase WOW Theme license.</a></div></div>';
	}

}
add_action( 'admin_notices', '_____WOWcheckLicense' );



