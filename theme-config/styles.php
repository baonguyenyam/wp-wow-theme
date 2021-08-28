<?php
/**
 * Enqueue styles.
 *
 * @since WOW 2021
 *
 * @return void
 */
function wow_styles() {
	// Note, the is_IE global variable is defined by WordPress and is used
	// to detect if the current browser is internet explorer.
	global $is_IE, $wp_scripts, $wow_theme;

	$header_css = '';
	$footer_css = '';
	$layout_css = '';
	$global_css = '';
	$content_css = '';
	$blog_css = '';
	$archive_css = '';

	// LAYOUT 
	$layout_style = $wow_theme['wow-theme-layout-style'];
	$layout_size = $wow_theme['wow-theme-layout-size'];
	$layout_size_value = $wow_theme['wow-theme-layout-size-value'];
	$layout_scrollbar = $wow_theme['wow-theme-global-style-theme-scrollbar'];

	if(isset($layout_style) && ($layout_style === '1' || $layout_style == 1) && $layout_size) {
		$layout_css .= "#content.wow-content .wpb_wrapper{max-width: ".$layout_size_value."px; margin: 0 auto; width: 100%}";
		$layout_css .= "#content.wow-content .container-fluid{max-width: ".$layout_size_value."px; margin: 0 auto; width: 100%}";
		// TODO: layout post detail and archive page 
	}
	if(isset($layout_scrollbar) && ($layout_scrollbar === '1' || $layout_scrollbar == 1)) {
		$layout_css .= "::-webkit-scrollbar{-webkit-appearance:none;height:10px;width:10px}::-webkit-scrollbar-track{background:var(--wow-theme-texthover)}::-webkit-scrollbar-thumb{background:var(--wow-theme-gray);height:100px;border-radius:5px}::-webkit-scrollbar-thumb:hover{background:var(--wow-theme-main)}::-webkit-scrollbar-thumb:focus{background:var(--wow-theme-main)}::-webkit-scrollbar-thumb:active{background:var(--wow-theme-main)}";
		// TODO: Add more option scrollbar here
	}
	// HEADER  
	$header_style = $wow_theme['wow-theme-header-layout-style'];
	$header_size = $wow_theme['wow-theme-header-layout-size'];
	$header_size_value = $wow_theme['wow-theme-header-layout-size-value'];
	$header_style_animation = $wow_theme['wow-theme-header-style-bg-animation'];
	if($header_style && $header_size){
		$header_css .= "#header.wow-header .header-wrapper{max-width: ".$header_size_value."px; margin: 0 auto; width: 100%}";
	}
	if($header_style_animation){
		$header_css .= "#header.wow-header {transition: ease-in-out ".$header_style_animation."ms}";
	}
	// CONTENT 
	$content_row = $wow_theme['wow-theme-layout-row-option'];
	$content_row_value = $wow_theme['wow-theme-layout-row-spacing'];
	$content_content = $wow_theme['wow-theme-layout-content-option'];
	$content_content_value = $wow_theme['wow-theme-layout-content-spacing'];
	if($content_row && $content_row_value) {
		if($content_row_value['padding-top']) {
			$content_css .= '#content.wow-content .wow_section{padding-top: '.$content_row_value['padding-top'].';}';
		}
		if($content_row_value['padding-bottom']) {
			$content_css .= '#content.wow-content .wow_section{padding-bottom: '.$content_row_value['padding-bottom'].';}';
		}
		if($content_row_value['padding-left']) {
			$content_css .= '#content.wow-content .wow_section{padding-left: '.$content_row_value['padding-left'].';}';
		}
		if($content_row_value['padding-right']) {
			$content_css .= '#content.wow-content .wow_section{padding-right: '.$content_row_value['padding-right'].';}';
		}
	}
	if($content_content && $content_content_value) {
		if($content_content_value['padding-top']) {
			$content_css .= '#content.wow-content .content-wrapper{padding-top: '.$content_content_value['padding-top'].';}';
		}
		if($content_content_value['padding-bottom']) {
			$content_css .= '#content.wow-content .content-wrapper{padding-bottom: '.$content_content_value['padding-bottom'].';}';
		}
		if($content_content_value['padding-left']) {
			$content_css .= '#content.wow-content .content-wrapper{padding-left: '.$content_content_value['padding-left'].';}';
		}
		if($content_content_value['padding-right']) {
			$content_css .= '#content.wow-content .content-wrapper{padding-right: '.$content_content_value['padding-right'].';}';
		}
	}
	// BLOG
	$blog_columns_padding = $wow_theme['wow-theme-blog-style-content-columns-padding'];
	$blog_sidebar_columns_padding = $wow_theme['wow-theme-blog-style-sidebar-columns-padding'];
	if($blog_columns_padding) {
		$blog_css .= '#content.wow-content article.post .entry-content .blog-content{padding-top:'.$blog_columns_padding['padding-top'].';padding-bottom:'.$blog_columns_padding['padding-bottom'].';}';
	}
	if($blog_sidebar_columns_padding) {
		$blog_css .= '#content.wow-content article.post .entry-content .sidebar-content{padding-top:'.$blog_sidebar_columns_padding['padding-top'].';padding-bottom:'.$blog_sidebar_columns_padding['padding-bottom'].';}';
	}
	// ARCHIVE
	$archive_columns_padding = $wow_theme['wow-theme-blog-style-archive-content-columns-padding'];
	$archive_sidebar_columns_padding = $wow_theme['wow-theme-blog-style-archive-sidebar-columns-padding'];
	if($archive_columns_padding) {
		$archive_css .= '#content.wow-content .archive-entry-content .blog-content{padding-top:'.$archive_columns_padding['padding-top'].';padding-bottom:'.$archive_columns_padding['padding-bottom'].';}';
	}
	if($archive_sidebar_columns_padding) {
		$archive_css .= '#content.wow-content .archive-entry-content .sidebar-content{padding-top:'.$archive_sidebar_columns_padding['padding-top'].';padding-bottom:'.$archive_sidebar_columns_padding['padding-bottom'].';}';
	}
	// FOOTER 
	$footer_style = $wow_theme['wow-theme-footer-layout-style'];
	$footer_size = $wow_theme['wow-theme-footer-layout-size'];
	$footer_size_value = $wow_theme['wow-theme-footer-layout-size-value'];
	$footer_fixed = $wow_theme['wow-theme-footer-layout-fixed'];
	if((isset($footer_style) && ($footer_style === '1' || $footer_style == 1)) && $footer_size) {
		$footer_css .= "#footer.wow-footer .footer-wrapper{max-width: ".$footer_size_value."px; margin: 0 auto; width: 100%}";
	}
	if(isset($footer_fixed) && ($footer_fixed === '1' || $footer_fixed == 1)) {
		$footer_css .= "html,body {height: 100%;}.wow-wrapper{flex-direction: column;height: 100%;display:flex}#content.wow-content{flex-shrink: 0}#footer.wow-footer {margin-top: auto}";
	}
	// BACKTOTOP
	$global_backtotop = $wow_theme['wow-theme-global-function-backtotop-spacing'];
	if($global_backtotop) {
		$global_css .= '#backtotop{right:'.$global_backtotop['right'].';bottom:'.$global_backtotop['bottom'].'}';
	}

	/////////////////////////////////////////////////////////

	// LAYOUT 
	$theme_style = $wow_theme['wow-theme-global-style-theme'];

	// RTL styles.
	wp_style_add_data( 'wow-assets-style', 'rtl', 'replace' );

	// Styles.
	wp_enqueue_style(
		'wow-assets-core-style', 
		get_template_directory_uri() . '/dist/css/wow.css', 
		array(), 
		wp_get_theme()->get( 'Version' ), 'all' 
	);
	wp_enqueue_style(
		'wow-assets-main-style', 
		get_template_directory_uri() . '/dist/css/main.css', 
		array(), 
		wp_get_theme()->get( 'Version' ), 'all' 
	);
	// THEME SKIN
	if ( $theme_style === '' || $theme_style === 'default' ) {
		wp_enqueue_style(
			'wow-assets-theme-custom', 
			get_template_directory_uri() . '/dist/css/theme-default.css', 
			array(), 
			wp_get_theme()->get( 'Version' ), 'all' 
		);
	} else if ( $theme_style === 'modern' ) {
		wp_enqueue_style(
			'wow-assets-theme-custom', 
			get_template_directory_uri() . '/dist/css/theme-modern.css', 
			array(), 
			wp_get_theme()->get( 'Version' ), 'all' 
		);
	} else if ( $theme_style === 'material' ) {
		wp_enqueue_style(
			'wow-assets-theme-custom', 
			get_template_directory_uri() . '/dist/css/theme-material.css', 
			array(), 
			wp_get_theme()->get( 'Version' ), 'all' 
		);
	} else if ( $theme_style === 'monokai' ) {
		wp_enqueue_style(
			'wow-assets-theme-custom', 
			get_template_directory_uri() . '/dist/css/theme-monokai.css', 
			array(), 
			wp_get_theme()->get( 'Version' ), 'all' 
		);
	}
	// FOR COMPILER ONLY 
	// wp_enqueue_style(
	// 	'wow-assets-export-style', 
	// 	get_template_directory_uri() . '/dist/css/export.css', 
	// 	array(), 
	// 	wp_get_theme()->get( 'Version' ), 'all' 
	// );
	wp_add_inline_style( 'wow-assets-theme-custom', 
		$global_css . 
		$layout_css . 
		$header_css . 
		$content_css .
		$blog_css .
		$archive_css .
		$footer_css 
	);

	wp_enqueue_style(
		'wow-assets-theme-style', 
		get_template_directory_uri() . '/dist/css/theme.css', 
		array(), 
		wp_get_theme()->get( 'Version' ), 'all' 
	);
	wp_enqueue_style(
		'wow-assets-style-style', 
		get_template_directory_uri() . '/dist/css/style.css', 
		array(), 
		wp_get_theme()->get( 'Version' ), 'all' 
	);

	// Print.
	wp_enqueue_style(
		'wow-assets-print-style', 
		get_template_directory_uri() . '/dist/css/print.css', 
		array(), 
		wp_get_theme()->get( 'Version' ), 'print' 
	);

	// Threaded comment reply styles.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if (!is_admin() && current_user_can('administrator') && intval($wow_theme['wow-theme-global-dev-toogle-tag']) == 1) {
		wp_enqueue_style(
			'wow-assets-style-admin-tool', 
			get_template_directory_uri() . '/dist/css/admin-tool.css', 
			array(), 
			wp_get_theme()->get( 'Version' ), 'all' 
		);
	}
}
add_action( 'wp_enqueue_scripts', 'wow_styles' , 999999 );

function wow_admin_styles() {
	// Styles.
	wp_enqueue_style(
		'wow-assets-icon-style', 
		get_template_directory_uri() . '/admin/vendor/bootstrap-icons.css', 
		array(), 
		wp_get_theme()->get( 'Version' ), 'all' 
	);
	wp_enqueue_style(
		'wow-assets-main-style', 
		get_template_directory_uri() . '/admin/dist/css/admin.css', 
		array(), 
		wp_get_theme()->get( 'Version' ), 'all' 
	);
	wp_enqueue_style(
		'wow-assets-prism-style', 
		get_template_directory_uri() . '/admin/vendor/prism.css', 
		array(), 
		wp_get_theme()->get( 'Version' ), 'all' 
	);
}

add_action( 'admin_enqueue_scripts', 'wow_admin_styles' );
