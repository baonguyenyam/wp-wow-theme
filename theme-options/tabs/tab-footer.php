<?php
/**
* @package WOW WordPress 
* @subpackage Theme by Nguyen Pham
* https://baonguyenyam.github.io
* @since 2021
*/

    // -> START Footer
    Redux::setSection( $opt_name, array(
        'title' => __( 'Footer', 'wow-theme-options' ),
        'id'    => 'wow-theme-footer',
        'icon'  => 'bi bi-layout-three-columns'
    ) );

	Redux::setSection( $opt_name, array(
        'title' => __( 'Footer Layout', 'wow-theme-options' ),
        'id'         => 'wow-theme-footer-layout',
        'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'wow-theme-footer-enable',
                'type'     => 'switch',
                'title'    => __( 'Enable', 'wow-theme-options' ),
                'default'  => 1,
                'on'       => 'On',
                'off'      => 'Off',
            ),
			array(
				'id'       => 'wow-theme-footer-layout-fixed',
                'type'     => 'switch',
				'required' => array( 'wow-theme-footer-enable', '=', '1' ),
				'title'    => __( 'Sticky footer', 'wow-theme-options' ),
                'subtitle' => __( 'Attach a footer to the bottom of the viewport when page content is short.', 'wow-theme-options' ),
                'default'  => 0,
                'on'       => 'Fixed',
                'off'      => 'Default',
            ),
			array(
				'id'       => 'wow-theme-footer-layout-style',
                'type'     => 'switch',
                'title'    => __( 'Containers', 'wow-theme-options' ),
                'subtitle' => __( 'Containers are a fundamental building block of Bootstrap that contain, pad, and align your content within a given device or viewport.', 'wow-theme-options' ),
                'default'  => 0,
                'on'       => 'Fullwidth',
                'off'      => 'Boxed',
            ),
			array(
				'id'       => 'wow-theme-footer-layout-size',
                'type'     => 'switch',
                'required' => array( 'wow-theme-footer-layout-style', '=', '1' ),
                'title'    => __( 'Max width container', 'wow-theme-options' ),
                'default'  => 0,
                'on'       => 'On',
                'off'      => 'Off',
            ),
			array(
				'id'       => 'wow-theme-footer-layout-size-value',
				'type'          => 'slider',
                'required' => array( 'wow-theme-footer-layout-size', '=', '1' ),
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
		'title'      => __( 'Footer style', 'wow-theme-options' ),
		'id'         => 'wow-theme-footer-style',
		'subsection' => true,
		'fields'     => array(
			array(
                'id'       => 'wow-theme-footer-style-bg',
                'type'     => 'background',
				'output'   => array( 'footer#footer' ),
                'title'    => __( 'Footer background', 'wow-theme-options' ),
                'subtitle' => __( 'Pick a footer background for the theme (default: #f0f0f0).', 'wow-theme-options' ),
                'default'  => array(
					'background-color' => '#f0f0f0',
				),
				'preview_media' => true,
				'preview' => false,
				'class' => 'wow-theme-admin-footer-style wow-theme-admin-footer-style-bg',
            ),
			array(
                'id'       => 'wow-theme-footer-style-border',
                'type'     => 'border',
                'title'    => __( 'Footer Border Option', 'wow-theme-options' ),
                'subtitle' => __( 'Only color validation can be done on this field type', 'wow-theme-options' ),
				'output'    => array(
					'border-top'  => 'footer#footer'
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
                'id'       => 'wow-theme-footer-style-color',
                'type'     => 'color_rgba',
				'output'    => array(
					'color'  => 'footer#footer'
				),
				// 'compiler' => array(
				// 	'color'  => 'footer#footer'
				// ),
                'title'    => __( 'Footer color', 'wow-theme-options' ),
                'subtitle' => __( 'Pick a footer color for the theme (default: #000).', 'wow-theme-options' ),
                'default'  => array(
					'color' => '#000',
				)
            ),
			array(
                'id'       => 'wow-theme-footer-style-link',
                'type'     => 'link_color',
				'output'    => array(
					'color'  => 'footer#footer a'
				),
				'title'    => __('Footer links', 'wow-theme-options'),
				'subtitle' => __('Only color validation can be done on this field type', 'wow-theme-options'),
				'default'  => array(
					'regular'  => '#007bff', // blue
					'hover'    => '#dd3333', // red
					'active'   => '#8224e3',  // purple
					'visited'  => '#8224e3',  // purple
				)
            ),
		)
	));

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Footer row', 'wow-theme-options' ),
        'id'         => 'wow-theme-footer-row',
        'desc'       => __( 'For full documentation on this field, visit: ', 'wow-theme-options' ) . '<a href="//getbootstrap.com/docs/5.0/layout/gutters/" target="_blank">getbootstrap.com/docs/5.0/layout/gutters/</a>',
        'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'wow-theme-footer-row-option',
                'type'     => 'switch',
                'title'    => __( 'Row padding', 'wow-theme-options' ),
                'default'  => 1,
                'on'       => 'On',
                'off'      => 'Off',
            ),
			array(
				'id'       => 'wow-theme-footer-row-spacing',
				'required' => array( 'wow-theme-footer-row-option', '=', '1' ),
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
					'top'       => '2rem',
					'bottom'	=> '2rem',
                )
            ),
		)
	));

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Footer columns', 'wow-theme-options' ),
        'id'         => 'wow-theme-footer-column',
        'desc'       => __( 'For full documentation on this field, visit: ', 'wow-theme-options' ) . '<a href="//getbootstrap.com/docs/5.0/layout/columns/" target="_blank">getbootstrap.com/docs/5.0/layout/columns/</a>',
        'subsection' => true,
        'fields'     => array(

            array(
                'id'       => 'wow-theme-footer-columns',
                'type'     => 'image_select',
                'title'    => __( 'Footer columns', 'wow-theme-options' ),
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
				'class' => 'wow-theme-admin-footer-column wow-theme-admin-footer-column-img',
				'default'  => '4'
            ),
			array(
				'id'       => 'wow-theme-footer-columns-gutters',
                'title'    => __( 'Footer columns gutters', 'wow-theme-options' ),
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
				'id'       => 'wow-theme-footer-columns-1',
				'type'     => 'text',
				'title'    => __( 'Column 1', 'wow-theme-options' ),
				'subtitle' => __( 'Class name', 'wow-theme-options' ),
				'class' => 'wow-theme-admin-footer-column wow-theme-admin-footer-column-1',
				'default'  => 'col-sm-6 col-md-4 col-lg-3'
			),
			array(
				'id'       => 'wow-theme-footer-columns-2',
				'type'     => 'text',
				'required' => array( 'wow-theme-footer-columns', '>=', '2' ),
				'title'    => __( 'Column 2', 'wow-theme-options' ),
				'class' => 'wow-theme-admin-footer-column wow-theme-admin-footer-column-2',
				'default'  => 'col-sm-6 col-md-4 col-lg-3'
			),
			array(
				'id'       => 'wow-theme-footer-columns-3',
				'type'     => 'text',
				'required' => array( 'wow-theme-footer-columns', '>=', '3' ),
				'title'    => __( 'Column 3', 'wow-theme-options' ),
				'class' => 'wow-theme-admin-footer-column wow-theme-admin-footer-column-3',
				'default'  => 'col-sm-6 col-md-4 col-lg-3'
			),
			array(
				'id'       => 'wow-theme-footer-columns-4',
				'type'     => 'text',
				'required' => array( 'wow-theme-footer-columns', '>=', '4' ),
				'title'    => __( 'Column 4', 'wow-theme-options' ),
				'class' => 'wow-theme-admin-footer-column wow-theme-admin-footer-column-4',
				'default'  => 'col-sm-6 col-md-4 col-lg-3'
			),
			array(
				'id'       => 'wow-theme-footer-columns-5',
				'type'     => 'text',
				'required' => array( 'wow-theme-footer-columns', '>=', '5' ),
				'title'    => __( 'Column 5', 'wow-theme-options' ),
				'class' => 'wow-theme-admin-footer-column wow-theme-admin-footer-column-5',
				'default'  => 'col-sm-6 col-md-4 col-lg-3'
			),
			array(
				'id'       => 'wow-theme-footer-columns-6',
				'type'     => 'text',
				'required' => array( 'wow-theme-footer-columns', '>=', '6' ),
				'title'    => __( 'Column 6', 'wow-theme-options' ),
				'class' => 'wow-theme-admin-footer-column wow-theme-admin-footer-column-6',
				'default'  => 'col-sm-6 col-md-4 col-lg-3'
			),
			array(
				'id'       => 'wow-theme-footer-columns-7',
				'type'     => 'text',
				'required' => array( 'wow-theme-footer-columns', '>=', '7' ),
				'title'    => __( 'Column 7', 'wow-theme-options' ),
				'class' => 'wow-theme-admin-footer-column wow-theme-admin-footer-column-7',
				'default'  => 'col-sm-6 col-md-4 col-lg-3'
			),
			array(
				'id'       => 'wow-theme-footer-columns-8',
				'type'     => 'text',
				'required' => array( 'wow-theme-footer-columns', '>=', '8' ),
				'title'    => __( 'Column 8', 'wow-theme-options' ),
				'class' => 'wow-theme-admin-footer-column wow-theme-admin-footer-column-8',
				'default'  => 'col-sm-6 col-md-4 col-lg-3'
			),
			array(
				'id'       => 'wow-theme-footer-columns-9',
				'type'     => 'text',
				'required' => array( 'wow-theme-footer-columns', '>=', '9' ),
				'title'    => __( 'Column 9', 'wow-theme-options' ),
				'class' => 'wow-theme-admin-footer-column wow-theme-admin-footer-column-9',
				'default'  => 'col-sm-6 col-md-4 col-lg-3'
			),
			array(
				'id'       => 'wow-theme-footer-columns-10',
				'type'     => 'text',
				'required' => array( 'wow-theme-footer-columns', '>=', '10' ),
				'title'    => __( 'Column 10', 'wow-theme-options' ),
				'class' => 'wow-theme-admin-footer-column wow-theme-admin-footer-column-10',
				'default'  => 'col-sm-6 col-md-4 col-lg-3'
			),
			array(
				'id'       => 'wow-theme-footer-columns-11',
				'type'     => 'text',
				'required' => array( 'wow-theme-footer-columns', '>=', '11' ),
				'title'    => __( 'Column 11', 'wow-theme-options' ),
				'class' => 'wow-theme-admin-footer-column wow-theme-admin-footer-column-11',
				'default'  => 'col-sm-6 col-md-4 col-lg-3'
			),
			array(
				'id'       => 'wow-theme-footer-columns-12',
				'type'     => 'text',
				'required' => array( 'wow-theme-footer-columns', '>=', '12' ),
				'title'    => __( 'Column 12', 'wow-theme-options' ),
				'class' => 'wow-theme-admin-footer-column wow-theme-admin-footer-column-12',
				'default'  => 'col-sm-6 col-md-4 col-lg-3'
			),

        ),

		
	));
	
	Redux::setSection( $opt_name, array(
        'title'      => __( 'Footer Tags', 'wow-theme-options' ),
        'id'         => 'wow-theme-footer-function',
        'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'wow-theme-footer-function-tags',
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
