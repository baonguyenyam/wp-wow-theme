<?php
/**
* @package WOW WordPress 
* @subpackage Theme by Nguyen Pham
* https://baonguyenyam.github.io
* @since 2021
*/

    // -> START Header
    Redux::setSection( $opt_name, array(
        'title' => __( 'Header', 'wow-theme-options' ),
        'id'    => 'wow-theme-header',
        'icon'  => 'bi bi-menu-button-wide'
    ) );


	Redux::setSection( $opt_name, array(
        'title' => __( 'Header layout', 'wow-theme-options' ),
        'id'         => 'wow-theme-header-layout',
        'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'wow-theme-header-kind',
                'type'     => 'image_select',
                'title'    => __( 'Header Type <i style="color:red">(*)</i>', 'wow-theme-options' ),
				'options'  => array(
                    '1' => array(
                        'img' => get_template_directory_uri() . '/admin/img/menu-left-aligned.png'
                    ),
                    '2' => array(
                        'img' => get_template_directory_uri() . '/admin/img/centered-menu.png'
                    ),
                    '3' => array(
                        'img' => get_template_directory_uri() . '/admin/img/default-header.png'
                    ),
                    '4' => array(
                        'img' => get_template_directory_uri() . '/admin/img/centered-menu-under-logo.png'
                    ),
                ),
				'default'  => '1'
            ),
            array(
				'id'       => 'wow-theme-header-second',
                'type'     => 'switch',
                'title'    => __( 'Secondary Menu', 'wow-theme-options' ),
                'default'  => 0,
                'on'       => 'Enable',
                'off'      => 'Disable',
            ),
            array(
				'id'       => 'wow-theme-header-second-align',
                'type'     => 'button_set',
				'required' => array(
                    array('wow-theme-header-second', '!=', '0'),
                    array('wow-theme-header-kind', '=', '1'),
                    array('wow-theme-header-menu-toggle', '!=', 'all'),
                ),
				'title'    => __( 'Secondary Menu Align', 'wow-theme-options' ),
				'options' => array(
					'left' => 'Left', 
					'right' => 'Right', 
					), 
				'default' => 'right'
            ),
			array(
				'id'       => 'wow-theme-header-layout-style',
                'type'     => 'switch',
                'title'    => __( 'Containers', 'wow-theme-options' ),
                'subtitle' => __( 'Containers are a fundamental building block of Bootstrap that contain, pad, and align your content within a given device or viewport.', 'wow-theme-options' ),
                'default'  => 0,
                'on'       => 'Fullwidth',
                'off'      => 'Boxed',
            ),
			array(
				'id'       => 'wow-theme-header-layout-size',
                'type'     => 'switch',
                'required' => array( 'wow-theme-header-layout-style', '=', '1' ),
                'title'    => __( 'Max width container', 'wow-theme-options' ),
                'default'  => 0,
                'on'       => 'On',
                'off'      => 'Off',
            ),
			array(
				'id'       => 'wow-theme-header-layout-size-value',
				'type'          => 'slider',
                'required' => array( 'wow-theme-header-layout-size', '=', '1' ),
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
		'title'      => __( 'Header options', 'wow-theme-options' ),
		'id'         => 'wow-theme-header-options',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'wow-theme-header-menu-toggle',
                'type'     => 'select',
                'title'    => __( 'Menu Toggle', 'wow-theme-options' ),
                'options'  => array(
					'keep'       => 'Keep', 
					'sm'       => 'Mobile', 
					'md'       => 'Phalet', 
					'lg'       => 'Tablet', 
					'xl'       => 'Small PC', 
					'xxl'       => 'Large PC', 
					'all'       => 'All Devices', 
				),
				'default'         => 'md'
            ),
            array(
				'id'       => 'wow-theme-header-offcanvas',
                'required' => array(
                    'wow-theme-header-menu-toggle', '!=', 'keep',
                ),
                'type'     => 'switch',
                'title'    => __( 'Header Offcanvas', 'wow-theme-options' ),
                'default'  => 1,
                'on'       => 'On',
                'off'      => 'Off',
            ),
			array(
				'id'       => 'wow-theme-header-fixed',
                'type'     => 'switch',
                'title'    => __( 'Header Fixed', 'wow-theme-options' ),
                'default'  => 1,
                'on'       => 'On',
                'off'      => 'Off',
            ),
			array(
                'id'       => 'wow-theme-header-logo',
                'type'     => 'media', 
				// 'url'      => true,
				// 'readonly' => false,
				'output'   => array( '#header .site-branding' ),
                'title'    => __( 'Header Logo <i style="color:red">(*)</i>', 'wow-theme-options' ),
            ),
			array(
                'id'       => 'wow-theme-header-logo-size',
				'required' => array( 'wow-theme-header-logo', '!=', '' ),
                'type'           => 'dimensions',
                'width'            => true,
                'height'            => true,
                'units'          => array( 'em', 'rem', 'px', '%' ),      
                'units_extended' => 'true',    
                'title'          => __( 'Header Logo Size', 'wow-theme-options' ),
            ),
			array(
                'id'       => 'wow-theme-header-logo-tablet',
                'type'     => 'media', 
				// 'url'      => true,
				// 'readonly' => false,
				'output'   => array( '#header .site-branding' ),
                'title'    => __( 'Phalet/Tablet Header Logo <i style="color:red">(*)</i>', 'wow-theme-options' ),
            ),
			array(
                'id'       => 'wow-theme-header-logo-tablet-size',
				'required' => array( 'wow-theme-header-logo-tablet', '!=', '' ),
                'type'           => 'dimensions',
                'width'            => true,
                'height'            => true,
                'units'          => array( 'em', 'rem', 'px', '%' ),      
                'units_extended' => 'true',    
                'title'          => __( 'Phalet/Tablet Header Logo Size', 'wow-theme-options' ),
            ),
			array(
                'id'       => 'wow-theme-header-logo-mobile',
                'type'     => 'media', 
				// 'url'      => true,
				// 'readonly' => false,
				'output'   => array( '#header .site-branding' ),
                'title'    => __( 'Mobile Header Logo <i style="color:red">(*)</i>', 'wow-theme-options' ),
            ),
			array(
                'id'       => 'wow-theme-header-logo-mobile-size',
				'required' => array( 'wow-theme-header-logo-mobile', '!=', '' ),
                'type'           => 'dimensions',
                'width'            => true,
                'height'            => true,
                'units'          => array( 'em', 'rem', 'px', '%' ),      
                'units_extended' => 'true',    
                'title'          => __( 'Mobile Header Logo Size', 'wow-theme-options' ),
            ),
			
		)
	));

	Redux::setSection( $opt_name, array(
        'title'      => __( 'Header row', 'wow-theme-options' ),
        'id'         => 'wow-theme-header-row',
        'desc'       => __( 'For full documentation on this field, visit: ', 'wow-theme-options' ) . '<a href="//getbootstrap.com/docs/5.0/layout/gutters/" target="_blank">getbootstrap.com/docs/5.0/layout/gutters/</a>',
        'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'wow-theme-header-row-option',
                'type'     => 'switch',
                'title'    => __( 'Row padding', 'wow-theme-options' ),
                'default'  => 0,
                'on'       => 'On',
                'off'      => 'Off',
            ),
			array(
				'id'       => 'wow-theme-header-row-spacing',
				'required' => array( 'wow-theme-header-row-option', '=', '1' ),
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
                    'units'     => 'em'
                )
            ),
		)
	));

	Redux::setSection( $opt_name, array(
		'title'      => __( 'Header style', 'wow-theme-options' ),
		'id'         => 'wow-theme-header-style',
		'subsection' => true,
		'fields'     => array(
			array(
                'id'       => 'wow-theme-header-style-bg',
                'type'     => 'background',
				'output'   => array( '#header' ),
                'title'    => __( 'Header background', 'wow-theme-options' ),
                'subtitle' => __( 'Pick a header background for the theme (default: #ffffff).', 'wow-theme-options' ),
                'default'  => array(
                    'background-color'	=> '#ffffff',
                ),
				'preview_media' => true,
				'preview' => false,
				'class' => 'wow-theme-admin-header-style wow-theme-admin-header-style-bg',
            ),
            array(
                'id'       => 'wow-theme-header-style-bg-active',
                'type'     => 'background',
				'required' => array( 'wow-theme-header-fixed', '=', '1' ),
				'output'   => array( '#header.active', '#header.toggle' ),
                'title'    => __( 'Header background active', 'wow-theme-options' ),
                'subtitle' => __( 'Pick a header background active for the theme (default: #ffffff).', 'wow-theme-options' ),
                'default'  => array(
                    'background-color'	=> '#ffffff',
                ),
				'preview_media' => true,
				'preview' => false,
				'class' => 'wow-theme-admin-header-style wow-theme-admin-header-style-bg',
            ),
            array(
                'id'       => 'wow-theme-header-style-bg-canvas',
                'type'     => 'background',
				'required' => array( 'wow-theme-header-offcanvas', '=', '1' ),
				'output'   => array( '#header.canvased .primary-menu-container' ),
                'title'    => __( 'Header background canvas', 'wow-theme-options' ),
                'subtitle' => __( 'Pick a header background canvas for the theme (default: #e8e8e8).', 'wow-theme-options' ),
                'default'  => array(
                    'background-color'	=> '#e8e8e8',
                ),
				'preview_media' => true,
				'preview' => false,
				'class' => 'wow-theme-admin-header-style wow-theme-admin-header-style-bg',
            ),
            array(
                'id'       => 'wow-theme-header-style-bg-animation',
                'title'    => __( 'Header background animation', 'wow-theme-options' ),
                'subtitle' => __( 'Pick a header background animation milliseconds (default: 400ms = 0.4s).', 'wow-theme-options' ),
				'type'          => 'slider',
				'min'           => 0,
				'step'          => 100,
				'default'       => 400,
				'max'           => 3000,
				'display_value' => 'text'
			),
			array(
                'id'       => 'wow-theme-header-style-border-top',
                'type'     => 'border',
                'title'    => __( 'Header Border Top', 'wow-theme-options' ),
                'subtitle' => __( 'Only color validation can be done on this field type', 'wow-theme-options' ),
				'output'    => array(
					'border-top'  => '#header'
				),
                'right'         => false,     
                'bottom'        => false,  
                'left'          => false,  
                'top'          => true,  
                'default'  => array(
                    'border-color'  => 'transparent',
                    'border-style'  => 'solid',
                    'border-top'    => '0px',
                ),
            ),
			array(
                'id'       => 'wow-theme-header-style-border-bottom',
                'type'     => 'border',
                'title'    => __( 'Header Border Bottom', 'wow-theme-options' ),
                'subtitle' => __( 'Only color validation can be done on this field type', 'wow-theme-options' ),
				'output'    => array(
					'border-bottom'  => '#header'
				),
                'right'         => false,     
                'top'        => false,     
                'left'          => false,  
                'bottom'          => true,  
                'default'  => array(
                    'border-color'  => 'transparent',
                    'border-style'  => 'solid',
                    'border-bottom'    => '0px',
                ),
            ),
			array(
                'id'       => 'wow-theme-header-style-color',
                'type'     => 'color_rgba',
				'output'    => array(
					'color'  => '#header'
				),
                'title'    => __( 'Header color', 'wow-theme-options' ),
                'subtitle' => __( 'Pick a header color for the theme (default: #000).', 'wow-theme-options' ),
                'default'  => array(
					'color' => '#000',
				)
            ),
			array(
                'id'       => 'wow-theme-header-style-link',
                'type'     => 'link_color',
				'output'    => array(
					'color'  => '#header a'
				),
				'title'    => __('Header links', 'wow-theme-options'),
				'subtitle' => __('Only color validation can be done on this field type', 'wow-theme-options'),
				'default'  => array(
					'regular'  => '#242526', // blue
					'hover'    => '#007bff', // red
					'active'   => '#242526',  // purple
					'visited'  => '#242526',  // purple
				)
            ),
			array(
				'id'       => 'wow-theme-header-shadow',
                'type'     => 'select',
                'title'    => __( 'Shadows', 'wow-theme-options' ),
                'subtitle' => __( 'Add or remove shadows to elements with box-shadow utilities.', 'wow-theme-options' ),
                'options'  => array(
					'default'       => 'Default', 
					'shadow-none'       => 'No shadow', 
					'shadow-sm'       => 'Small shadow', 
					'shadow'       => 'Regular shadow', 
					'shadow-lg'       => 'Larger shadow', 
				),
				'default'         => 'shadow'
            ),


		)
	));

	
