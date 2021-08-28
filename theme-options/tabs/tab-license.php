<?php
/**
* @package WOW WordPress 
* @subpackage Theme by Nguyen Pham
* https://baonguyenyam.github.io
* @since 2021
*/

    // -> START Social
		
	Redux::setSection( $opt_name, array(
		'title' => __( 'Product license', 'wow-theme-options' ),
		'id'         => 'wow-theme-license',
		'desc'       => __( 'In order to receive all benefits of WOW Theme, you need to activate your copy of the plugin. By activating WOW Theme license you will unlock premium options - direct plugin updates, access to template library and official support. Don\'t have direct license yet? ', 'wow-theme-options' ) . '<a href="//wow-wp.com" target="_blank">Purchase WOW Theme license.</a>',
		'icon'  => 'bi bi-key',
		'class' => 'wow-theme-admin-license-code',
		'subsection' => false,
		'fields'     => array(
			
			array(
				'id'       => 'wow-theme-license-code-domain',
                'type'     => 'text',
				'title'    => __('Your domain', 'wow-theme-options'),
				'default'  => "",
			),
			array(
				'id'       => 'wow-theme-license-code-email',
                'type'     => 'text',
				'title'    => __('Your email', 'wow-theme-options'),
				'default'  => "",
			),
			array(
				'id'       => 'wow-theme-license-code-package',
                'type'     => 'text',
				'title'    => __('Your package', 'wow-theme-options'),
				'default'  => "",
			),
			array(
				'id'       => 'wow-theme-license-code-key',
                'type'     => 'text',
				'title'    => __('Your Key', 'wow-theme-options'),
				'default'  => "",
			),
			array(
				'id'       => 'wow-theme-license-code-license',
                'type'     => 'text',
				'title'    => __('Your License', 'wow-theme-options'),
				'default'  => "",
			),
			array(
				'id'    => 'info_contact',
				'type'  => 'info',
				'style' => 'success',
				'desc'       => __( '<p style="margin-top:0;margin-bottom:0"><strong>Email:</strong> <a href="mailto:hello@wow-wp.com" target="_blank">hello@wow-wp.com</a></p><p style="margin-top:0;margin-bottom:0"><strong>Website:</strong> <a href="https://wow-wp.com/" target="_blank">wow-wp.com</a></p><p style="margin-top:0;margin-bottom:0"><strong>Call Us:</strong> <a href="tel:682-203-1334" target="_blank">682-203-1334</a></p>', 'wow-theme-options' ),
			),
			
		),
	) );
	
