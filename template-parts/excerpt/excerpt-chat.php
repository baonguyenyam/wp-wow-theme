<?php
/**
 * Show the appropriate content for the Chat post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WOW WordPress 
 * @subpackage Theme by Nguyen Pham
 * https://baonguyenyam.github.io
 * @since 2021
 */

// If there are paragraph blocks, print up to two.
// Otherwise this is legacy content, so print the excerpt.
if ( has_block( 'core/paragraph', get_the_content() ) ) {

	wow_print_first_instance_of_block( 'core/paragraph', get_the_content(), 2 );
} else {

	the_excerpt();
}
