<?php global $smof_data;
/**
 * Template Name: Liên hệ
 * This template will use display in contact us page
 * @package Wordpress
 * @author Kang
*/
get_header(); ?>

	<div id="primary" class="site-content">
		<div class="content-right">
			<h1 class="kang-title"><?php the_title();?></h1>
			<?php 
			/* Query */
			//$contact = new WP_Query('page_id=195');
			while ( have_posts() ) : the_post(); ?>
			
				<div class="single-content align-center">
					<?php the_content(); ?>
					
					<h2 class="contact-title margin-top"><span><?php _e('Mọi thông tin/thắc mắc quý khách vui lòng để lại dưới đây','kang'); ?></span></h2>
					<form class="kcontact-us" method="POST" action="">
						<div class="kcontactloading"><div class="wandering-cubes"><div class="cube1"></div><div class="cube2"></div></div></div>
						<div class="contact-line">
							<label><?php _e('Họ và tên','kang'); ?><span>(*):</span></label>
							<div class="right"><input type="text" name="name" class="ct-name" /></div>
						</div>
						<div class="contact-line">
							<label><?php _e('Địa chỉ','kang'); ?><span>(*):</span></label>
							<div class="right"><input type="text" name="address" class="ct-address" /></div>
						</div>
						<div class="contact-line">
							<label><?php _e('Điện thoại','kang'); ?><span>(*):</span></label>
							<div class="right"><input type="text" name="phone" class="ct-phone" /></div>
						</div>
						<div class="contact-line">
							<label><?php _e('Email','kang'); ?><span>(*):</span></label>
							<div class="right"><input type="email" name="email" class="ct-email" /></div>
						</div>
						<div class="contact-line">
							<label class="noline"><?php _e('Nội dung','kang'); ?><span>(*):</span></label>
							<div class="right"><textarea name="message" class="ct-message"></textarea></div>
						</div>
						<div class="contact-line no-margin">
							<label class="empty-none">&nbsp;</label>
							<div class="right">
								<a class="kct-sendmail" data-href="<?php echo THEME_URL.'inc/process.php';?>"><?php _e('Gửi đi','kang');?></a>
								<a class="kct-cancel"><?php _e('Hủy bỏ','kang');?></a>
							</div>
						</div>
						<div class="message-contact"></div>
					</form>
					
					<?php $map = trim($smof_data['address-shortcode']); 
					if(!empty($map)):
					?>
					<h2 class="contact-title margin-top"><span><?php _e('Tìm đường đến với chúng tôi','kang'); ?></span></h2>				
					<?php
					echo '<div class="k-contact-map">'.do_shortcode($map).'</div>';
					endif; 
					?>
					
				</div>
			<?php endwhile; wp_reset_query(); // end of the loop. ?>
		</div>
		<div class="content-left">
			<?php get_sidebar(); ?>
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>