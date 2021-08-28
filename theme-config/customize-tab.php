<?php
function wow_disable_customize_register() {     
	global $wp_customize;
	$wp_customize->remove_section( 'wow-theme-layout' );  //Modify this line as needed  
	$wp_customize->remove_panel( 'wow-theme-header' );  //Modify this line as needed  
	$wp_customize->remove_panel( 'wow-theme-footer' );  //Modify this line as needed  
	$wp_customize->remove_panel( 'wow-theme-global' );  //Modify this line as needed  
	$wp_customize->remove_panel( 'wow-theme-blog' );  //Modify this line as needed  
	$wp_customize->remove_panel( 'wow-theme-layout' );  //Modify this line as needed  
	$wp_customize->remove_panel( 'wow-theme-search' );  //Modify this line as needed  
	$wp_customize->remove_section( 'wow-theme-social-media' );  //Modify this line as needed  
	// $wp_customize->remove_section( 'background_image' );  //Modify this line as needed  
	// $wp_customize->remove_section( 'colors' );  //Modify this line as needed  
}

add_action( 'customize_register', 'wow_disable_customize_register', 11 );
