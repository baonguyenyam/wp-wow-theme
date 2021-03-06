<?php
/**
 * Template part for displaying page content in page.php
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
$post_page_breadcrumb = $wow_theme['wow-theme-page-style-breadcrumb'];
$post_page_thumbnail = $wow_theme['wow-theme-page-style-content-thumbnail'];
$post_page_title = $wow_theme['wow-theme-page-style-content-title'];
// TODO: CHANGE HEADER BLOCK 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if ( ! is_front_page() ) : ?>
    <header class="entry-header alignwide">
        <div class="content-wrapper">
			<div class="container<?= isset($layout_style) && $layout_style === '1' ? '-fluid': ''?>">
                <?php
                if(isset($post_page_title) && ($post_page_title === '1' || $post_page_title == 1)){
                    get_template_part( 'template-parts/header/entry-header' );
                }
                ?>
                <?php 
                if(isset($post_page_thumbnail) && ($post_page_thumbnail === '1' || $post_page_thumbnail == 1)){
                    wow_post_thumbnail();
                }
                ?>
                <?php 
                if(isset($post_page_breadcrumb) && ($post_page_breadcrumb === '1' || $post_page_breadcrumb == 1)){
                    wow_get_breadcrumb(); 
                }?>
			</div>
		</div>
    </header><!-- .entry-header -->
    <?php endif; ?>

    <div class="entry-content">
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
    </div><!-- .entry-content -->

    <?php if ( get_edit_post_link() ) : ?>
    <footer class="entry-footer default-max-width">
        <div class="container<?= isset($layout_style) && $layout_style === '1' ? '-fluid': ''?>">
            <?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post. Only visible to screen readers. */
						esc_html__( 'Edit %s', 'wp-wow-theme' ),
						'<span class="screen-reader-text">' . get_the_title() . '</span>'
					),
					'<div class="edit-link admintoolbar">',
					'</div>'
				);
				?>
        </div>
    </footer><!-- .entry-footer -->
    <?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->