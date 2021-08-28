<?php
/**
 * Displays the site header.
 *
 * @package WOW WordPress 
 * @subpackage Theme by Nguyen Pham
 * https://baonguyenyam.github.io
 * @since 2021
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';

global $wow_theme;
$header_style = $wow_theme['wow-theme-header-layout-style'];
$header_shadow = $wow_theme['wow-theme-header-shadow'];
$header_row = $wow_theme['wow-theme-header-row-option'];
$header_menu_toggle = $wow_theme['wow-theme-header-menu-toggle'];
$header_fixed = $wow_theme['wow-theme-header-fixed'];
$header_kind = $wow_theme['wow-theme-header-kind'];
$header_search_type = $wow_theme['wow-theme-header-search-type'];
$header_second_align = $wow_theme['wow-theme-header-second-align'];
$header_offcanvas = $wow_theme['wow-theme-header-offcanvas'];
$header_search_sticky = $wow_theme['wow-theme-header-search-sticky'];
$header_secondary_menu = isset($wow_theme['wow-theme-header-second']) && $wow_theme['wow-theme-header-second'] === '1' ? ' has-secondary-menu' : '';

$build_header_spacing = '';
if(isset($wow_theme['wow-theme-header-row-spacing'])) {
	$build_header_spacing_value = '';
	$header_value['header_row_unit'] = $wow_theme['wow-theme-header-row-spacing']['unit'];
	if(isset($wow_theme['wow-theme-header-row-spacing']['padding-top']) && $wow_theme['wow-theme-header-row-spacing']['padding-top'] != '') {
		$build_header_spacing_value .= 'padding-top:'.$wow_theme['wow-theme-header-row-spacing']['padding-top'].';';
	}
	if(isset($wow_theme['wow-theme-header-row-spacing']['padding-bottom']) && $wow_theme['wow-theme-header-row-spacing']['padding-bottom'] != '') {
		$build_header_spacing_value .= 'padding-bottom:'.$wow_theme['wow-theme-header-row-spacing']['padding-bottom'].';';
	}
	if(isset($wow_theme['wow-theme-header-row-spacing']['padding-left']) && $wow_theme['wow-theme-header-row-spacing']['padding-left'] != '') {
		$build_header_spacing_value .= 'padding-left:'.$wow_theme['wow-theme-header-row-spacing']['padding-left'].';';
	}
	if(isset($wow_theme['wow-theme-header-row-spacing']['padding-right']) && $wow_theme['wow-theme-header-row-spacing']['padding-right'] != '') {
		$build_header_spacing_value .= 'padding-right:'.$wow_theme['wow-theme-header-row-spacing']['padding-right'].';';
	}
	if(isset($wow_theme['wow-theme-header-row-spacing']['padding-top']) && $wow_theme['wow-theme-header-row-spacing']['padding-top'] != '' || isset($wow_theme['wow-theme-header-row-spacing']['padding-bottom']) && $wow_theme['wow-theme-header-row-spacing']['padding-bottom'] != '' || isset($wow_theme['wow-theme-header-row-spacing']['padding-left']) && $wow_theme['wow-theme-header-row-spacing']['padding-left'] != '' || isset($wow_theme['wow-theme-header-row-spacing']['padding-right']) && $wow_theme['wow-theme-header-row-spacing']['padding-right'] != '') {
		$build_header_spacing = ' style="'.$build_header_spacing_value.'"';
	}
}
?>

<!-- LIFT HEADER -->
<header id="header" class="lift-header <?php echo esc_attr( $wrapper_classes ); ?><?= isset($header_shadow) && $header_shadow !== '' ? ' '.$header_shadow: ' default'?><?=isset($header_fixed) &&$header_fixed === '1' ? ' fixed-top': ''?><?= isset($header_kind) ? ' menu-layout-'.$header_kind : ''?><?= isset($header_search_type) && $header_search_type !== '' ? ' search-'.$header_search_type: ' search-normal'?><?= isset($header_second_align) && $header_second_align !== '' ? ' secondalign-'.$header_second_align: ' secondalign-right'?><?php echo isset($header_search_sticky) && ($header_search_sticky === '1' || $header_search_sticky == 1) ? ' search-sticky' : ''; ?><?php echo isset($header_offcanvas) && ($header_offcanvas === '1' || $header_offcanvas == 1) ? ' canvased' : ''; ?><?=$header_secondary_menu?>" role="banner">

	<div class="header-wrapper"<?= isset($header_row) && $header_row === '1' ? $build_header_spacing : ''?>>
		<nav class="navbar navbar-expand<?=isset($header_menu_toggle) && $header_menu_toggle  !== '' ? '-'.$header_menu_toggle: '-md'?>">
			<div class="menu-init container<?= isset($header_style) && $header_style === '1' ? '-fluid': ''?>">
				
				<?php if(isset($header_kind) && ($header_kind === '1' || $header_kind == 1)) :?>
					<?php get_template_part( 'template-parts/header/layout/layout-1' ); ?>
				<?php elseif(isset($header_kind) && ($header_kind === '2' || $header_kind == 2)) :?>
					<?php get_template_part( 'template-parts/header/layout/layout-2' ); ?>
				<?php elseif(isset($header_kind) && ($header_kind === '3' || $header_kind == 3)) :?>
					<?php get_template_part( 'template-parts/header/layout/layout-3' ); ?>
				<?php elseif(isset($header_kind) && ($header_kind === '4' || $header_kind == 4)) :?>
					<?php get_template_part( 'template-parts/header/layout/layout-4' ); ?>
				<?php endif ;?>

			</div>
		</nav>
	</div>

</header><!-- #masthead -->
