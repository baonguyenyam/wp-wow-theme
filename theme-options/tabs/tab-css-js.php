<?php
/**
* @package WOW WordPress 
* @subpackage Theme by Nguyen Pham
* https://baonguyenyam.github.io
* @since 2021
*/

    // -> START Footer
    Redux::setSection( $opt_name, array(
        'title' => __( 'Custom code', 'wow-theme-options' ),
        'id'    => 'wow-theme-cssjs',
        'icon'  => 'bi bi-braces'
    ) );

	Redux::setSection( $opt_name, array(
		'title'      => __( 'SCSS/SASS', 'wow-theme-options' ),
		'id'         => 'wow-theme-cssjs-scss',
        'subsection' => true,
		'desc' => __('Sass is a stylesheet language that’s compiled to CSS. It allows you to use variables, nested rules, mixins, functions, and more, all with a fully CSS-compatible syntax. Sass helps keep large stylesheets well-organized and makes it easy to share design within and across projects.', 'wow-theme-options'),
		'fields'     => array(
			array(
				'id'       => 'wow-theme-cssjs-scss-code',
                'type'     => 'ace_editor',
				'mode'     => 'scss',
				'class' => 'wow-theme-admin-cssjs',
				'theme'    => 'monokai',
				'default'  => "\$mycolordefault: #3366ff;
				
.mycustomelement {
	border-color: \$mycolordefault;
}",
				'options' => array(
					'minLines' => 40, 
					'maxLines' => 100
				)
			),
			array(
				'id'    => 'info_sass',
				'type'  => 'info',
				'title' => __('Sass Basics', 'wow-theme-options'),
				'style' => 'success',
				'icon' => 'bi bi-info',
				'desc'       => __( 'If you want to learn how to get everything setup, go here: ', 'wow-theme-options' ) . '<a href="//sass-lang.com/guide" target="_blank">sass-lang.com/guide</a>',
			),
		),
    ) );
	Redux::setSection( $opt_name, array(
        'title'      => __( 'CSS', 'wow-theme-options' ),
        'id'         => 'wow-theme-cssjs-css',
        'subsection' => true,
		'desc'		=> __( 'If you have any custom CSS you would like added to the site, please enter it here.', 'wow-theme-options' ),
		'fields'     => array(
			array(
				'id'       => 'wow-theme-cssjs-css-code',
                'type'     => 'ace_editor',
				'mode'     => 'css',
				'class' => 'wow-theme-admin-cssjs',
				'theme'    => 'monokai',
				'default'  => ":root {
	--mycolor-default: #3366ff;
}

.myelement {
	border-color: var(--mycolor-default);
}",
				'options' => array(
					'minLines' => 40, 
					'maxLines' => 100
					)
				),
			),
			) );
	
	Redux::setSection( $opt_name, array(
        'title'      => __( 'JavaScript/Babel', 'wow-theme-options' ),
        'id'         => 'wow-theme-cssjs-js',
        'subsection' => true,
		'desc'		=> __( 'Please enter in any custom javascript you wish to add to the head of your pages. Requires opening and closing script tags.', 'wow-theme-options' ),
		'fields'     => array(
			array(
				'id'       => 'wow-theme-cssjs-js-code',
                'type'     => 'ace_editor',
				'mode'     => 'javascript',
				'class' => 'wow-theme-admin-cssjs',
				'theme'    => 'monokai',
				'default'  => "",
				'options' => array(
					'minLines' => 40, 
					'maxLines' => 100
				)
			),
		),
    ) );
