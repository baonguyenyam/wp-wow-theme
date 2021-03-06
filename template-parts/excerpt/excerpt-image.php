<?php
/**
 * Show the appropriate content for the Image post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WOW WordPress 
 * @subpackage Theme by Nguyen Pham
 * https://baonguyenyam.github.io
 * @since 2021
 */

// If there is no featured-image, print the first image block found.
if (
	! wow_can_show_post_thumbnail() &&
	has_block( 'core/image', get_the_content() )
) {

	wow_print_first_instance_of_block( 'core/image', get_the_content() );
}

the_excerpt();
