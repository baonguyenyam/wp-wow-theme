<?php
    /**
* @package WOW WordPress 
* @subpackage Theme by Nguyen Pham
* https://baonguyenyam.github.io
* @since 2021
*/

// -> START layout
    Redux::setSection( $opt_name, array(
        'title' => __( 'Posts/Blogs', 'wow-theme-options' ),
        'icon'  => 'bi bi-stickies',
        'id'         => 'wow-theme-blog',
	));
	Redux::setSection( $opt_name, array(
		'title'      => __( 'Post and Sidebar', 'wow-theme-options' ),
		'id'         => 'wow-theme-blog-style',
        'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'wow-theme-blog-style-sidebar',
                'type'     => 'switch',
                'title'    => __( 'Hide Sidebar on Single Post', 'wow-theme-options' ),
                'subtitle' => __( 'Using this will remove the sidebar from appearing on your single post page.', 'wow-theme-options' ),
                'default'  => 0,
                'on'       => 'On',
                'off'      => 'Off',
            ),			
            array(
				'id'       => 'wow-theme-blog-style-content-columns',
				'type'     => 'text',
				'required' => array( 'wow-theme-blog-style-sidebar', '=', '0' ),
				'title'    => __( 'Content Columns', 'wow-theme-options' ),
				'default'  => 'col-xl-8 col-xxl-9'
			),
            array(
				'id'       => 'wow-theme-blog-style-content-columns-padding',
				// 'required' => array( 'wow-theme-blog-style-sidebar', '=', '0' ),
                'type'           => 'spacing',
                'mode'           => 'padding',
                'all'            => false,
                'bottom'            => true,
                'right'            => false,
				'top'            => true,
                'left'            => false,
				// 'compiler' => true,
                'units'          => array( 'em', 'rem', 'px', '%' ),      
                'units_extended' => 'true',    
                'title'          => __( 'Content Padding', 'wow-theme-options' ),
                'subtitle'       => __( 'Allow your users to choose the padding they want.', 'wow-theme-options' ),
                'desc'           => __( 'You can enable or disable any piece of this field. Top, Bottom, or Units.', 'wow-theme-options' ),
                'default'        => array(
                    'bottom'    => '2em',
                    'top'       => '2em',
                    'units'     => 'em', 
                )
            ),
            array(
				'id'       => 'wow-theme-blog-style-sidebar-columns',
				'type'     => 'text',
				'required' => array( 'wow-theme-blog-style-sidebar', '=', '0' ),
				'title'    => __( 'Sidebar Columns', 'wow-theme-options' ),
				'default'  => 'col-xl-4 col-xxl-3'
			),
            array(
				'id'       => 'wow-theme-blog-style-sidebar-columns-padding',
				'required' => array( 'wow-theme-blog-style-sidebar', '=', '0' ),
                'type'           => 'spacing',
                'mode'           => 'padding',
                'all'            => false,
                'bottom'            => true,
                'right'            => false,
				'top'            => true,
                'left'            => false,
				// 'compiler' => true,
                'units'          => array( 'em', 'rem', 'px', '%' ),      
                'units_extended' => 'true',   
                'title'          => __( 'Sidebar Padding', 'wow-theme-options' ),
                'subtitle'       => __( 'Allow your users to choose the padding they want.', 'wow-theme-options' ),
                'desc'           => __( 'You can enable or disable any piece of this field. Top, Bottom, or Units.', 'wow-theme-options' ),
                'default'        => array(
                    'bottom'    => '2em',
                    'top'       => '2em',
                    'units'     => 'em', 
                )
            ),
            array(
				'id'       => 'wow-theme-blog-style-sidebar-position',
				'required' => array( 'wow-theme-blog-style-sidebar', '=', '0' ),
                'type'     => 'switch',
                'title'    => __( 'Sidebar Align', 'wow-theme-options' ),
                'default'  => 0,
                'on'       => 'Left',
                'off'      => 'Right',
            ),				
		),
    ) );

    Redux::setSection( $opt_name, array(
		'title'      => __( 'Post Functionality', 'wow-theme-options' ),
		'id'         => 'wow-theme-blog-style-function',
        'subsection' => true,
		'fields'     => array(
            array(
				'id'       => 'wow-theme-blog-style-content-thumbnail',
                'type'     => 'switch',
                'title'    => __( 'Hide Post Thumbnail', 'wow-theme-options' ),
                'subtitle' => __( 'Using this will remove the post thumbnail on your single post page.', 'wow-theme-options' ),
                'default'  => 0,
                'on'       => 'On',
                'off'      => 'Off',
            ),			
            array(
				'id'       => 'wow-theme-blog-style-content-nextprev',
                'type'     => 'switch',
                'title'    => __( 'Hide Post Navigation', 'wow-theme-options' ),
                'subtitle' => __( 'Using this will remove the next/prev button on your single post page.', 'wow-theme-options' ),
                'default'  => 0,
                'on'       => 'On',
                'off'      => 'Off',
            ),
            array(
				'id'       => 'wow-theme-blog-style-breadcrumb',
                'type'     => 'switch',
                'title'    => __( 'Hide Post Breadcrumb', 'wow-theme-options' ),
                'subtitle' => __( 'Using this will remove the breadcrumb on your single post page.', 'wow-theme-options' ),
                'default'  => 0,
                'on'       => 'On',
                'off'      => 'Off',
            ),	
            array(
				'id'       => 'wow-theme-blog-style-content-category',
                'type'     => 'switch',
                'title'    => __( 'Hide Post Category', 'wow-theme-options' ),
                'default'  => 0,
                'on'       => 'On',
                'off'      => 'Off',
            ),	
            array(
				'id'       => 'wow-theme-blog-style-content-tag',
                'type'     => 'switch',
                'title'    => __( 'Hide Post Tag', 'wow-theme-options' ),
                'default'  => 0,
                'on'       => 'On',
                'off'      => 'Off',
            ),	
            array(
				'id'       => 'wow-theme-blog-style-content-author',
                'type'     => 'switch',
                'title'    => __( 'Hide Post Author', 'wow-theme-options' ),
                'default'  => 0,
                'on'       => 'On',
                'off'      => 'Off',
            ),	
            array(
				'id'       => 'wow-theme-blog-style-content-date',
                'type'     => 'switch',
                'title'    => __( 'Hide Post Date', 'wow-theme-options' ),
                'default'  => 0,
                'on'       => 'On',
                'off'      => 'Off',
            ),			
		),
    ) );

    Redux::setSection( $opt_name, array(
        'title' => __( 'Excerpt Settings', 'wow-theme-options' ),
        'id'         => 'wow-theme-blog-excerpt',
        'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'wow-theme-blog-excerpt-option',
                'type'     => 'switch',
                'title'    => __( 'Enable excerpt', 'wow-theme-options' ),
                'default'  => 1,
                'on'       => 'On',
                'off'      => 'Off',
            ),
            
			array(
				'id'       => 'wow-theme-blog-excerpt-value',
				'type'          => 'slider',
                'required' => array( 'wow-theme-blog-excerpt-option', '=', '1' ),
                'title'    => __( 'Excerpt length', 'wow-theme-options' ),
				'min'           => 10,
				'step'          => 10,
				'default'       => 120,
				'max'           => 500,
				'display_value' => 'text'
			),
            array(
				'id'       => 'wow-theme-blog-excerpt-readmore',
                'type'     => 'text',
				'title'    => __('Readmore text', 'wow-theme-options'),
                'required' => array( 'wow-theme-blog-excerpt-option', '=', '1' ),
				'default'  => "Readmore",
			),
            array(
				'id'       => 'wow-theme-blog-excerpt-morestring',
                'type'     => 'text',
				'title'    => __('More string', 'wow-theme-options'),
                'required' => array( 'wow-theme-blog-excerpt-option', '=', '1' ),
				'default'  => "[...]",
			),
		),
    ) );


    Redux::setSection( $opt_name, array(
		'title'      => __( 'Archive and Sidebar', 'wow-theme-options' ),
		'id'         => 'wow-theme-blog-style-archive',
        'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'wow-theme-blog-style-archive-sidebar',
                'type'     => 'switch',
                'title'    => __( 'Hide Sidebar on Archive', 'wow-theme-options' ),
                'subtitle' => __( 'Using this will remove the sidebar from appearing on your archive page.', 'wow-theme-options' ),
                'default'  => 0,
                'on'       => 'On',
                'off'      => 'Off',
            ),			
            array(
				'id'       => 'wow-theme-blog-style-archive-content-columns',
				'type'     => 'text',
				'required' => array( 'wow-theme-blog-style-archive-sidebar', '=', '0' ),
				'title'    => __( 'Content Columns', 'wow-theme-options' ),
				'default'  => 'col-xl-8 col-xxl-9'
			),
            array(
				'id'       => 'wow-theme-blog-style-archive-content-columns-padding',
				// 'required' => array( 'wow-theme-blog-style-archive-sidebar', '=', '0' ),
                'type'           => 'spacing',
                'mode'           => 'padding',
                'all'            => false,
                'bottom'            => true,
                'right'            => false,
				'top'            => true,
                'left'            => false,
				// 'compiler' => true,
                'units'          => array( 'em', 'rem', 'px', '%' ),      
                'units_extended' => 'true',    
                'title'          => __( 'Content Padding', 'wow-theme-options' ),
                'subtitle'       => __( 'Allow your users to choose the padding they want.', 'wow-theme-options' ),
                'desc'           => __( 'You can enable or disable any piece of this field. Top, Bottom, or Units.', 'wow-theme-options' ),
                'default'        => array(
                    'bottom'    => '2em',
                    'top'       => '2em',
                    'units'     => 'em', 
                )
            ),
            array(
				'id'       => 'wow-theme-blog-style-archive-sidebar-columns',
				'type'     => 'text',
				'required' => array( 'wow-theme-blog-style-archive-sidebar', '=', '0' ),
				'title'    => __( 'Sidebar Columns', 'wow-theme-options' ),
				'default'  => 'col-xl-4 col-xxl-3'
			),
            array(
				'id'       => 'wow-theme-blog-style-archive-sidebar-columns-padding',
				'required' => array( 'wow-theme-blog-style-archive-sidebar', '=', '0' ),
                'type'           => 'spacing',
                'mode'           => 'padding',
                'all'            => false,
                'bottom'            => true,
                'right'            => false,
				'top'            => true,
                'left'            => false,
				// 'compiler' => true,
                'units'          => array( 'em', 'rem', 'px', '%' ),      
                'units_extended' => 'true',   
                'title'          => __( 'Sidebar Padding', 'wow-theme-options' ),
                'subtitle'       => __( 'Allow your users to choose the padding they want.', 'wow-theme-options' ),
                'desc'           => __( 'You can enable or disable any piece of this field. Top, Bottom, or Units.', 'wow-theme-options' ),
                'default'        => array(
                    'bottom'    => '2em',
                    'top'       => '2em',
                    'units'     => 'em', 
                )
            ),
            array(
				'id'       => 'wow-theme-blog-style-archive-sidebar-position',
				'required' => array( 'wow-theme-blog-style-archive-sidebar', '=', '0' ),
                'type'     => 'switch',
                'title'    => __( 'Sidebar Align', 'wow-theme-options' ),
                'default'  => 0,
                'on'       => 'Left',
                'off'      => 'Right',
            ),				
		),
    ) );


    Redux::setSection( $opt_name, array(
		'title'      => __( 'Archive Functionality', 'wow-theme-options' ),
		'id'         => 'wow-theme-blog-style-archive-function',
        'subsection' => true,
		'fields'     => array(
            array(
				'id'       => 'wow-theme-blog-style-archive-thumbnail',
                'type'     => 'switch',
                'title'    => __( 'Hide Post Thumbnail', 'wow-theme-options' ),
                'subtitle' => __( 'Using this will remove the post thumbnail on your archive page.', 'wow-theme-options' ),
                'default'  => 0,
                'on'       => 'On',
                'off'      => 'Off',
            ),			
            array(
				'id'       => 'wow-theme-blog-style-archive-breadcrumb',
                'type'     => 'switch',
                'title'    => __( 'Hide Breadcrumb', 'wow-theme-options' ),
                'subtitle' => __( 'Using this will remove the breadcrumb on your archive page.', 'wow-theme-options' ),
                'default'  => 0,
                'on'       => 'On',
                'off'      => 'Off',
            ),	
            array(
				'id'       => 'wow-theme-blog-style-archive-category',
                'type'     => 'switch',
                'title'    => __( 'Hide Post Category', 'wow-theme-options' ),
                'default'  => 0,
                'on'       => 'On',
                'off'      => 'Off',
            ),	
            array(
				'id'       => 'wow-theme-blog-style-archive-tag',
                'type'     => 'switch',
                'title'    => __( 'Hide Post Tag', 'wow-theme-options' ),
                'default'  => 0,
                'on'       => 'On',
                'off'      => 'Off',
            ),	
            array(
				'id'       => 'wow-theme-blog-style-archive-author',
                'type'     => 'switch',
                'title'    => __( 'Hide Post Author', 'wow-theme-options' ),
                'default'  => 0,
                'on'       => 'On',
                'off'      => 'Off',
            ),	
            array(
				'id'       => 'wow-theme-blog-style-archive-date',
                'type'     => 'switch',
                'title'    => __( 'Hide Post Date', 'wow-theme-options' ),
                'default'  => 0,
                'on'       => 'On',
                'off'      => 'Off',
            ),			
		),
    ) );


    
