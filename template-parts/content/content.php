<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WOW WordPress 
 * @subpackage Theme by Nguyen Pham
 * https://baonguyenyam.github.io
 * @since 2021
 */

global $wow_theme;
$layout_style = $wow_theme['wow-theme-layout-style'];
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( is_singular() ) : ?>
			<?php the_title( '<h1 class="entry-title default-max-width">', '</h1>' ); ?>
		<?php else : ?>
			<?php the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php endif; ?>

		<?php lift_post_thumbnail(); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="container<?= isset($layout_style) && $layout_style === '1' ? '-fluid': ''?>">
		<?php
		the_content(
			lift_continue_reading_text()
		);

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'wp-wow-theme' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'wp-wow-theme' ),
			)
		);

		?>
		</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer default-max-width">
		<div class="container<?= isset($layout_style) && $layout_style === '1' ? '-fluid': ''?>">
			<?php lift_entry_meta_footer(); ?>
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
