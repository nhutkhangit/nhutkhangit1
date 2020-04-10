<?php global $smof_data;
/**
 * The template used for displaying content of product. use get_template_part
 *
 * @package author KanG
 * @subpackage KanG
 * @since KanG 1.0
 */
?>
	<?php
	/* Get options of posts */
	$price = get_field('product_price');
	$old_price = get_field('kproduct_oldprice');
        $orders_old_1 = '&nbsp;';
        $orders_old = get_field('tra_gop');
	if(!isset($i)) { $i = 1; } else { $i = $i; }
	
	$delay = '';
	if( $i%4 == 0 ){
		$delay = ' data-delay="150"';
	} elseif( $i%4 == 2 ){
		$delay = ' data-delay="150"';
	} elseif( $i%4 == 3 ){
		$delay = ' data-delay="150"';
	} else {
		$delay = ' data-delay="150"';
	}
	
	?>
		<div class="k-product come-on"<?php echo $delay; ?>>

			<a class="thumbnail" href="<?php the_permalink(); ?>">
				<?php 
				if( has_post_thumbnail() ) {
					the_post_thumbnail('thumb_400x400');
				} else {
					echo '<img src="'.THEME_URL.'/images/thumb-200x200.jpg" alt="'.get_the_title().'" />';
				}
				?>
                               <?php if($orders_old){ ?>
                                        <div class="order_old_1">
						                     <span> <?php echo $orders_old_1; ?></span>
					                     </div>
										 
                                        <?php } ?>

                                     <?php if(isset($price) && !empty($price) && isset($old_price) && $old_price > $price){ ?>                                                                   <div class="sale-off">
                                       <span>
 <?php echo  '-' .(100  - ceil(($price/ $old_price) * 100)) . '%'; ?></span>
                                      </div> <?php } ?>
                                
			

					</a>
 

			<h3 class="title-product"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php if( isset($price) && !empty($price) ){ ?>
			<p class="price"><?php echo number_format($price, 0, "", "."); ?><span class="cur"> VNĐ</span></p>
			<?php } else { ?>
			<p class="price no-price"><?php _e('Liên hệ','kang'); ?></p>
			<?php } ?>
		</div>

	<?php $i++; ?>
