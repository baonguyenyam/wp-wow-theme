<?php
global $wow_theme;
$header_style = $wow_theme['wow-theme-header-layout-style'];
$header_offcanvas = $wow_theme['wow-theme-header-offcanvas'];
$header_menu_toggle = $wow_theme['wow-theme-header-menu-toggle'];
$header_row = $wow_theme['wow-theme-header-row-option'];
$header_search_sticky = $wow_theme['wow-theme-header-search-sticky'];
$header_search_align = $wow_theme['wow-theme-header-search-align'];
?>
<?php get_template_part( 'template-parts/header/site-branding' ); ?>

<?php if ( isset($header_offcanvas) && ($header_offcanvas === '1' || $header_offcanvas == 1) ) : ?>
	<nav id="site-navigation" class="primary-menu-container menu-offcanvas<?=isset($header_menu_toggle) && $header_menu_toggle  !== '' ? '-'.$header_menu_toggle: '-md'?>" aria-label="Primary menu" style="">
<?php else : ?>
	<nav id="site-navigation" class="primary-menu-container collapse navbar-collapse" aria-label="Primary menu" style="">
<?php endif; ?>
	<?php if ( isset($header_offcanvas) && ($header_offcanvas === '1' || $header_offcanvas == 1) ) : ?>
	<div class="header-wrapper"<?= isset($header_row) && $header_row === '1' ? $build_header_spacing : ''?>>
		<div class="container<?= isset($header_style) && $header_style === '1' ? '-fluid': ''?>">
			<?php get_template_part( 'template-parts/header/site-nav' ); ?>
			<div id="second-nav" class="secondary-navigation<?= isset($header_search_align) && $header_search_align !== '' ? ' search-align-'.$header_search_align: ' search-align-right'?>">
				<?php get_template_part( 'template-parts/header/site-nav-secondary' ); ?>
				<?php get_template_part( 'template-parts/header/site-search' ); ?>
			</div>
		</div>
	</div>
	<?php else : ?>
		<?php get_template_part( 'template-parts/header/site-nav' ); ?>
		<div id="second-nav" class="secondary-navigation<?= isset($header_search_align) && $header_search_align !== '' ? ' search-align-'.$header_search_align: ' search-align-right'?>">
			<?php get_template_part( 'template-parts/header/site-nav-secondary' ); ?>
			<?php get_template_part( 'template-parts/header/site-search' ); ?>
		</div>
	<?php endif; ?>
</nav>
