<?php

/**
 * Register widget area.
 *
 * @since LIFT 2021
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @return void
 */
function lift_widgets_init() {

	global $wow_theme;

	$get_footer_columns = isset($wow_theme['wow-theme-footer-columns']) ? $wow_theme['wow-theme-footer-columns'] : 1;
	$get_copyright_columns = isset($wow_theme['wow-theme-copyright-columns']) ? $wow_theme['wow-theme-copyright-columns'] : 1;
	$tags = isset($wow_theme['wow-theme-footer-function-tags']) ? $wow_theme['wow-theme-footer-function-tags'] :  'h4';
	$tags_copyright = isset($wow_theme['wow-theme-copyright-function-tags']) ? $wow_theme['wow-theme-copyright-function-tags'] :  'h4';


	register_sidebar(
		array(
			'name'          => __( 'Blog Sidebar', 'wp-wow-theme' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'wp-wow-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<'.$tags.' class="widget-title">',
			'after_title'   => '</'.$tags.'>',
		)
	);

	for ($i=1; $i <= $get_footer_columns ; $i++) { 
		register_sidebar(
			array(
				'name'          => esc_html__( 'Footer '.$i, 'wp-wow-theme' ),
				'id'            => 'footer-sidebar-'.$i,
				'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'wp-wow-theme' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<'.$tags.' class="widget-title">',
				'after_title'   => '</'.$tags.'>',
			)
		);
	}

	for ($i=1; $i <= $get_copyright_columns ; $i++) { 
		register_sidebar(
			array(
				'name'          => esc_html__( 'Copyright '.$i, 'wp-wow-theme' ),
				'id'            => 'copyright-sidebar-'.$i,
				'description'   => esc_html__( 'Add widgets here to appear in your copyright.', 'wp-wow-theme' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<'.$tags_copyright.' class="widget-title">',
				'after_title'   => '</'.$tags_copyright.'>',
			)
		);
	}


}
add_action( 'widgets_init', 'lift_widgets_init' );
