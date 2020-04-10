<?php
/**
 * The Template for displaying all single posts
 *
 * @package author KanG
 * @subpackage KanG
 * @since KanG 1.0
 */

get_header(); 
?>
	<div id="primary" class="site-content k-has-sidebar">
		<div class="content-right">
			<h1 class="kang-title"><?php the_title();?></h1>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php /* Count post views */ 
				kang_setPostViews($post->ID);
			?>	
			<div class="content-layout">
				<div class="single-content">
					<?php the_content(); ?>
					<?php /* List tags of posts */ echo get_the_tag_list('<p class="single-tags"><i class="fa fa-tags"></i> Từ khóa: &nbsp;',' ','</p>'); ?>
				</div>
				
				<h2 class="kang-title margin-top"><?php _e('Bình luận','kang'); ?></h2>
				<div class="single-comments">
					<div class="fb-comments" data-href="<?php the_permalink();?>" data-width="100%" data-numposts="5" data-colorscheme="light"></div>
				</div>
				
				<?php endwhile; wp_reset_query(); // end of the loop. ?>
				
				<?php 
					$relateds = get_the_terms(get_the_ID(), 'category');
					$catID = array();
					if(!empty($relateds)){
						foreach ($relateds as $related){
							$catID[] = $related->term_id;
						}
					}
					
					/* Get related posts */
					$args = array(
									'post_type'			=> 'post',
									'posts_per_page'	=> 7,
									'tax_query' => array(
										array(
											'taxonomy' => 'category',
											'field'    => 'id',
											'terms'    => $catID,
										),
									),
									'post__not_in'		=> array($postID)
								);
					$rela = new WP_Query($args);
					if($rela->have_posts()){
				?>
						<div class="related-posts-single">
							<h2 class="kang-title margin-top"><?php _e('Các bài viết liên quan', 'kang'); ?></h2>
							<ul class="all-posts">
								<?php 
								while($rela->have_posts()): $rela->the_post();
								include( locate_template( 'content-baiviet.php' ) );
								endwhile; wp_reset_postdata();
								?>
							</ul>
						</div>
				<?php
					}
				?>
			</div>
		</div>
		<div class="content-left">
			<?php get_sidebar(); ?>
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>