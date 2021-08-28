<?php
/**
* @package WOW WordPress 
* @subpackage Theme by Nguyen Pham
* https://baonguyenyam.github.io
* @since 2021
*/

    // -> START Social
		
	Redux::setSection( $opt_name, array(
		'title' => __( 'Social media', 'wow-theme-options' ),
		'id'         => 'wow-theme-social-media',
		'desc'       => __( 'Enter in your social media locations here and then activate which ones you would like to display in your footer options & header options tabs. Remember to include the "http://" in all URLs!', 'wow-theme-options' ),
		'icon'  => 'bi bi-bullseye',
		'class' => 'wow-theme-admin-social-media',
		'subsection' => false,
		'fields'     => array(
			array(
				'id'       => 'wow-theme-social-media-enable',
                'type'     => 'switch',
                'title'    => __( 'Enable/Disable <i style="color:red">(*)</i>', 'wow-theme-options' ),
                'default'  => 0,
                'on'       => 'On',
                'off'      => 'Off',
            ),
			array(
				'id'       => 'wow-theme-social-media-facebook',
                'type'     => 'text',
				'title'    => __('Facebook URL', 'wow-theme-options'),
                'required' => array( 'wow-theme-social-media-enable', '=', '1' ),
				'default'  => "",
			),
			array(
				'id'       => 'wow-theme-social-media-twitter',
                'type'     => 'text',
				'title'    => __('Twitter URL', 'wow-theme-options'),
                'required' => array( 'wow-theme-social-media-enable', '=', '1' ),
				'default'  => "",
			),
			array(
				'id'       => 'wow-theme-social-media-vimeo',
                'type'     => 'text',
				'title'    => __('Vimeo URL', 'wow-theme-options'),
                'required' => array( 'wow-theme-social-media-enable', '=', '1' ),
				'default'  => "",
			),
			array(
				'id'       => 'wow-theme-social-media-youtube',
                'type'     => 'text',
				'title'    => __('Youtube URL', 'wow-theme-options'),
                'required' => array( 'wow-theme-social-media-enable', '=', '1' ),
				'default'  => "",
			),
			array(
				'id'       => 'wow-theme-social-media-linkedin',
                'type'     => 'text',
				'title'    => __('LinkedIn URL', 'wow-theme-options'),
                'required' => array( 'wow-theme-social-media-enable', '=', '1' ),
				'default'  => "",
			),
			array(
				'id'       => 'wow-theme-social-media-instagram',
                'type'     => 'text',
				'title'    => __('Instagram URL', 'wow-theme-options'),
                'required' => array( 'wow-theme-social-media-enable', '=', '1' ),
				'default'  => "",
			),
		),
	) );
	