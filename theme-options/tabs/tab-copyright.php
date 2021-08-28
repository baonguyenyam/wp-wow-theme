<?php
/**
* @package WOW WordPress 
* @subpackage Theme by Nguyen Pham
* https://baonguyenyam.github.io
* @since 2021
*/

    // -> START Copyright
    Redux::setSection( $opt_name, array(
        'title' => __( 'Copyright', 'wow-theme-options' ),
        'id'    => 'wow-theme-copyright',
        'icon'  => 'bi bi-layout-three-columns'
    ) );

	Redux::setSection( $opt_name, array(
        'title' => __( 'Copyright Layout', 'wow-theme-options' ),
        'id'         => 'wow-theme-copyright-layout',
        'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'wow-theme-copyright-enable',
                'type'     => 'switch',
                'title'    => __( 'Enable', 'wow-theme-options' ),
                'default'  => 1,
                'on'       => 'On',
                'off'      => 'Off',
            ),
			array(
				'id'       => 'wow-theme-copyright-layout-style',
                'type'     => 'switch',
                'title'    => __( 'Containers', 'wow-theme-options' ),
                'subtitle' => __( 'Containers are a fundamental building block of Bootstrap that contain, pad, and align your content within a given device or viewport.', 'wow-theme-options' ),
                'default'  => 0,
                'on'       => 'Fullwidth',
                'off'      => 'Boxed',
            ),
			array(
				'id'       => 'wow-theme-copyright-layout-size',
                'type'     => 'switch',
                'required' => array( 'wow-theme-copyright-layout-style', '=', '1' ),
                'title'    => __( 'Max width container', 'wow-theme-options' ),
                'default'  => 0,
                'on'       => 'On',
                'off'      => 'Off',
            ),
			array(
				'id'       => 'wow-theme-copyright-layout-size-value',
				'type'          => 'slider',
                'required' => array( 'wow-theme-copyright-layout-size', '=', '1' ),
				'title'         => __( 'Bootstrap comes with three different containers', 'wow-theme-options' ),
				'min'           => 960,
				'step'          => 20,
				'default'       => 1320,
				'max'           => 1820,
				'display_value' => 'text'
			),
		),
    ) );

	Redux::setSection( $opt_name, array(
		'title'      => __( 'Copyright style', 'wow-theme-options' ),
		'id'         => 'wow-theme-copyright-style',
		'subsection' => true,
		'fields'     => array(
			array(
                'id'       => 'wow-theme-copyright-style-bg',
                'type'     => 'background',
				'output'   => array( 'footer #copyright' ),
                'title'    => __( 'Copyright background', 'wow-theme-options' ),
                'subtitle' => __( 'Pick a copyright background for the theme (default: #2d2d2d).', 'wow-theme-options' ),
                'default'  => array(
					'background-color' => '#2d2d2d',
				),
				'preview_media' => true,
				'preview' => false,
				'class' => 'wow-theme-admin-copyright-style wow-theme-admin-copyright-style-bg',
            ),
			array(
                'id'       => 'wow-theme-copyright-style-border',
                'type'     => 'border',
                'title'    => __( 'Copyright Border Option', 'wow-theme-options' ),
                'subtitle' => __( 'Only color validation can be done on this field type', 'wow-theme-options' ),
				'output'    => array(
					'border-top'  => 'footer #copyright'
				),
                'right'         => false,     // Disable the right
                'bottom'        => false,     // Disable the bottom
                'left'          => false,     // Disable the left
                'default'  => array(
                    'border-color'  => 'transparent',
                    'border-style'  => 'solid',
                    'border-top'    => '0px',
                ),
            ),
			array(
                'id'       => 'wow-theme-copyright-style-color',
                'type'     => 'color_rgba',
				'output'    => array(
					'color'  => 'footer #copyright'
				),
				// 'compiler' => array(
				// 	'color'  => 'footer #copyright'
				// ),
                'title'    => __( 'Copyright color', 'wow-theme-options' ),
                'subtitle' => __( 'Pick a copyright color for the theme (default: #fff).', 'wow-theme-options' ),
                'default'  => array(
					'color' => '#fff',
				)
            ),
			array(
                'id'       => 'wow-theme-copyright-style-link',
                'type'     => 'link_color',
				'output'    => array(
					'color'  => 'footer #copyright a'
				),
				'title'    => __('Copyright links', 'wow-theme-options'),
				'subtitle' => __('Only color validation can be done on this field type', 'wow-theme-options'),
				'default'  => array(
					'regular'  => '#8a8a8a', // blue
					'hover'    => '#dd3333', // red
					'active'   => '#8a8a8a',  // purple
					'visited'  => '#8a8a8a',  // purple
				)
            ),
		)
	));

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Copyright row', 'wow-theme-options' ),
        'id'         => 'wow-theme-copyright-row',
        'desc'       => __( 'For full documentation on this field, visit: ', 'wow-theme-options' ) . '<a href="//getbootstrap.com/docs/5.0/layout/gutters/" target="_blank">getbootstrap.com/docs/5.0/layout/gutters/</a>',
        'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'wow-theme-copyright-row-option',
                'type'     => 'switch',
                'title'    => __( 'Row padding', 'wow-theme-options' ),
                'default'  => 1,
                'on'       => 'On',
                'off'      => 'Off',
            ),
			array(
				'id'       => 'wow-theme-copyright-row-spacing',
				'required' => array( 'wow-theme-copyright-row-option', '=', '1' ),
                'type'           => 'spacing',
                'mode'           => 'padding',
                'all'            => false,
                'units'          => array( 'em', 'rem', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
                'units_extended' => 'true',    // Allow users to select any type of unit
                //'display_units' => 'false',   // Set to false to hide the units if the units are specified
                'title'          => __( 'Padding Option', 'wow-theme-options' ),
                'subtitle'       => __( 'Allow your users to choose the spacing or margin they want.', 'wow-theme-options' ),
                'desc'           => __( 'You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'wow-theme-options' ),
                'default'        => array(
                    'units'     => 'rem',
					'top'       => '1rem',
					'bottom'     => '1rem',
                )
            ),
		)
	));

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Copyright columns', 'wow-theme-options' ),
        'id'         => 'wow-theme-copyright-column',
        'desc'       => __( 'For full documentation on this field, visit: ', 'wow-theme-options' ) . '<a href="//getbootstrap.com/docs/5.0/layout/columns/" target="_blank">getbootstrap.com/docs/5.0/layout/columns/</a>',
        'subsection' => true,
        'fields'     => array(

            array(
                'id'       => 'wow-theme-copyright-columns',
                'type'     => 'image_select',
                'title'    => __( 'Copyright columns', 'wow-theme-options' ),
                'subtitle' => __( 'How many columns do you need?', 'wow-theme-options' ),
                'desc'     => __( 'Number of columns', 'wow-theme-options' ),
                //Must provide key => value(array:title|img) pairs for radio options
                'options'  => array(
                    '1' => array(
                        'alt' => '1 Column',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    '2' => array(
                        'alt' => '2 Columns',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    '3' => array(
                        'alt' => '3 Columns',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    '4' => array(
                        'alt' => '4 Columns',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    '5' => array(
                        'alt' => '5 Columns',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    '6' => array(
                        'alt' => '6 Columns',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
					),
					'7' => array(
                        'alt' => '7 Column',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    '8' => array(
                        'alt' => '8 Columns',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    '9' => array(
                        'alt' => '9 Columns',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    '10' => array(
                        'alt' => '10 Columns',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    '11' => array(
                        'alt' => '11 Columns',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    '12' => array(
                        'alt' => '12 Columns',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    )
                ),
				'class' => 'wow-theme-admin-copyright-column wow-theme-admin-copyright-column-img',
				'default'  => '2'
            ),
			array(
				'id'       => 'wow-theme-copyright-columns-gutters',
                'title'    => __( 'Copyright columns gutters', 'wow-theme-options' ),
				'desc'       => __( 'Set -1 for default gutters', 'wow-theme-options' ),
				'type'          => 'slider',
				'min'           => -1,
				'step'          => 1,
				'default'       => 3,
				'max'           => 5,
				'display_value' => 'text',
				'default'  => '-1'
			),
			array(
				'id'       => 'wow-theme-copyright-columns-1',
				'type'     => 'text',
				'title'    => __( 'Column 1', 'wow-theme-options' ),
				'subtitle' => __( 'Class name', 'wow-theme-options' ),
				'class' => 'wow-theme-admin-copyright-column wow-theme-admin-copyright-column-1',
				'default'  => 'col-sm-12 col-md-6 col-lg-6'
			),
			array(
				'id'       => 'wow-theme-copyright-columns-2',
				'type'     => 'text',
				'required' => array( 'wow-theme-copyright-columns', '>=', '2' ),
				'title'    => __( 'Column 2', 'wow-theme-options' ),
				'class' => 'wow-theme-admin-copyright-column wow-theme-admin-copyright-column-2',
				'default'  => 'col-sm-12 col-md-6 col-lg-6 text-md-end'
			),
			array(
				'id'       => 'wow-theme-copyright-columns-3',
				'type'     => 'text',
				'required' => array( 'wow-theme-copyright-columns', '>=', '3' ),
				'title'    => __( 'Column 3', 'wow-theme-options' ),
				'class' => 'wow-theme-admin-copyright-column wow-theme-admin-copyright-column-3',
				'default'  => 'col-sm-12 col-md-6 col-lg-6'
			),
			array(
				'id'       => 'wow-theme-copyright-columns-4',
				'type'     => 'text',
				'required' => array( 'wow-theme-copyright-columns', '>=', '4' ),
				'title'    => __( 'Column 4', 'wow-theme-options' ),
				'class' => 'wow-theme-admin-copyright-column wow-theme-admin-copyright-column-4',
				'default'  => 'col-sm-12 col-md-6 col-lg-6'
			),
			array(
				'id'       => 'wow-theme-copyright-columns-5',
				'type'     => 'text',
				'required' => array( 'wow-theme-copyright-columns', '>=', '5' ),
				'title'    => __( 'Column 5', 'wow-theme-options' ),
				'class' => 'wow-theme-admin-copyright-column wow-theme-admin-copyright-column-5',
				'default'  => 'col-sm-12 col-md-6 col-lg-6'
			),
			array(
				'id'       => 'wow-theme-copyright-columns-6',
				'type'     => 'text',
				'required' => array( 'wow-theme-copyright-columns', '>=', '6' ),
				'title'    => __( 'Column 6', 'wow-theme-options' ),
				'class' => 'wow-theme-admin-copyright-column wow-theme-admin-copyright-column-6',
				'default'  => 'col-sm-12 col-md-6 col-lg-6'
			),
			array(
				'id'       => 'wow-theme-copyright-columns-7',
				'type'     => 'text',
				'required' => array( 'wow-theme-copyright-columns', '>=', '7' ),
				'title'    => __( 'Column 7', 'wow-theme-options' ),
				'class' => 'wow-theme-admin-copyright-column wow-theme-admin-copyright-column-7',
				'default'  => 'col-sm-12 col-md-6 col-lg-6'
			),
			array(
				'id'       => 'wow-theme-copyright-columns-8',
				'type'     => 'text',
				'required' => array( 'wow-theme-copyright-columns', '>=', '8' ),
				'title'    => __( 'Column 8', 'wow-theme-options' ),
				'class' => 'wow-theme-admin-copyright-column wow-theme-admin-copyright-column-8',
				'default'  => 'col-sm-12 col-md-6 col-lg-6'
			),
			array(
				'id'       => 'wow-theme-copyright-columns-9',
				'type'     => 'text',
				'required' => array( 'wow-theme-copyright-columns', '>=', '9' ),
				'title'    => __( 'Column 9', 'wow-theme-options' ),
				'class' => 'wow-theme-admin-copyright-column wow-theme-admin-copyright-column-9',
				'default'  => 'col-sm-12 col-md-6 col-lg-6'
			),
			array(
				'id'       => 'wow-theme-copyright-columns-10',
				'type'     => 'text',
				'required' => array( 'wow-theme-copyright-columns', '>=', '10' ),
				'title'    => __( 'Column 10', 'wow-theme-options' ),
				'class' => 'wow-theme-admin-copyright-column wow-theme-admin-copyright-column-10',
				'default'  => 'col-sm-12 col-md-6 col-lg-6'
			),
			array(
				'id'       => 'wow-theme-copyright-columns-11',
				'type'     => 'text',
				'required' => array( 'wow-theme-copyright-columns', '>=', '11' ),
				'title'    => __( 'Column 11', 'wow-theme-options' ),
				'class' => 'wow-theme-admin-copyright-column wow-theme-admin-copyright-column-11',
				'default'  => 'col-sm-12 col-md-6 col-lg-6'
			),
			array(
				'id'       => 'wow-theme-copyright-columns-12',
				'type'     => 'text',
				'required' => array( 'wow-theme-copyright-columns', '>=', '12' ),
				'title'    => __( 'Column 12', 'wow-theme-options' ),
				'class' => 'wow-theme-admin-copyright-column wow-theme-admin-copyright-column-12',
				'default'  => 'col-sm-12 col-md-6 col-lg-6'
			),

        ),

		
	));
	
	Redux::setSection( $opt_name, array(
        'title'      => __( 'Copyright Tags', 'wow-theme-options' ),
        'id'         => 'wow-theme-copyright-function',
        'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'wow-theme-copyright-function-tags',
                'type'     => 'select',
                'title'    => __( 'Title Tags', 'wow-theme-options' ),
                'options'  => array(
					'h2'       => 'H2', 
					'h3'       => 'H3', 
					'h4'       => 'H4', 
					'h5'       => 'H5', 
					'h6'       => 'H6', 
					'p'       => 'p', 
					'div'       => 'div', 
				),
				'default'         => 'h4'
            ),
		)
	));
