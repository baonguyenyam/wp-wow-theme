<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WOW WordPress 
 * @subpackage Theme by Nguyen Pham
 * https://baonguyenyam.github.io
 * @since 2021
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/content/content-single' );

endwhile; // End of the loop.

get_footer();
