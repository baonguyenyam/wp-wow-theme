<?php
/**
* @package WOW WordPress 
* @subpackage Theme by Nguyen Pham
* https://baonguyenyam.github.io
* @since 2021
*/

    // -> START Footer
    Redux::setSection( $opt_name, array(
        'title' => __( 'Typography', 'wow-theme-options' ),
        'id'    => 'wow-theme-typography',
        'icon'  => 'bi bi-type'
    ) );

	Redux::setSection( $opt_name, array(
        'title'      => __( 'Body <i style="color:red">(*)</i>', 'wow-theme-options' ),
        'id'         => 'wow-theme-typography-global',
        'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'wow-theme-typography-global-body',
                'type'     => 'typography',
				'title'    => __('Typography', 'wow-theme-options'),
				'google'      => true, 
				'font-backup' => true,
				'output'      => array('html', 'body'),
				'units'       =>'px',
				'subtitle'    => __('Typography option with each property can be called individually.', 'redux-framework-demo'),
				'default'     => array(
					// 'color'       => '#333', 
					// 'font-style'  => '700', 
					// 'font-family' => 'Abel', 
					// 'google'      => true,
					// 'font-size'   => '33px', 
					// 'line-height' => '40'
				),
			),
		),
    ) );
	
	Redux::setSection( $opt_name, array(
        'title'      => __( 'Header <i style="color:red">(*)</i>', 'wow-theme-options' ),
        'id'         => 'wow-theme-typography-header',
        'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'wow-theme-typography-header-menu',
                'type'     => 'typography',
				'title'    => __('Typography', 'wow-theme-options'),
				'google'      => true, 
				'font-backup' => true,
				'output'      => array('h2.site-description'),
				'units'       =>'px',
				'subtitle'    => __('Typography option with each property can be called individually.', 'redux-framework-demo'),
				'default'     => array(),
			),
		),
    ) );
	