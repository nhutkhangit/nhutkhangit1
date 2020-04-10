<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, KanG already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
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
			<h1 class="kang-title">
			<?php
				if ( is_day() ) :
					printf( __( 'Bài viết lưu trữ ngày: %s', 'kang' ), '<span>' . get_the_date() . '</span>' );
				elseif ( is_month() ) :
					printf( __( 'Bài viết lưu trữ tháng: %s', 'kang' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'kang' ) ) . '</span>' );
				elseif ( is_year() ) :
					printf( __( 'Bài viết lưu trữ năm: %s', 'kang' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'kang' ) ) . '</span>' );
				else :
					_e( 'Bài viết lưu trữ', 'kang' );
				endif;
			?>
			</h1>
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
			<p class="no-result"><?php _e('Hiện tại không có bài viết nào được cập nhật ở danh mục này.','kang'); ?></p>
			<?php } ?>
		</div>
		<div class="content-left">
			<?php get_sidebar(); ?>
		</div>
	</div><!-- #primary -->
<?php get_footer(); ?>