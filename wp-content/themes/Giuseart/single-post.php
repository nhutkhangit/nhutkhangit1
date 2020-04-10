<?php
/**
 * The Template for displaying all single posts
 *
 * @package author KanG
 * @subpackage KanG
 * @since KanG 1.0
 */
wpb_set_post_views(get_the_ID());
get_header();

?>
	<div id="primary" class="site-content k-has-sidebar">
		<div class="content-right">
			<?php while ( have_posts() ) : the_post(); ?>
			<?php
			$gallerys = get_field('kproduct_gallery');
			$price = get_field('product_price');
                        $sale = get_field('sale');
                        $code = get_field('kproduct_code');
                        $status = get_field('kproduct_status');
	 		$old_price = get_field('kproduct_oldprice');
			$saving = $old_price-$price;
			$bao_hanh = get_field('bao_hanh');
			$desc = get_field('kproduct_desc');
			$orders_old = get_field('tra_gop');
			$desc = str_replace('<p>&nbsp;</p>','<p style="line-height: 10px;">&nbsp;</p>',$desc);
			?>
			<div class="single-short">
				<div class="left-short">
                                       
					<?php /* Thumbnail */
					if(!empty($gallerys)){
						$thumb_left = wp_get_attachment_image_src( $gallerys[0]['ID'], 'thumb_400x400', false );
						$thumb_full = wp_get_attachment_image_src( $gallerys[0]['ID'], 'full', false );
						echo '<div class="kang-popup-gallery come-on large-preview" id="ksingle-lager-view" data-delay="0">


                                      

									<span class="message-popup"><i class="fa fa-search"></i>'.__("Click để xem ảnh lớn hơn","kang").'</span>
									<a href='.$thumb_full[0].' class ="large-view">
										<img src="'.$thumb_left[0].'" alt="'.get_the_title().'" />
									</a>
							  </div>';
						echo '<div class="list-view-images">';
						$j = 0;
						foreach ( $gallerys as $gallery ) {
							if($j < 4){
								$image_link = wp_get_attachment_image_src( $gallery['ID'], 'thumb_400x400', false );
								$image_linkurl = $image_link[0];
								$image_full = wp_get_attachment_image_src( $gallery['ID'], 'full', false );
								$image_fullurl = $image_full[0];
						?>						
								<a data-href="<?php echo $image_fullurl; ?>"><img class="tiny-image" src="<?php echo $image_linkurl; ?>" alt = "<?php the_title(); ?>" /></a>
						<?php
							}
							$j++;
						}
						echo '</div>';
					} elseif(has_post_thumbnail()){
						$url_full = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
						echo '<div class="kang-popup-gallery come-on single-thumb" data-delay="0" id="ksingle-lager-view"><span class="message-popup"><i class="fa fa-search"></i>'.__("Click để xem ảnh lớn hơn","kang").'</span><a href="'.$url_full.'">'.get_the_post_thumbnail($post->ID, 'thumb_400x400').'</a></div>';
					} else {
						echo '<div class="kang-popup-gallery come-on single-thumb" data-delay="0" id="ksingle-lager-view"><span class="message-popup"><i class="fa fa-search"></i>'.__("Click để xem ảnh lớn hơn","kang").'</span><a href="'.get_template_directory_uri().'/images/thumb-400x400.jpg"><img src="'.get_template_directory_uri().'/images/thumb-400x400.jpg" alt="'.get_the_title().'" /></a></div>';
					}
					?>
                                       

				</div>
				<div class="come-on right-short" data-delay="100">
					<h1 class="single-title detail-title"><?php the_title(); ?></h1>

                                    <div class="suk">

                                        <?php if($code){ ?>
                                           <div class="kcode">
                                              Mã sản phẩm : <span><?php echo $code; ?></span>
                                              </div>
                                          <?php } ?>
                                        
                                        <?php if($status){ ?>
                                        <div class="status">
						                     Tình Trạng :<span> <?php echo $status; ?></span>
					                     </div>
										 
                                        <?php } ?>
	
					</div>

					
					<?php if(isset($price) && !empty($price)){ ?>
					<p class="price"><?php _e('<span>Giá KM:</span> ','kang'); echo number_format($price, 0, "", ".").'<span class="cur cur-layout2"> VNĐ</span>'; ?></p>
					<?php } else { ?>
					<p class="price"><?php _e('<span>Giá:</span> ','kang'); echo '<span class="no-price">'.__("Liên Hệ","kang").'</span>'; ?></p>
					<?php } ?>
					
					
					
					<?php if(isset($old_price) && !empty($old_price) && ( $old_price > $price )): ?>
					<p class="old_price"><del><?php _e('Giá cũ: ','kang'); echo number_format($old_price, 0, "",".").'<span class="cur cur-layout2"> VNĐ</span>'; ?></del></p>
					<?php endif; ?>
					<div class = "sale-bh" >
                                       <?php if($orders_old){ ?>
                                        <div class="order_old">
						                     Trả Góp :<span> <?php echo $orders_old; ?></span>
					                     </div>
										 
                                        <?php } ?>
                                        <?php if($bao_hanh){ ?>
                                        <div class="bao-hanh">
						                     Bảo Hành :<span> <?php echo $bao_hanh; ?></span>
					                     </div>
										 
                                        <?php } ?>
<div class="dem_luot_mua">Lượt mua: <span> <?php echo wpb_get_post_views(get_the_ID()); ?></div></span>
</div>
					
<div class="ordernow">
<a class="order-this-now" data-name="<?php the_title(); ?>"><?php _e('<span class="p1">ĐẶT MUA NGAY</span><span class="p2">(Giao hàng toàn quốc)</span>','kang'); ?></a>
<a class="support" href="http://shopconggiao.com/bang-tinh-lai-suat-tra-gop-dien-thoai-di-dong/"> 
                    <span class="p1">MUA TRẢ GÓP</span>
                    <span class="p2">(Tính lãi suất trả góp)</span></a>
</div>
					<div class="short-excerpt">
						<?php echo $desc; ?>
					</div>
<div class="paymethod">
<span>Thanh toán: </span>
 <div class="paymethod-list">
<div class="cod"><a rel="nofollow" href="http://shopconggiao.com/huong-dan-thanh-toan-cod-khi-gui-va-nhan-hang/" target="blank">&nbsp;</a></div>
<div class="atm"><a rel="nofollow" href="http://shopconggiao.com/huong-dan-chuyen-khoan-ngan-hang-khi-dat-hang/" target="blank">&nbsp;</a></div>
<div class="tratien">hoặc <a rel="nofollow" href="Tel:0972939830">Gọi ngay</a></div>
  </div>            </div>
<div class="social-share">
<div class="share-face">
<div class="fb-like" data-href="https://www.facebook.com/giuseartdotcom/" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div></div>
<div class="share-google">
<div class="g-plusone" data-size="medium" data-annotation="none" data-href="https://plus.google.com/u/0/"></div>
</div>
</div>
</div>	
			</div>
<div class="come-on right-short" data-delay="100">
			<h2 class="kang-title margin-top"><?php _e('Thông tin chi tiết','kang'); ?></h2>
			<?php /* Count post views */ 
				kang_setPostViews($post->ID);
			?>	

						<div class="single-content">
				<?php the_content(); ?>
<p style="text-align: center;">
<a class="order-this-now" data-name="<?php the_title(); ?>"><?php _e('<span class="p1">MUA NGAY</span><span class="p2">Tùy chọn thời gian giao hàng</span>','kang'); ?></a></p>
<div class="social-share">
<div class="share-face">
<div class="fb-like" data-href="https://www.facebook.com/giuseartdotcom/" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div></div>
<div class="share-google">
<div class="g-plusone" data-size="medium" data-annotation="none" data-href="https://plus.google.com/communities/104304015412463759496"></div>
</div>
</div>
				<?php /* List tags of posts */ echo get_the_tag_list('<p class="single-tags"><i class="fa fa-tags"></i> Từ khóa: &nbsp;',' ','</p>'); ?>
			</div>
			
			<h2 class="kang-title margin-top"><?php _e('Bình luận','kang'); ?></h2>
			<div class="single-comments">
				<div class="fb-comments" data-href="<?php the_permalink();?>" data-width="100%" data-numposts="5" data-colorscheme="light"></div>
			</div>
			</div>
			<?php endwhile; wp_reset_query(); // end of the loop. ?>
			
			<?php 
				$relateds = get_the_terms(get_the_ID(), 'category');
				$postID = get_the_ID();
				$catID = array();
				if(!empty($relateds)){
					foreach ($relateds as $related){
						$catID[] = $related->term_id;
					}
				}
				
				/* Get related posts */
				$args = array(
								'post_type'			=> 'post',
								'posts_per_page'	=> 16,
								'post__not_in'		=> array($postID),
								'tax_query' => array(
									array(
										'taxonomy' => 'category',
										'field'    => 'id',
										'terms'    => $catID,
									),
								),
							);
				$rela = new WP_Query($args);
				if($rela->have_posts()){
			?>
					<div class="related-posts-single">
						<h2 class="kang-title margin-top"><?php _e('Sản Phẩm Khác', 'kang'); ?></h2>
						<ul class="all-products">
							<?php 
							while($rela->have_posts()): $rela->the_post();
							include( locate_template( 'content-product.php' ) );
							endwhile; wp_reset_postdata();
							?>
						</ul>
					</div>
			<?php
				}
			?>
		
		</div>

		<div class="content-left">
<div class="come-on right-short" data-delay="100">
			<?php get_sidebar(); ?>
		</div>
	</div>
	</div><!-- #primary -->

<?php get_footer(); ?>