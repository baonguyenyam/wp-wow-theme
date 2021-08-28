<?php

/** Enqueue non-latin language styles
 *
 * @since WOW 2021
 *
 * @return void
 */
function wow_non_latin_languages() {
	$custom_css = wow_get_non_latin_css( 'front-end' );

	if ( $custom_css ) {
		wp_add_inline_style( 'wow-assets-style', $custom_css );
	}
}
add_action( 'wp_enqueue_scripts', 'wow_non_latin_languages' );
