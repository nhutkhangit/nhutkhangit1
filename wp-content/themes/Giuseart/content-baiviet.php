<?php
/**
 * The template used for displaying content of post. use get_template_part
 *
 * @package author KanG
 * @subpackage KanG
 * @since KanG 1.0
 */
 
if(!isset($i)) { $i = 1; } else { $i = $i; }
	
$delay = '';
if( $i%3 == 0 ){
	$delay = ' data-delay="300"';
} elseif( $i%3 == 2 ){
	$delay = ' data-delay="150"';
} else {
	$delay = ' data-delay="0"';
}
?>
	<li class="kang-post come-on"<?php echo $delay; ?>>
		<div class="thumbnail">
			<a href="<?php the_permalink();?>">
				<?php if(has_post_thumbnail()) { the_post_thumbnail('thumb_300x240'); } else { echo '<img src="'.THEME_URL.'images/thumb-300x240.jpg" alt="'.get_the_title().'">'; }?>
			</a>
		</div>
		<div class="detail-post">
			<h2 class="title-post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="content-excerpt">
				<?php the_excerpt(); ?>
			</div>
			<a class="read-more" href="<?php the_permalink();?>"><?php _e('Xem chi tiết','kang'); ?><span>&raquo;</span></a>
		</div>
	</li>
<?php $i++; ?>