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
$post_sidebar = $wow_theme['wow-theme-blog-style-sidebar'];
$post_sidebar_position = $wow_theme['wow-theme-blog-style-sidebar-position'];
$post_sidebar_content_columns = isset($wow_theme['wow-theme-blog-style-content-columns']) ? $wow_theme['wow-theme-blog-style-content-columns'] : 'col-xl-8 col-xxl-9';
$post_sidebar_columns = isset($wow_theme['wow-theme-blog-style-sidebar-columns']) ? $wow_theme['wow-theme-blog-style-sidebar-columns'] : 'col-xl-4 col-xxl-3';
$post_post_thumbnail = $wow_theme['wow-theme-blog-style-content-thumbnail'];
$post_post_nextprev = $wow_theme['wow-theme-blog-style-content-nextprev'];
$post_post_breadcrumb = $wow_theme['wow-theme-blog-style-breadcrumb'];
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header alignwide">
		<div class="content-wrapper">
			<div class="container<?= isset($layout_style) && $layout_style === '1' ? '-fluid': ''?>">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<?php 
				if(!isset($post_post_breadcrumb) || $post_post_breadcrumb === '0' || $post_post_breadcrumb == 0){
					wow_get_breadcrumb(); 
				}?>
			</div>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="content-wrapper">
			<div class="container<?= isset($layout_style) && $layout_style === '1' ? '-fluid': ''?>">
				<div class="row">
					<div class="blog-content <?=isset($post_sidebar) && $post_sidebar ==='1' ? 'col-12' : $post_sidebar_content_columns ?><?= isset($post_sidebar_position) && $post_sidebar_position === '1' ? ' order-xl-2': ' order-xl-1'?>">
					
					<?php if(!isset($post_post_thumbnail) || $post_post_thumbnail === '0' || $post_post_thumbnail == 0){?>
					<?php wow_post_thumbnail(); ?>
					<?php } ?>

					<?php
						the_content();

						wp_link_pages(
							array(
								'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'wp-wow-theme' ) . '">',
								'after'    => '</nav>',
								/* translators: %: Page number. */
								'pagelink' => esc_html__( 'Page %', 'wp-wow-theme' ),
							)
						);
						?>
						<footer class="entry-footer default-max-width">
							<?php wow_entry_meta_footer(); ?>
						</footer><!-- .entry-footer -->

						<?php if ( ! is_singular( 'attachment' ) ) : ?>
							<?php get_template_part( 'template-parts/post/author-bio' ); ?>
						<?php endif; ?>


						<?php
						
						if ( is_attachment() ) {
							// Parent post navigation.
							the_post_navigation(
								array(
									/* translators: %s: Parent post link. */
									'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'wp-wow-theme' ), '%title' ),
								)
							);
						}
					
						// If comments are open or there is at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
					
						if(!isset($post_post_nextprev) || $post_post_nextprev === '0' || $post_post_nextprev == 0){
							// Previous/next post navigation.
							$wow_theme_next = is_rtl() ? wow_get_icon_svg( 'ui', 'arrow_left' ) : wow_get_icon_svg( 'ui', 'arrow_right' );
							$wow_theme_prev = is_rtl() ? wow_get_icon_svg( 'ui', 'arrow_right' ) : wow_get_icon_svg( 'ui', 'arrow_left' );
						
							$wow_theme_next_label     = esc_html__( 'Next post', 'wp-wow-theme' );
							$wow_theme_previous_label = esc_html__( 'Previous post', 'wp-wow-theme' );
						
							the_post_navigation(
								array(
									'class'				 => 'wow-pagination',
									'type'				 => 'list',
									'next_text' => '<p class="meta-nav">' . $wow_theme_next_label . $wow_theme_next . '</p><p class="post-title">%title</p>',
									'prev_text' => '<p class="meta-nav">' . $wow_theme_prev . $wow_theme_previous_label . '</p><p class="post-title">%title</p>',
								)
							);
						}
						?>

					</div>
					<?php if(!isset($post_sidebar) || $post_sidebar === '0' || $post_sidebar == 0){?>
						<div class="sidebar-content <?=$post_sidebar_columns?><?= isset($post_sidebar_position) && $post_sidebar_position === '1' ? ' order-xl-1': ' order-xl-2'?>">
							<?php get_template_part( 'sidebar' );?>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
