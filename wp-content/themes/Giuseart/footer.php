<?php global $smof_data, $post;
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package author KanG
 * @subpackage KanG
 * @since KanG 1.0
 */
 /* Get data footer in theme options */
 
?>

		</div><!-- #main .wrapper -->
	</div><!-- #page -->
	<footer id="colophon" role="contentinfo">
<div class="widget-top col-<?php echo $top_widget; ?>">
				<?php dynamic_sidebar('footer-top'); ?>
			</div>
		<div class="container footer-top">
			<?php 
			$sidebar = wp_get_sidebars_widgets();
			$top_widget = count($sidebar['footer-top']);
			if(!empty($top_widget)){
			?>
			
			<?php
			}
			?>
			<?php 
			$bottom_widget = count($sidebar['footer-bottom']);
			if(!empty($bottom_widget)){
			?>
			<div class="widget-bottom col-<?php echo $bottom_widget; ?>">
				<?php dynamic_sidebar('footer-bottom'); ?>
			</div>
			<?php
			}
			?>
		</div>
	</footer><!-- #colophon -->
	
	<div class="copyright">
		<div class="container">
			
			<div class="footer-copyright"><?php echo $smof_data['footer-copyright'];?></div>
		</div>
	</div>
	
	<?php $post_type = get_post_type(); ?>
	<?php if(is_single() && $post_type == 'post'): ?>
		<?php 
		/* Get data of current product */
		$postID = get_the_ID(); 
		$title = single_post_title('', false);
		$abovePopup = $smof_data['above-popup'];
		$bellowPopup = $smof_data['bellow-popup'];
		$success = $smof_data['message-success'];
		$failed = $smof_data['message-failed'];
 		$loai_may = get_field('loai_may');
		$ram = get_field('ram');
		$camera_truoc = get_field('camera_truoc');
		$man_hinh = get_field('man_hinh');
		$kich_thuoc_man_hinh = get_field('kich_thuoc_man_hinh');
		$vi_xu_li = get_field('vi_xu_li');
		$bo_nho_trong = get_field('bo_nho_trong');
		$he_dieu_hanh = get_field('he_dieu_hanh');
		$dung_luong_pin = get_field('dung_luong_pin');
		$camera_sau = get_field('camera_sau');
		$ket_noi_sim = get_field('ket_noi_sim');
		if ( has_post_thumbnail( $postID ) ) {
			$image_array = wp_get_attachment_image_src( get_post_thumbnail_id( $postID ), 'thumb_400x400' );
			$imageURL = $image_array[0];
		} else {
			$imageURL = get_template_directory_uri() . '/images/thumb-400x400.jpg';
		}
		?>
		<div class="kang-form-order" id="order-form">
			<div class="kajaxloading"><div class="wandering-cubes"><div class="cube1"></div><div class="cube2"></div></div></div>
			<h2 class="title-form"><?php _e('Thông tin đặt hàng','kang'); ?><a class="close-order"><i class="fa fa-close"></i></a></h2>
			<div class="content-form">
				<div class="form-left">
					<div class="head-form">
						<div class="thumb">
							<img src="<?php echo $imageURL; ?>" alt="<?php _e('Thumbnail','kang'); ?>" />
						</div>
						<div class="title">
							<h3><?php echo $title; ?></h3>
						</div>
					</div>
					<div class="client-fill" action="">
						<p class="first">
							<select name="gioi-tinh" id="gioi-tinh">
                                                                <option value="Chị"><?php _e('Chị','kang'); ?></option>
								<option value="Anh"><?php _e('Anh','kang'); ?></option>
								
							</select>
							<input type="text" name="your-name" id="your-name" placeholder="<?php _e('*Họ tên của bạn','kang'); ?>" />
						</p>
						<p><input type="text" name="your-phone" id="your-phone" placeholder="<?php _e('*Số điện thoại','kang'); ?>" /></p>


                                             <p><input type="text" name="your-email" id="your-email" placeholder="<?php _e('*Email của bạn','kang'); ?>" /></p>

			                         
						<p><textarea name="your-address" id="your-address" placeholder="<?php _e('Địa chỉ giao hàng/ Ghi chú nếu có','kang'); ?>"></textarea></p>
						<a class="btn-order-popup" data-name="<?php echo $title; ?>" data-url="<?php echo THEME_URL; ?>inc/order.php"><?php _e('Đặt hàng','kang'); ?></a>
						<p class="message"></p>
					</div>
				</div>
				<div class="form-right">
					<div class="note-top"><?php echo do_shortcode($abovePopup); ?></div>
					<div class="note-bottom">
						<?php echo do_shortcode($bellowPopup); ?>
					</div>
				</div>
			</div>
		</div>
		
		<div class="order-success">
			<h2 class="title-form"><?php _e('Đặt hàng thành công!','kang'); ?><a class="close-order"><i class="fa fa-close"></i></a></h2>
			<div class="content-success"><?php echo $success; ?><i class="fa fa-check-circle-o"></i></div>
		</div>
		
		<div class="order-failed">
			<h2 class="title-form"><?php _e('Đặt hàng thất bại!','kang'); ?><a class="close-order"><i class="fa fa-close"></i></a></h2>
			<div class="content-success"><?php echo $failed; ?><i class="fa fa-warning"></i></div>
		</div>
		

	<?php endif; //End check if is single product ?>
	
	<?php if(empty($banner_right)): ?>
	<a class="k-gototop" href="#"><i class="fa fa-angle-up"></i></a><!--.k-gototop-->
	<?php endif; ?>


<?php wp_footer(); ?>
<script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>
<script src="http://shopconggiao.com/wp-content/themes/kang/bootstrap/bootstrap.min.js"></script>
<script>
$(document).ready(function () {
    //Hover Menu in Header
    jQuery('ul.nav li.dropdown').hover(function () {
        jQuery(this).find('.mega-dropdown-menu').stop(true, true).delay(200).fadeIn(200);
        jQuery('.darkness').stop(true, true).fadeIn();
    }, function () {
        jQuery(this).find('.mega-dropdown-menu').stop(true, true).delay(200).fadeOut(200);
         jQuery('.darkness').stop(true, true).delay(200).fadeOut();
    });
});
    	
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'vi'}
</script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.pack.js"></script>


</body>

</html>