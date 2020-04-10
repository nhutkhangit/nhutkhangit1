<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package author KanG
 * @subpackage KanGs
 * @since KanG 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content k-has-sidebar">
		<div class="content-right">
			<h1 class="kang-title"><?php _e('Trang 404','kang');?></h1>
			<p class="no-result"><?php _e('Xin lỗi! Đường link bạn truy cập không tồn tại hoặc đã bị xóa','kang'); ?></p>
			<a href="<?php echo home_url(); ?>" class="goback-home"><?php _e('Quay về trang chủ &rarr;','kang'); ?></a>
		</div>
		<div class="content-left">
			<?php get_sidebar(); ?>
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>