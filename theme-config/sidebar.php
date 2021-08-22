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

	global $lift_theme;

	$get_footer_columns = isset($lift_theme['lift-theme-footer-columns']) ? $lift_theme['lift-theme-footer-columns'] : 1;
	$get_copyright_columns = isset($lift_theme['lift-theme-copyright-columns']) ? $lift_theme['lift-theme-copyright-columns'] : 1;
	$tags = isset($lift_theme['lift-theme-footer-function-tags']) ? $lift_theme['lift-theme-footer-function-tags'] :  'h4';
	$tags_copyright = isset($lift_theme['lift-theme-copyright-function-tags']) ? $lift_theme['lift-theme-copyright-function-tags'] :  'h4';


	register_sidebar(
		array(
			'name'          => __( 'Blog Sidebar', 'wp-lift-theme' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'wp-lift-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<'.$tags.' class="widget-title">',
			'after_title'   => '</'.$tags.'>',
		)
	);

	for ($i=1; $i <= $get_footer_columns ; $i++) { 
		register_sidebar(
			array(
				'name'          => esc_html__( 'Footer '.$i, 'wp-lift-theme' ),
				'id'            => 'footer-sidebar-'.$i,
				'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'wp-lift-theme' ),
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
				'name'          => esc_html__( 'Copyright '.$i, 'wp-lift-theme' ),
				'id'            => 'copyright-sidebar-'.$i,
				'description'   => esc_html__( 'Add widgets here to appear in your copyright.', 'wp-lift-theme' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<'.$tags_copyright.' class="widget-title">',
				'after_title'   => '</'.$tags_copyright.'>',
			)
		);
	}


}
add_action( 'widgets_init', 'lift_widgets_init' );
