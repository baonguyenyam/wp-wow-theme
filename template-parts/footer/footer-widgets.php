<?php
/**
 * Displays the footer widget area.
 *
 * @package WOW WordPress 
 * @subpackage Theme by Nguyen Pham
 * https://baonguyenyam.github.io
 * @since 2021
 */

global $wow_theme;
$footer_col = $wow_theme['wow-theme-footer-columns'];
$footer_style = $wow_theme['wow-theme-footer-layout-style'];
$footer_row = $wow_theme['wow-theme-footer-row-option'];
$footer_gutters = $wow_theme['wow-theme-footer-columns-gutters'];
$global_backtotop = trim($wow_theme['wow-theme-global-function-backtotop']);
$global_backtotop_mobile = trim($wow_theme['wow-theme-global-function-backtotop-mobile']);
$global_backtotop_phalet = trim($wow_theme['wow-theme-global-function-backtotop-phalet']);
$global_backtotop_tablet = trim($wow_theme['wow-theme-global-function-backtotop-tablet']);
$global_backtotop_smallpc = trim($wow_theme['wow-theme-global-function-backtotop-smallpc']);
$copyright_col = $wow_theme['wow-theme-copyright-columns'];
$copyright_style = $wow_theme['wow-theme-copyright-layout-style'];
$copyright_row = $wow_theme['wow-theme-copyright-row-option'];
$copyright_gutters = $wow_theme['wow-theme-copyright-columns-gutters'];
$copyright_enable = $wow_theme['wow-theme-copyright-enable'];
$footer_enable = $wow_theme['wow-theme-footer-enable'];

$build_footer_spacing = '';
if(isset($wow_theme['wow-theme-footer-row-spacing'])) {
	$build_footer_spacing_value = '';
	$footer_value['footer_row_unit'] = $wow_theme['wow-theme-footer-row-spacing']['unit'];
	if(isset($wow_theme['wow-theme-footer-row-spacing']['padding-top']) && $wow_theme['wow-theme-footer-row-spacing']['padding-top'] != '') {
		$build_footer_spacing_value .= 'padding-top:'.$wow_theme['wow-theme-footer-row-spacing']['padding-top'].';';
	}
	if(isset($wow_theme['wow-theme-footer-row-spacing']['padding-bottom']) && $wow_theme['wow-theme-footer-row-spacing']['padding-bottom'] != '') {
		$build_footer_spacing_value .= 'padding-bottom:'.$wow_theme['wow-theme-footer-row-spacing']['padding-bottom'].';';
	}
	if(isset($wow_theme['wow-theme-footer-row-spacing']['padding-left']) && $wow_theme['wow-theme-footer-row-spacing']['padding-left'] != '') {
		$build_footer_spacing_value .= 'padding-left:'.$wow_theme['wow-theme-footer-row-spacing']['padding-left'].';';
	}
	if(isset($wow_theme['wow-theme-footer-row-spacing']['padding-right']) && $wow_theme['wow-theme-footer-row-spacing']['padding-right'] != '') {
		$build_footer_spacing_value .= 'padding-right:'.$wow_theme['wow-theme-footer-row-spacing']['padding-right'].';';
	}
	if(isset($wow_theme['wow-theme-footer-row-spacing']['padding-top']) && $wow_theme['wow-theme-footer-row-spacing']['padding-top'] != '' || isset($wow_theme['wow-theme-footer-row-spacing']['padding-bottom']) && $wow_theme['wow-theme-footer-row-spacing']['padding-bottom'] != '' || isset($wow_theme['wow-theme-footer-row-spacing']['padding-left']) && $wow_theme['wow-theme-footer-row-spacing']['padding-left'] != '' || isset($wow_theme['wow-theme-footer-row-spacing']['padding-right']) && $wow_theme['wow-theme-footer-row-spacing']['padding-right'] != '') {
		$build_footer_spacing = ' style="'.$build_footer_spacing_value.'"';
	}
}
$build_copyright_spacing = '';
if(isset($wow_theme['wow-theme-copyright-row-spacing'])) {
	$build_copyright_spacing_value = '';
	$copyright_value['copyright_row_unit'] = $wow_theme['wow-theme-copyright-row-spacing']['unit'];
	if(isset($wow_theme['wow-theme-copyright-row-spacing']['padding-top']) && $wow_theme['wow-theme-copyright-row-spacing']['padding-top'] != '') {
		$build_copyright_spacing_value .= 'padding-top:'.$wow_theme['wow-theme-copyright-row-spacing']['padding-top'].';';
	}
	if(isset($wow_theme['wow-theme-copyright-row-spacing']['padding-bottom']) && $wow_theme['wow-theme-copyright-row-spacing']['padding-bottom'] != '') {
		$build_copyright_spacing_value .= 'padding-bottom:'.$wow_theme['wow-theme-copyright-row-spacing']['padding-bottom'].';';
	}
	if(isset($wow_theme['wow-theme-copyright-row-spacing']['padding-left']) && $wow_theme['wow-theme-copyright-row-spacing']['padding-left'] != '') {
		$build_copyright_spacing_value .= 'padding-left:'.$wow_theme['wow-theme-copyright-row-spacing']['padding-left'].';';
	}
	if(isset($wow_theme['wow-theme-copyright-row-spacing']['padding-right']) && $wow_theme['wow-theme-copyright-row-spacing']['padding-right'] != '') {
		$build_copyright_spacing_value .= 'padding-right:'.$wow_theme['wow-theme-copyright-row-spacing']['padding-right'].';';
	}
	if(isset($wow_theme['wow-theme-copyright-row-spacing']['padding-top']) && $wow_theme['wow-theme-copyright-row-spacing']['padding-top'] != '' || isset($wow_theme['wow-theme-copyright-row-spacing']['padding-bottom']) && $wow_theme['wow-theme-copyright-row-spacing']['padding-bottom'] != '' || isset($wow_theme['wow-theme-copyright-row-spacing']['padding-left']) && $wow_theme['wow-theme-copyright-row-spacing']['padding-left'] != '' || isset($wow_theme['wow-theme-copyright-row-spacing']['padding-right']) && $wow_theme['wow-theme-copyright-row-spacing']['padding-right'] != '') {
		$build_copyright_spacing = ' style="'.$build_copyright_spacing_value.'"';
	}
}
?>

<!-- LIFT FOOTER  -->
<footer id="footer" class="footer lift-footer">
	<?php if(is_active_sidebar('footer-sidebar-1') && (isset($footer_enable) && $footer_enable === '1')) {?>
		<div class="footer-wrapper"<?= isset($footer_row) && $footer_row === '1' ? $build_footer_spacing : ''?>>
			<div class="container<?= isset($footer_style) && $footer_style === '1' ? '-fluid': ''?>">
				<div class="row<?= isset($footer_gutters) && $footer_gutters !== '-1' ? ' gx-'.$footer_gutters : ''?>">
					<?php
						for ($i=1; $i <= $footer_col ; $i++) { 
					?>
						<?php if(is_active_sidebar( 'footer-sidebar-'.$i )) {?>
							<div class="col-12 <?=$wow_theme['wow-theme-footer-columns-'.$i]?>"><?php dynamic_sidebar( 'footer-sidebar-'.$i ); ?></div>
						<?php } ?>
					<?php
						}
					?>
				</div>
			</div>
		</div>
	<?php } ?>
	<?php if(is_active_sidebar('copyright-sidebar-1') && (isset($copyright_enable) && $copyright_enable === '1')) {?>
		<div id="copyright" class="copyright lift-copyright">
			<div class="copyright-wrapper"<?= isset($copyright_row) && $copyright_row === '1' ? $build_copyright_spacing : ''?>>
				<div class="container<?= isset($copyright_style) && $copyright_style === '1' ? '-fluid': ''?>">
					<div class="row<?= isset($copyright_gutters) && $copyright_gutters !== '-1' ? ' gx-'.$copyright_gutters : ''?>">
						<?php
							for ($i=1; $i <= $footer_col ; $i++) { 
						?>
							<?php if(is_active_sidebar( 'copyright-sidebar-'.$i )) {?>
								<div class="col-12 <?=$wow_theme['wow-theme-copyright-columns-'.$i]?>"><?php dynamic_sidebar( 'copyright-sidebar-'.$i ); ?></div>
							<?php } ?>
						<?php
							}
						?>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
</footer>

<!-- LIFT BACK TO TOP -->
<?php if($global_backtotop) {?>
	<?php
		$displaybtt = 'position-fixed';
		if($global_backtotop_smallpc) {
			$displaybtt .= ' d-lg-flex';
			if($global_backtotop_tablet) {
				$displaybtt .= ' d-md-flex';
				if($global_backtotop_phalet) {
					$displaybtt .= ' d-sm-flex';
					if($global_backtotop_mobile) {
						$displaybtt .= ' d-flex';
					}
				}
			}
		}
		$displaybtt .= ' d-xl-flex';
	?>
	<a href="#back-to-top" id="backtotop" class="<?=$displaybtt;?>"><i class="fa fa-angle-up"></i></a>
<?php } ?>
