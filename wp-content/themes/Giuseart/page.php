<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package author KanG
 * @subpackage KanG
 * @since KanG 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content k-has-sidebar">
		<div class="content-right">
			<h1 class="kang-title"><?php the_title();?></h1>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php /* Count post views */ 
				kang_setPostViews($post->ID);
			?>	
			<div class="single-content">
				<?php the_content(); ?>
			</div>
			<?php endwhile; wp_reset_query(); ?>
		</div>
		<div class="content-left">
			<?php get_sidebar(); ?>
		</div>
	</div><!-- #primary -->
	
<?php get_footer(); ?>