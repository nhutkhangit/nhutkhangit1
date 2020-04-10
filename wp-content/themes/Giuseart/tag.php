<?php
/**
 * The template for displaying Tag pages
 *
 * Used to display archive-type pages for posts in a tag.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package author KanG
 * @subpackage KanG
 * @since KanG 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="content-right">
			<h1 class="kang-title"><?php printf( __( 'Các bài viết với từ khóa: "%s"', 'kang' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></h1>
			<?php if(have_posts()){?>
			<div class="all-products">
				<?php 
				while(have_posts()): the_post();
				include( locate_template( 'content-product.php' ) );
				endwhile; wp_reset_postdata();
				?>
			</div>
			
			<?php /* Page navigation */ echo kang_get_pagination(); ?>
			
			<?php } else { ?>
			<p class="no-result"><?php _e('Không có bài viết nào chứa từ khóa này.','kang'); ?></p>
			<?php } ?>
		</div>
		<div class="content-left">
			<?php get_sidebar(); ?>
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>