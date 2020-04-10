<?php
/**
 * This template will display all news of website
 * @author Kang
 * @package Wordpress
*/
get_header(); 

?>

	<div id="primary" class="site-content">
		<div class="content-right">
			<h1 class="kang-title"><?php _e('Các bài viết với từ khóa: "','kang'); single_cat_title(); echo '"'; ?></h1>
			
			<?php if(have_posts()){?>
			<ul class="all-posts">
				<?php 
				while(have_posts()): the_post();
				include( locate_template( 'content-baiviet.php' ) );
				endwhile; wp_reset_postdata();
				?>
			</ul>
			
			<?php /* Page navigation */ echo kang_get_pagination(); ?>
			
			<?php } else { ?>
			<p class="no-result"><?php _e('Không có bài viết nào chứa từ khóa mà bạn truy cập.','kang'); ?></p>
			<?php } ?>
		</div>
		<div class="content-left">
			<?php get_sidebar(); ?>
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>