<?php global $smof_data;
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 *
 * @package author KanG
 * @subpackage KanG
 * @since KanG 1.0
 */

get_header();
?>
    <div id="primary" class="site-content">
<div class="content-left">
<div class="come-on right-short" data-delay="100">
			<?php get_sidebar(); ?>
		</div>
</div>
        <div class="content-right">
              <div class="main-banner">
<?php
$slider = $smof_data['gallery-slider-home'];
if(!empty($slider)){
    ?>
<div class="flexslider home-flexslider">
        <ul class="slides">
            <?php foreach($slider as $slide) {
                $image = $slide['url'];
                $link = $slide['link'];
                if(!empty($link) && isset($link)){ $open_slider = '<a href="'.esc_url(trim($link)).'">'; $close_slider = '</a>'; } else { $open_slider = ''; $close_slider = ''; }
                ?>
                <li><?php echo $open_slider; ?><img src="<?php echo $image; ?>" alt="<?php _e('Image home slider','kang'); ?>" /><?php echo $close_slider; ?></li>
            <?php } ?>
        </ul>
    </div>
<?php } ?>


    
</div>
            <?php
            /* Get data product homepage in theme options */
            $product_cat = $smof_data['product-cat-home'];
            $product_number = $smof_data['product-cat-numbers'];
            if(empty($product_number)): $product_number = '4'; endif;

            /* Check term to show */
            if(empty($product_cat)){
                $allterms = get_terms('category', 'orderby=id');
                if( ! empty( $allterms ) && ! is_wp_error( $allterms ) ){
                    foreach( $allterms as $term )
                        $product_cat .= ','. $term->slug;
                    $product_cat = substr($product_cat, 1);
                }
            }

            $product_cat = str_replace(' ', '', $product_cat);
            $product_cat = explode(',', $product_cat);

            if(!empty($product_cat)):
                foreach( $product_cat as $product ){
                    $args = array(
                        'post_type'	=>	'post',
                        'posts_per_page'	=>	$product_number,
                        'tax_query'	=> array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms'    => $product,
                            ),
                        ),
                    );
                    $query = new WP_Query($args);
                    if($query->have_posts()):

                        $product_oj = get_category_by_slug($product);
                        $product_id = $product_oj->term_id;
                        echo '<div class="feature-products">';
                        echo '<h2 class="come-on" data-delay="0"><i class="fa fa-mobile"></i>
<div class="tile-cat">
<a class="cat-name" href="'.get_category_link($product_id).'">'.$product_oj->name.'</a>
</div>

<a class="viewall" href="'.get_category_link($product_id).'">'.__("Xem tất cả ","kang").'<span>&raquo;</span></a></h2>';
                        
                        echo '<div class="all-products">';
						while($query->have_posts()): $query->the_post();
                            include( locate_template( 'content-product.php' ) );
                        endwhile; wp_reset_postdata();
						echo '</div>';
						echo '</div>';
				                endif;
                }
            endif;
            ?><br>
<img src="http://shopconggiao.com/wp-content/uploads/2017/04/banner2.jpg"/>
        </div><!-- .content-right -->
    </div><!-- #primary -->

<?php get_footer(); ?>