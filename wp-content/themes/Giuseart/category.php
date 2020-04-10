<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package author KanG
 * @subpackage KanG
 * @since KanG 1.0
 */

get_header();
?>

	<div id="primary" class="site-content">
		<div class="content-right">
			<h1 class="kang-title"><?php single_cat_title(); ?></h1>
			<?php if ( category_description() ) : /* Show an optional category description */ ?>
			<div class="k-cat-description"><?php echo category_description(); ?></div>
			<?php endif; ?>
			
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
			<p class="no-result"><?php _e('Hiện tại chưa có sản phẩm nào được cập nhật ở danh mục này.','kang'); ?></p>
			<?php } ?>
		</div>
		<div class="content-left">
			<?php get_sidebar(); ?>
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>