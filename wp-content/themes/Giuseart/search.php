<?php
/**
 * The template for displaying Search Results pages
 *
 * @package author KanG
 * @subpackage KanG
 * @since KanG 1.0
 */

get_header();
?>

	<div id="primary" class="site-content">
		<div class="content-right">
			<h1 class="kang-title"><?php printf( __( 'Kết quả tìm kiếm sản phẩm với từ khóa: "%s"', 'kang' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
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
			<p class="no-result"><?php _e('Không có sản phẩm nào chứa từ khóa mà bạn tìm kiếm.','kang'); ?></p>
			<?php } ?>
		</div>
		<div class="content-left">
			<?php get_sidebar(); ?>
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>