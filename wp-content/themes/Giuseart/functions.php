<?php
/**
 * KanG functions and definitions
 *
 * @package author KanG
 * @subpackage KanG
 * @since KanG 1.0
 */

 /**
  * Define variable
  * @package kang
  * @author kang
 */
add_action( 'after_setup_theme', 'congit_setup' );
if ( ! function_exists( 'congit_setup' ) ):
    function congit_setup() {
        register_nav_menu( 'menu-top', __('Menu Top') );
		 register_nav_menu( 'menu-sidebar', __('Menu Sidebar') );
        register_nav_menu( 'menu-hotrokh', __('Menu hỗ trợ KH') );
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         */
        add_theme_support( 'post-thumbnails' );
}
endif;
 
define( 'HOME_URL', trailingslashit( home_url() ) );
define( 'THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'THEME_URL', trailingslashit( get_template_directory_uri() ) );
 
/**
 * KanG setup.
 *
 * @return void
 */
function kang_setup() {
	/*
	 * Makes KanG available for translation.
	 *
	 */
	load_theme_textdomain( 'kang', get_template_directory() . '/languages' );

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// This theme supports a variety of post formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'kang' ) );
	
	
	// Add image size
	add_image_size('thumb_200x200', 200, 200, true); // For product thumbnail
	add_image_size('thumb_400x400', 400, 400, true); //For single product
	add_image_size('thumb_300x240', 300, 240, true); // For thumbnail category
	

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'kang_setup' );


/**
 * Filter the page menu arguments.
 *
 * Makes our wp_nav_menu() fallback -- wp_page_menu() -- show a home link.
 *
 * @since KanG 1.0
 */
function kang_page_menu_args( $args ) {
	if ( ! isset( $args['show_home'] ) )
		$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'kang_page_menu_args' );

/**
 * Register sidebars.
 *
 * Registers our main widget area and the front page widget areas.
 *
 * @since KanG 1.0
 */
function kang_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'kang' ),
		'id' => 'sidebar-1',
		'description' => __( 'Hiển thị các thiết lập cho sider bên phải chính của website', 'kang' ),
		'before_widget' => '<aside id="%1$s" class="widget kmain-widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="kang-title"><span>',
		'after_title' => '</span></h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer top', 'kang' ),
		'id' => 'footer-top',
		'description' => __( 'Thiết lập các box widget ở footer top', 'kang' ),
		'before_widget' => '<div class="box-footer">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="footer-box-title"><span>',
		'after_title' => '</span></h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer bottom', 'kang' ),
		'id' => 'footer-bottom',
		'description' => __( 'Thiết lập các box widget ở footer bottom', 'kang' ),
		'before_widget' => '<div class="box-footer">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="footer-box-title"><span>',
		'after_title' => '</span></h3>',
	) );
}
add_action( 'widgets_init', 'kang_widgets_init' );


/**
 * Hook to change markup of search form
 * return $form
 */
function kang_html5_search_form( $form ) { 
     $form = '<form role="search" method="get" id="search-form-box" class="search-form" action="' . home_url( '/' ) . '" >
					<label class="screen-reader-text" for="s">' . __('',  'kang') . '</label>
					<input type="search" value="' . get_search_query() . '" name="s" id="s" placeholder="Tìm kiếm sản phẩm..." />
					<input type="hidden" name="post_type" value="post">
					<input type="submit" id="searchsubmit" value="'. esc_attr__('Tìm kiếm', 'kang') .'" />
				</form>';
     return $form;
}

add_filter( 'get_search_form', 'kang_html5_search_form' );

/* Hide advanced custom field */
//add_filter('acf/settings/show_admin', '__return_false');

/* Fillter empty line in wordpress */
function kang_strip_empty_lines($content) {
    $content = str_replace('<p>&nbsp;</p>','<p style="line-height: 5px;">&nbsp;</p>',$content);
    return $content;
}
add_filter ('the_content', 'kang_strip_empty_lines');

/**
 * Include xxxx
 *
 * @since KanG 1.0
 */
include_once('admin/index.php');

/**
 * Enqueue scripts and styles for front-end.
 *
 * @since KanG 1.0
 */
function kang_scripts_styles() {
	global $wp_styles;
	
	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	
	// FontAwesome
	//wp_enqueue_style( 'fontawesome', THEME_URL . '/css/font-awesome.min.css' );

	// Magnific Popup
	//wp_enqueue_style( 'magnific-popup', THEME_URL . '/css/magnific-popup.css' );

	// Flexslider
	//wp_enqueue_style( 'flexslider', THEME_URL . '/css/flexslider.css' );
	
	// Loads our main stylesheet.
	wp_enqueue_style( 'kang-style', get_stylesheet_uri() );

	// Loads the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'kang-ie', get_template_directory_uri() . '/css/ie.css', array( 'kang-style' ), '20121010' );
	$wp_styles->add_data( 'kang-ie', 'conditional', 'lt IE 9' );
	
	wp_enqueue_script ( 'kang-ggm', 'http://maps.google.com/maps/api/js?sensor=false');
	
	// jQuery inview
	//wp_enqueue_script( 'jquery-inview', get_template_directory_uri() . '/js/jquery.inview.min.js', array('jquery'), '1.0', true );
	
	// Magnific Popup
	//wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/js/magnific-popup.js', array('jquery'), '0.9.9', true );
	
	// Flexslider
	//wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array('jquery'), '2.2.2', true );
	
	// Script
	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true );
	
}
add_action( 'wp_enqueue_scripts', 'kang_scripts_styles' );

/**
 * Load css for backend
 * This file only load for backend
*/
function kang_load_backend_css() {
    wp_enqueue_style( 'css-backend', get_template_directory_uri() . '/css/backend.css' );
}
add_action( 'admin_enqueue_scripts', 'kang_load_backend_css' );

/**
 * Register taxonomy Danh m?c
 * This function from codex
 * $param void
 * $return void
*/
add_action( 'init', 'kang_danhmuc_init' );
function kang_danhmuc_init() {
	$labels = array(
		'name' => _x( 'Tin Tức', 'post type general name' ), 
		'singular_name' => _x( 'bai-viet', 'post type singular name' ),
		'add_new' => _x( 'Add New', 'bai-viet' ),
		'add_new_item' => __( 'Add New Bài viết' ),
		'edit_item' => __( 'Edit bài viết' ),
		'new_item' => __( 'New Bài Viết' ),
		'view_item' => __( 'View Bài Viết' ),
		'search_items' => __( 'Search Bài Viết' ),
		'not_found' =>  __( 'No Danh mục found' ),
		'not_found_in_trash' => __( 'No Bài Viết found in Trash' ),
		'parent_item_colon' => ''
	);


	$args = array( 'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
		'menu_position' => 4,
		'supports' => array( 'title', 'editor', 'thumbnail',  'revisions' )
	); 

	register_post_type( 'bai-viet', $args );
	flush_rewrite_rules( false );
}


add_action( 'init', 'kang_danh_muc_taxonomies', 0 );

function kang_danh_muc_taxonomies() {
	$labels = array(
		'name' => _x( 'Danh mục tin tức', 'taxonomy general name' ),
		'singular_name' => _x( 'danh-muc', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Danh mục' ),
		'all_items' => __( 'All Danh mục' ),
		'parent_item' => __( 'Parent Danh mục' ),
		'parent_item_colon' => __( 'Parent Danh mục' ),
		'edit_item' => __( 'Edit Danh mục' ),
		'update_item' => __( 'Update Danh mục' ),
		'add_new_item' => __( 'Add new Danh mục' ),
		'new_item_name' => __( 'New Danh mục name' ),
                
	); 	

	register_taxonomy( 'danh-muc', array( 'bai-viet' ), array(
		'hierarchical' => true,
		'labels' => $labels, 
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'danh-muc' ),
	));
	
}

add_action( 'init', 'kang_danh_muc_tag_taxonomies', 0 );

function kang_danh_muc_tag_taxonomies() {
	$labels = array(
		'name' => _x( 'Tags', 'taxonomy general name' ),
		'singular_name' => _x( 'tags', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Tags' ),
		'all_items' => __( 'All Tags' ),
		'parent_item' => __( 'Parent Tags' ),
		'parent_item_colon' => __( 'Parent Tags' ),
		'edit_item' => __( 'Edit Tags' ),
		'update_item' => __( 'Update Tags' ),
		'add_new_item' => __( 'Add new Tags' ),
		'new_item_name' => __( 'New Tags name' ),
	); 	

	register_taxonomy( 'tags', array( 'bai-viet' ), array(
		'hierarchical' => false,
		'labels' => $labels, 
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'tags' ),
	));
	
}


/* Add support excerpt to custom post type san pham */
add_action('init', 'kang_baiviet_add_excerpt', 100);
function kang_baiviet_add_excerpt() {
    add_post_type_support( 'bai-viet', 'excerpt' );
}

/* NEWS
------------------------------------------------------------------*/
/**
 * Customize the_excerpt function
 * Modify the_excerpt
 * @return void
*/
function kang_custom_excerpt_length( $length ) {
	global $post;
	
	return 50;
	
}
add_filter( 'excerpt_length', 'kang_custom_excerpt_length', 999 );

function kang_new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'kang_new_excerpt_more');

/**
 * Setup functions to count posts view
 * @package kang
 * @return void
 */

function kang_getPostViews($postID){ 
	$count_key = 'postview_number';
	$count = get_post_meta($postID, $count_key, true);
	if(!isset($count) || empty($count)){ 
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
		return "0"; 
	}
		return $count;
}

function kang_setPostViews($postID) {
	$count_key = 'postview_number';
	$count = get_post_meta($postID, $count_key, true);
	if(!isset($count) || empty($count)){
		$count = 1;
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, $count);
	} else {
		$count++;
		update_post_meta($postID, $count_key, $count); 
	}
}

/**
 * Function check results only for posts
 * $param $post
 * @return true or false
 */
 
function kang_is_type_page() { // Check if the current post is a page
	global $post;

	if ($post->post_type == 'page') {
		return true;
	} else {
		return false;
	}
}

/** 
 * Change posts per page based on CPT
 * @package Wordpress
 * @author Kang
*/
if( !is_admin() ){
	add_filter( 'pre_get_posts', 'kang_custom_posts_per_page' );
	function kang_custom_posts_per_page($query){
		if( is_tax('danh-muc') || is_tax('tags') ){
			$query->set('posts_per_page', 10);
		}
	}
}

/**
 * Create widget show new posts
 * $pram @widget
 * return $void
 */
 
add_action('widgets_init', 'kang_news_posts_widget');

function kang_news_posts_widget() {
	register_widget('kang_new_posts_widget');
}

class kang_new_posts_widget extends WP_Widget {

	function kang_new_posts_widget() {
		$widget_ops = array(
			'classname' => 'kang-new-news',
			'description' => __('Hiển thị danh sách các bài viết mới cập nhật', 'kang')
		);
		$this->WP_Widget('kang_new_posts_widget', 'Bài viết danh mục mới', $widget_ops);
	}

	function form($instance) {
		$defaults = array(
			'title' => 'Danh m?c',
			'numbers'	=> '8',
			'cat'		=>	'',
			'thumbnail'		=>	'no',
		);
		$instance = wp_parse_args((array) $instance, $defaults);
		$title = $instance['title'];
		$numbers = $instance['numbers'];
		$cat = $instance['cat'];
		$thumbnail = $instance['thumbnail'];
		?>
		<p><i><?php _e('Tiêu đề','kang');?>: </i><input class="" name="<?php echo $this->get_field_name('title'); ?>"  type="text" value="<?php echo esc_attr($title); ?>" /></p>
		<p><i><?php _e('Số bài viết hiển thị','kang');?>: </i><input class="" name="<?php echo $this->get_field_name('numbers'); ?>"  type="number" value="<?php echo esc_attr($numbers); ?>" /></p>
		<p><i><?php _e('Danh mục hiển thị','kang');?>: </i>
			<select name="<?php echo $this->get_field_name('cat'); ?>">
				<option value="" <?php selected( esc_attr($cat), "" ); ?>><?php _e('Tất cả danh mục','kang'); ?></option>
				<?php 
				$danhmuc = get_terms('danh-muc', array('hide_empty' => false, 'orderby' => 'id',));
				if(!empty($danhmuc)):
				foreach($danhmuc as $term){
				$term_id = $term->term_id;
				?>
				<option value="<?php echo $term_id; ?>" <?php selected( esc_attr($cat), $term_id ); ?>><?php echo $term->name; ?></option>
				<?php
				}
				endif;
				?>
			</select>
		</p>
		<p><i><?php _e('Hiển thị ảnh đại diện?','kang');?>: </i>
			<select name="<?php echo $this->get_field_name('thumbnail'); ?>">
				<option value="no" <?php selected( esc_attr($thumbnail), "no" ); ?>><?php _e('Không','kang'); ?></option>
				<option value="yes" <?php selected( esc_attr($thumbnail), "yes" ); ?>><?php _e('Có','kang'); ?></option>
			</select>
		</p>

		<?php
	}

	//save the widget settings
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['numbers'] = strip_tags($new_instance['numbers']);
		$instance['cat'] = strip_tags($new_instance['cat']);
		$instance['thumbnail'] = strip_tags($new_instance['thumbnail']);

		return $instance;
	}

	//display the widget
	function widget($args, $instance) {
		extract($args);

		echo $before_widget;
		$title = apply_filters('widget_title', $instance['title']);
		$numbers = empty($instance['numbers']) ? 8 : $instance['numbers'];
		$cat = empty($instance['cat']) ? '' : $instance['cat'];
		$thumbnail = empty($instance['thumbnail']) ? 'no' : $instance['thumbnail'];

		if (!empty($title)) {
			echo $before_title . $title . $after_title;
		};
		?>
		<ul class="widget-category-archive<?php if($thumbnail == 'yes'): echo ' has-thumbnail'; endif; ?>">
			<?php 
				$args = array(
						'showposts' => $numbers,
						'post_type' => 'bai-viet',
					);
				if(!empty($cat)){
					$args['tax_query'] = array(
											array(
												'taxonomy' => 'danh-muc',
												'field'    => 'id',
												'terms'    => $cat,
											),
										);
				}
				
				$news = new WP_Query($args);
				while($news->have_posts()): $news->the_post();
			?>
				<li class="widget-post">
					<?php if($thumbnail == 'yes'){ ?>
					<div class="view_left">
						<a href="<?php the_permalink();?>">
							<?php 
							if(has_post_thumbnail()){
							the_post_thumbnail('thumbnail');
							} else {
								echo '<img src="'.get_template_directory_uri().'/images/thumb-150x150.jpg" alt="'.get_the_title().'" />';
							}
							?>
						</a>
					</div>
					<div class="view_right">
						<h4 class="title_view"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
					</div>
					<?php } else { ?>
					<a href="<?php the_permalink();?>"><?php the_title();?></a>
					<?php } ?>
				</li>
			<?php endwhile; wp_reset_postdata();?>
		</ul>
		<?php 
		echo $after_widget;
	}
}


/**
 * Create widget show new products
 * $pram @widget
 * return $void
 */
 
add_action('widgets_init', 'kang_new_products_widget');

function kang_new_products_widget() {
	register_widget('kang_new_product_widget');
}

class kang_new_product_widget extends WP_Widget {

	function kang_new_product_widget() {
		$widget_ops = array(
			'classname' => 'kang-new-product',
			'description' => __('Hiển thị danh sách các sản phẩm mới cập nhật', 'kang')
		);
		$this->WP_Widget('kang_new_product_widget', 'Sản phẩm mới cập nhật', $widget_ops);
	}

	function form($instance) {
		$defaults = array(
			'title' => 'Sản phẩm mới cập nhật',
			'numbers'	=> '8',
			'thumbnail'		=>	'no',
		);
		$instance = wp_parse_args((array) $instance, $defaults);
		$title = $instance['title'];
		$numbers = $instance['numbers'];
		$thumbnail = $instance['thumbnail'];
		?>
		<p><i><?php _e('Tiêu đề','kang');?>: </i><input class="" name="<?php echo $this->get_field_name('title'); ?>"  type="text" value="<?php echo esc_attr($title); ?>" /></p>
		<p><i><?php _e('Số bài viết hiển thị','kang');?>: </i><input class="" name="<?php echo $this->get_field_name('numbers'); ?>"  type="number" value="<?php echo esc_attr($numbers); ?>" /></p>
		<p><i><?php _e('Hiển thị ảnh đại diện?','kang');?>: </i>
			<select name="<?php echo $this->get_field_name('thumbnail'); ?>">
				<option value="no" <?php selected( esc_attr($thumbnail), "no" ); ?>><?php _e('Không','kang'); ?></option>
				<option value="yes" <?php selected( esc_attr($thumbnail), "yes" ); ?>><?php _e('Có','kang'); ?></option>
			</select>
		</p>
		
		<?php
	}

	//save the widget settings
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['numbers'] = strip_tags($new_instance['numbers']);
		$instance['thumbnail'] = strip_tags($new_instance['thumbnail']);

		return $instance;
	}

	//display the widget
	function widget($args, $instance) {
		extract($args);

		echo $before_widget;
		$title = apply_filters('widget_title', $instance['title']);
		$numbers = empty($instance['numbers']) ? 8 : $instance['numbers'];
		$thumbnail = empty($instance['thumbnail']) ? 'no' : $instance['thumbnail'];
		
		if (!empty($title)) {
			echo $before_title . $title . $after_title;
		};
		?>
		<ul class="widget-category-archive widget-products-new<?php if($thumbnail == 'yes'): echo ' has-thumbnail'; endif; ?>">
			<?php 
				$args = array(
						'showposts' => $numbers,
						'post_type' => 'post',
					);
				
				$news = new WP_Query($args);
				while($news->have_posts()): $news->the_post();
			?>
				<li class="widget-post">
					<?php if($thumbnail == 'yes'){ ?>
					<div class="view_left">
						<a href="<?php the_permalink();?>">
						<?php 
							if(has_post_thumbnail()){
							the_post_thumbnail('thumbnail');
							} else {
								echo '<img src="'.get_template_directory_uri().'/images/thumb-150x150.jpg" alt="'.get_the_title().'" />';
							}
						?>
						</a>
					</div>
					<div class="view_right">
                        <?php
			
			$price = get_field('product_price');
                      
			?>

					<h4 class="title_view"><a href="<?php the_permalink();?>"><?php the_title();?></a>
<?php if(isset($price) && !empty($price)){ ?>
					<p class="price"><?php _e('','kang'); echo number_format($price, 0, "", ".").'<span class="cur cur-layout2"> &#8363;</span>'; ?></p>
					<?php } else { ?>
					<p class="price"><?php _e('','kang'); echo '<span class="no-price">'.__("Liên Hệ","kang").'</span>'; ?></p>
					<?php } ?>

</h4>
					</div>
					<?php } else { ?>
					<a href="<?php the_permalink();?>"><?php the_title();?></a>
					<?php } ?>
				</li>
			<?php endwhile; wp_reset_postdata();?>
		</ul>
		<?php 
		echo $after_widget;
	}
}


/**
 * Create widget show like box facebook
 * $pram @widget
 * return $void
 */
 
add_action('widgets_init', 'kang_fb_like_box');

function kang_fb_like_box() {
	register_widget('kang_fb_like_box_widget');
}

class kang_fb_like_box_widget extends WP_Widget {

	function kang_fb_like_box_widget() {
		$widget_ops = array(
			'classname' => 'kang-fb-likebox',
			'description' => __('Hiển hị like box facebook in sidebar', 'kang')
		);
		$this->WP_Widget('kang_fb_like_box_widget', 'Facebook Like Box', $widget_ops);
	}

	function form($instance) {
		$defaults = array(
			'title' => 'Fan Page',
			'link'	=> '',
		);
		$instance = wp_parse_args((array) $instance, $defaults);
		$title = $instance['title'];
		$link = $instance['link'];
		?>
		<p><i><?php _e('Tiêu đề','kang');?>: </i><input class="" name="<?php echo $this->get_field_name('title'); ?>"  type="text" value="<?php echo esc_attr($title); ?>" /></p>
		<p><i><?php _e('Link Fan Page','kang');?>: </i><input class="" name="<?php echo $this->get_field_name('link'); ?>"  type="text" value="<?php echo esc_attr($link); ?>" /></p>


		<?php
	}

	//save the widget settings
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['link'] = strip_tags($new_instance['link']);

		return $instance;
	}

	//display the widget
	function widget($args, $instance) {
		extract($args);

		echo $before_widget;
		$title = apply_filters('widget_title', $instance['title']);
		$link = empty($instance['link']) ? '' : $instance['link'];

		if (!empty($title)) {
			echo $before_title . $title . $after_title;
		};
		?>
		
		<div class="fb-like-box" data-href="<?php echo $link; ?>" data-height="205" data-width="100%" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>
		
		<?php 
		echo $after_widget;
	}
}


/**
 * Create widget show support client
 * $pram @widget
 * return $void
 */
 
add_action('widgets_init', 'kang_supporter_widget');

function kang_supporter_widget() {
	register_widget('kang_support_widget');
}

class kang_support_widget extends WP_Widget {

	function kang_support_widget() {
		$widget_ops = array(
			'classname' => 'kang-support',
			'description' => __('Thiết lập hiển thị hỗ trợ khách hàng online ở Sidebar', 'kang')
		);
		$this->WP_Widget('kang_support_widget', 'Hỗ trợ khách hàng', $widget_ops);
	}

	function form($instance) {
		$defaults = array(
			'title' => '',
			'desc' => '',
			'skype'	=> '',
			'yahoo'	=> '',
		);
		$instance = wp_parse_args((array) $instance, $defaults);
		$title = $instance['title'];
		$desc = $instance['desc'];
		$skype = $instance['skype'];
		$yahoo = $instance['yahoo'];
		?>
		<p><i><?php _e('Tiêu đề','kang');?>: </i><input class="" name="<?php echo $this->get_field_name('title'); ?>"  type="text" value="<?php echo esc_attr($title); ?>" /></p>
		<p><i><?php _e('Mô tả ngắn','kang');?>: </i><input class="" name="<?php echo $this->get_field_name('desc'); ?>"  type="text" value="<?php echo esc_attr($desc); ?>" /></p>
		<p><i><?php _e('Nick yahoo','kang');?>: </i><input class="" name="<?php echo $this->get_field_name('yahoo'); ?>"  type="text" value="<?php echo esc_attr($yahoo); ?>" /></p>
		<p><i><?php _e('Nick skype','kang');?>: </i><input class="" name="<?php echo $this->get_field_name('skype'); ?>"  type="text" value="<?php echo esc_attr($skype); ?>" /></p>
		
		<?php
	}

	//save the widget settings
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['desc'] = strip_tags($new_instance['desc']);
		$instance['skype'] = strip_tags($new_instance['skype']);
		$instance['yahoo'] = strip_tags($new_instance['yahoo']);
		
		return $instance;
	}

	//display the widget
	function widget($args, $instance) {
		extract($args);

		echo $before_widget;
		
		$title = empty($instance['title']) ? '' : $instance['title'];
		$desc = empty($instance['desc']) ? '' : $instance['desc'];
		$skype = empty($instance['skype']) ? '' : $instance['skype'];
		$yahoo = empty($instance['yahoo']) ? '' : $instance['yahoo'];

		?>
		
		<div class="supporter-online">
			<h4><?php echo $title; ?></h4>
			<p class="desc"><?php echo $desc; ?></p>
			<?php if( !empty($yahoo) || !empty($skype) ): ?>
			<div class="button-support">
				<?php if(!empty($yahoo)): ?>
				<a href="ymsgr:sendim?<?php echo trim($yahoo); ?>" class="yahoo">Yahoo!</a>
				<?php endif; ?>
				<?php if(!empty($skype)): ?>
				<a href="Skype:<?php echo trim($skype); ?>?chat" class="skype">Skype!</a>
				<?php endif; ?>
			</div>
			<?php endif; ?>
		</div>
		
		<?php 
		echo $after_widget;
	}
}

/* Register shortcodes google+ and like facebook */
if (!function_exists('kang_google_plus_shortcode')){
	function kang_google_plus_shortcode($atts, $content = null ){
		return '<div class="google-plus-iframe"><g:plusone size="medium" href="'.HOME_URL.'"></g:plusone></div>';
	}
}
add_shortcode( 'google_plus', 'kang_google_plus_shortcode' );

if (!function_exists('kang_facebook_like_shortcode')){
	function kang_facebook_like_shortcode($atts, $content = null ){
		return '<div class="facebook-like-iframe"><div class="fb-like" data-href="'.HOME_URL.'" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div></div>';
	}
}
add_shortcode( 'facebook_like', 'kang_facebook_like_shortcode' );

/* Register shortcodes video */
if (!function_exists('kang_video_shortcode')){
	function kang_video_shortcode($atts = null, $content){
		extract( shortcode_atts( array (
			'url' => ''
		), $atts ) );
		/* Get video id */
		if (preg_match('/youtube\.com\/watch\?v=([^\&\?\/]+)/', $url, $id)) {
			$values = $id[1];
		} else if (preg_match('/youtube\.com\/embed\/([^\&\?\/]+)/', $url, $id)) {
			$values = $id[1];
		} else if (preg_match('/youtube\.com\/v\/([^\&\?\/]+)/', $url, $id)) {
			$values = $id[1];
		} else if (preg_match('/youtu\.be\/([^\&\?\/]+)/', $url, $id)) {
			$values = $id[1];
		}
		else if (preg_match('/youtube\.com\/verify_age\?next_url=\/watch%3Fv%3D([^\&\?\/]+)/', $url, $id)) {
			$values = $id[1];
		} else {
			$values = '';
		}
		
		if( !empty($values) ) {
			//return '<div class="kang-video-container"><iframe src="//www.youtube.com/embed/' . $values . '" height="240" width="320" allowfullscreen="" frameborder="0"></iframe></div>';
			return '<div class="kang-video-container">
						<object width= "560" height="315">
						<param name="movie" value="http://www.youtube.com/v/' . $values . '"></param>
						<param name="allowFullScreen" value="true"></param>
						<param name="allowscriptaccess" value="always"></param>
						<embed src="http://www.youtube.com/v/' . $values . '" type="application/x-shockwave-flash" allowfullscreen="true" width="560" height="315" allowscriptaccess="always"></embed>
						</object>
					</div>';
		} else {
			return '';
		}
	}
}
add_shortcode( 'video', 'kang_video_shortcode' );


/* CSS to mce */
add_action( 'admin_enqueue_scripts', 'kang_backend_css' );
function kang_backend_css() {
	wp_enqueue_style( 'custom_wp_admin_css', THEME_URL . '/css/backend.css' );
}

/**
 * Require MCE button
 * @package Wordpress
 * @Author Kang
*/
require_once( dirname(__FILE__) . '/mce/mce.php');


/**
 * Register google maps shortcodes
 * Google map shortcode will be add if you use this shortcodes
 * @package Kang
 * @author Kang
*/

if (!function_exists('kang_google_map_shortcode')){
	function kang_google_map_shortcode($args,$content=NULL){

	// default args
	$args = shortcode_atts(array(	
			'id' => 'map',
			'z' => '10',
			'w' => '600',
			'h' => '400',
			'maptype' => 'ROADMAP',
			'address' => '',
			'marker' => 'yes',
			'markerimage' => '',
			'draggable'	=>	'yes',
			'infowindow' => '',
			'infowindowdefault' => 'yes',
			'hidecontrols' => 'false',
			'scrollwheel' => 'true',
			'color'	=> '',
				
		), $args);
									
	$id_map = 'map'.rand();
	$args['w'] = (empty($args['w'])) ? '600' : $args['w'];
	$args['h'] = (empty($args['h'])) ? '400' : $args['h'];
	$gmap = '<div class="kang-google-map"><div id="kang-' .$id_map . '" style="position: absolute;left: 0px;top: 0px;overflow: hidden;width: 100%;height: 100%;z-index: 0;"></div>';
	$gmap .= '<script type="text/javascript">
		var myOptions = {
			zoom: ' . $args['z'] . ',
			scrollwheel: ' . $args['scrollwheel'] .',
			disableDefaultUI: ' . $args['hidecontrols'] .',
			draggable: '. $args['draggable'] .',
			mapTypeId: google.maps.MapTypeId.' . $args['maptype'] . ',';
			if($args['color'] != ''){
				$gmap .= 'styles: [{ stylers: [{ hue: "'.$args['color'].'" },{ saturation: -20 }]}]';
			}
		$gmap .= '};
		var ' . $id_map . ' = new google.maps.Map(document.getElementById("kang-' . $id_map . '"), myOptions);';
		
		//address
		if($args['address'] != '')
		{
			$gmap .= 'var geocoder_' . $id_map . ' = new google.maps.Geocoder();
			var address = \'' . $args['address'] . '\';
			geocoder_' . $id_map . '.geocode( { \'address\': address}, function(results, status) {
				if (status == google.maps.GeocoderStatus.OK) {
					' . $id_map . '.setCenter(results[0].geometry.location);';
					if ($args['marker'] !='')
					{
						//add custom image
						if ($args['markerimage'] !='')
						{
							$gmap .= 'var image = "'. $args['markerimage'] .'";';
						}
						$gmap .= '
						var marker = new google.maps.Marker({
							map: ' . $id_map . ', 
							';
							if ($args['markerimage'] !='')
							{
								$gmap .= 'icon: image,';
							}
						$gmap .= 'position: ' . $id_map . '.getCenter()});';
						//infowindow
						if($args['infowindow'] != '') 
						{
							//first convert and decode html chars
							$thiscontent = htmlspecialchars_decode($args['infowindow']);
							$gmap .= '
							var contentString = \'' . $thiscontent . '\';
							var infowindow = new google.maps.InfoWindow({
								content: contentString
							});	
							google.maps.event.addListener(marker, \'click\', function() {
							  infowindow.open(' . $id_map . ',marker);});';
							//infowindow default
							if ($args['infowindowdefault'] == 'yes')
							{
								$gmap .= '
									infowindow.open(' . $id_map . ',marker);
								';
							}
						}
					}
			$gmap .= '} else {
				alert("Geocode was not successful for the following reason: " + status);
			}
			});
			';
		}
		//marker: show if address is not specified
		if ($args['marker'] != '' && $args['address'] == '')
		{
			//add custom image
			if ($args['markerimage'] !='')
			{
				$gmap .= 'var image = "'. $args['markerimage'] .'";';
			}
			$gmap .= '
				var marker = new google.maps.Marker({
				map: ' . $id_map . ', 
				';
				if ($args['markerimage'] !='')
				{
					$gmap .= 'icon: image,';
				}
			$gmap .= 'position: ' . $id_map . '.getCenter()});';

			//infowindow
			if($args['infowindow'] != '') 
			{
				$gmap .= '
				var contentString = \'' . $args['infowindow'] . '\';
				var infowindow = new google.maps.InfoWindow({
					content: contentString
				});	
				google.maps.event.addListener(marker, \'click\', function() {
				  infowindow.open(' . $id_map . ',marker);
				});
				';
				//infowindow default
				if ($args['infowindowdefault'] == 'yes')
				{
					$gmap .= '
						infowindow.open(' . $id_map . ',marker);
					';
				}				
			}
		}
		$gmap .= '</script></div>';
		
		//Apply filters return
		$gmap = apply_filters('kang_google_map_return',$gmap);
		
		return $gmap;
	}
}
add_shortcode( 'google_map', 'kang_google_map_shortcode' );


/**
 * Page navigation
 * Create page navigation, this will use in front-end
 * @package wordpress
 * @author Kang
*/
if ( !function_exists( 'kang_get_pagination' ) ) {
	function kang_get_pagination( $custom_query = false ) {
		global $wp_query;
		
		if ( !$custom_query ) $custom_query = $wp_query;

		$big = 999999999; // need an unlikely integer
		$pagination = paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var( 'paged' ) ),
				'total' => $custom_query->max_num_pages,
				'type'   => 'list',
				'prev_text'    => __( '<i class="fa fa-angle-double-left"></i>', 'kang' ),
				'next_text'    => __( '<i class="fa fa-angle-double-right"></i>', 'kang' ),
			) );

		if ( $pagination ) {
			return '<div class="kang-pagination"><span class="page-title">'.__("Trang:","kang").'</span>'. $pagination . '<div class="clearfix"></div></div>';
		} else return;
	}
}


/**
 * Allow use shortcode in widget sidebar
 * This is filter by wordpress
 * @package Wordpress
 * @return void
*/
add_filter( 'widget_text', 'do_shortcode');

function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//Dòng này để chắc chắn Wordpress sẽ đếm chính xác hon
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function wpb_get_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return 0;
    }
    return $count;
}

function the_breadcrumb() {
                echo '<ul id="crumbs">';
        if (!is_home()) {
                echo '<li><a href="';
                echo get_option('home');
                echo '">';
                echo 'Trang chủ';
                echo "</a></li>";
                 if (is_category() || is_single()) {
                        echo '<span>›</span><li>';
                        the_category (' </li><li> ');
                        if (is_single()) {
                                echo "</li><span>›</span><li>";
                                the_title();
                                echo '</li>';
                        }
                } elseif (is_page()) {
                        echo '<span>›</span><li>';
                        echo the_title();
                        echo '</li>';
                }
        }
        elseif (is_tag()) {single_tag_title();}
        elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
        elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
        elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
        elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
        elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
        elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
        echo '</ul>';
}