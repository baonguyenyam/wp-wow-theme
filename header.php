<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WOW WordPress 
 * @subpackage Theme by Nguyen Pham
 * https://baonguyenyam.github.io
 * @since 2021
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php lift_the_html_classes(); ?> id="back-to-top">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- LIFT WRAPPER -->
<div id="page" class="site lift-wrapper">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-wow-theme' ); ?></a>
	<?php get_template_part( 'template-parts/header/site-header' ); ?>

	<!-- LIFT CONTENT -->
	<main id="content" class="site-content lift-content">
		<div class="content-wrapper">
			<div id="primary" class="content-area">
				<!-- LIFT MAIN -->
				<div id="main" class="site-main lift-main" role="main">
				<div id="fb-root"></div>
