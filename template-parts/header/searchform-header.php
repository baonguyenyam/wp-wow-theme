<?php
/**
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package WOW WordPress 
 * @subpackage Theme by Nguyen Pham
 * https://baonguyenyam.github.io
 * @since 2021
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
$wow_theme_unique_id = wp_unique_id( 'search-form-' );
$wow_theme_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';

global $wow_theme;
$header_value['search_label'] = $wow_theme['wow-theme-search-header-layout-label'];
$header_value['search_icon'] = $wow_theme['wow-theme-search-header-layout-icon'];
$header_value['search_text'] = $wow_theme['wow-theme-search-header-layout-text'];
$header_value['search_placeholder'] = $wow_theme['wow-theme-search-header-layout-placeholder'];
$header_value['search_placeholder_value'] = $wow_theme['wow-theme-search-header-layout-placeholder-value'];
$header_value['search_text_value'] = $wow_theme['wow-theme-search-header-layout-text-value'];

$search_value = '';
$placeholder_value = '';
if(!isset($header_value['search_label']) || $header_value['search_label'] == 0) {
	$search_value .= ' no-header-label';
}
if(!isset($header_value['search_icon']) || $header_value['search_icon'] == 0) {
	$search_value .= ' no-header-icon';
}
if(!isset($header_value['search_text']) || $header_value['search_text'] == 0) {
	$search_value .= ' no-header-text';
}
if(isset($header_value['search_placeholder']) && $header_value['search_placeholder'] != 0) {
	$placeholder_value = ' placeholder="'.$header_value['search_placeholder_value'].'"';
}
?>
<form role="search" <?php echo $wow_theme_aria_label;?> method="get" class="search-form<?=$search_value?>" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo esc_attr( $wow_theme_unique_id ); ?>"><?= $header_value['search_text_value'] !== '' ? $header_value['search_text_value'] : 'Search'; ?></label>
	<div class="input-group">
		<input type="search"<?=$placeholder_value?> id="<?php echo esc_attr( $wow_theme_unique_id ); ?>" class="form-control search-field" value="<?php echo get_search_query(); ?>" name="s" />
		<button type="button" class="search-submit-toggle"><i class="fas fa-search"></i></button>
		<button type="button" class="search-submit-close"><i class="btn-close text-reset"></i></button>
		<button type="submit" class="btn btn-primary search-submit"><span><?php echo esc_attr_x( 'Search', 'submit button', 'wp-wow-theme' ); ?></span><i class="fas fa-search"></i></button>
	</div>
</form>
