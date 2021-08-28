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
<html <?php language_attributes(); ?> <?php wow_the_html_classes(); ?> id="back-to-top">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- WOW WRAPPER -->
<div id="page" class="site wow-wrapper">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-wow-theme' ); ?></a>
	<?php get_template_part( 'template-parts/header/site-header' ); ?>

	<!-- WOW CONTENT -->
	<main id="content" class="site-content wow-content">
		<div class="content-wrapper">
			<div id="primary" class="content-area">
				<!-- WOW MAIN -->
				<div id="main" class="site-main wow-main" role="main">
				<div id="fb-root"></div>
