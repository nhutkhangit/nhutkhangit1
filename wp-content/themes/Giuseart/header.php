<?php global $smof_data;
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package author KanG
 * @subpackage KanG
 * @since KanG 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
<?php if(is_home() || is_front_page()): ?>
<?php endif; /* End check if is home page or front page */ ?>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php if( isset ( $smof_data['favicon'] ) &&  $smof_data['favicon'] != '' ) { ?>
<link rel="shortcut icon" href="<?php echo $smof_data['favicon']; ?>" />
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto+Condensed');
</style>
<?php } ?>
<?php // Loads HTML5 JavaScript file to add support for HTML5 ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="header-left">
				<div id="logo">
					<?php /* Check logo */ $logo = ($smof_data['logo']) ?  $smof_data['logo'] : THEME_URL.'/images/logo.png'; ?>
					<a href="<?php echo HOME_URL; ?>"><img src="<?php echo $logo; ?>" alt="<?php _e('Logo','kang'); ?>"/></a>
				</div>
			</div>
                        <!-- .kang-head -->
			<div class="header-center">
<div style="padding-bottom:25px; font-size:14px; font-family:roboto condensed, sans-serif;color:#cc0000;text-align:center; font-weight:bold">Đc: 65 Đồng Ngọc Sứ, An Thới, Bình Thủy, Cần Thơ</div>
<div>
				<?php get_search_form(); ?></div>
<div style="padding-top:13px; padding-left:5px; font-size:14px">Gợi ý tìm kiếm: <a href="#">Iphone 7 plus</a>, <a href="#">Iphone 6s</a>, <a href="#">Ipad3</a>, ...</div>
			</div>
			<!--end header ringht--->


<div class="header-info">
            <div class="tel"><span>Hotline mua hàng: <a href="tel:+84817233044">0817.233.044</a></span></div>
            <div class="text t1">
                <div class="l">
                    <a rel="nofollow" href="#">&nbsp;</a></div>
                <div class="r">
                    <a rel="nofollow" href="#">
                        <b>Giao Hàng</b><br>
                        Trên toàn quốc
                    </a>
                </div>
            </div>
            <div class="text t2">                
                <div class="l">
                    <a rel="nofollow" href="#">&nbsp;</a></div>
                <div class="r">
                    <a rel="nofollow" href="#">
                        <b>0817.233.044</b><br>
                        Bảo hành chính hãng
                    </a>
                </div>
            </div>
            <div class="text t3">
                <div class="l">
                    <a rel="nofollow" href="#">&nbsp;</a></div>
                <div class="r">
                    <a rel="nofollow" href="#">
                        <b>Thanh toán</b><br>
                        Khi nhận hàng
                    </a>
                </div>
            </div>
          
            <div class="clear"></div>
        </div>
</header>

		</div>
<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="container">
				<a class="k-toogle-menu"><i class="fa fa-bars"></i><?php _e('Danh mục','kang'); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</div>
		</nav><!-- #site-navigation -->
<!-- #site-navigation -->
	<!-- #masthead -->
	
	<div id="main" class="wrapper<?php if(is_home() || is_front_page()): echo ' homepage'; endif; ?>">

<div class="duong_dan_breadcrumb"><?php the_breadcrumb(); ?></div>