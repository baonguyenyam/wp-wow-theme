<?php
/**
 * Displays the site navigation.
 *
 * @package WOW WordPress 
 * @subpackage Theme by Nguyen Pham
 * https://baonguyenyam.github.io
 * @since 2021
 */

?>

<?php 

global $wow_theme;
$header_second_menu = $wow_theme['wow-theme-header-second'];


?>
<?php if(isset($header_second_menu) && $header_second_menu === '1') { ?>
<?php if ( has_nav_menu( 'secondary' ) ) : ?>
	  <?php
		wp_nav_menu(
			array(
				'theme_location'  => 'secondary',
				'menu_class'      => 'secondary-navigation menu-wrapper navbar-nav',
				'items_wrap'      => '<ul id="secondary-menu-list" class="%2$s">%3$s</ul>',
				'fallback_cb'     => false,
			)
		);
		?>
<?php endif; ?>
<?php  } ?>
