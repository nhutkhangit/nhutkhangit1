<?php
add_action('init','of_options');

if (!function_exists('of_options'))
{
	function of_options()
	{

/*-----------------------------------------------------------------------------------*/
/* The Options Array */
/*-----------------------------------------------------------------------------------*/

// Set the Options Array
global $of_options, $smof_data;
$of_options = array();

$patterns_path = get_stylesheet_directory(). '/images/patterns/light/';
$patterns_url = get_template_directory_uri().'/images/patterns/light/';
$light_pattern_arr = array('' => __('None','kang'));
if ( is_dir($patterns_path) ) {
	if ($patterns_dir = opendir($patterns_path) ) {
		while ( ($patterns_file = readdir($patterns_dir)) !== false ) {
			if( (stristr($patterns_file, ".png") !== false || stristr($patterns_file, ".jpg") !== false || stristr($patterns_file, ".gif") !== false ) && stristr( $patterns_file , '2X') === false ) {
				$light_pattern_arr[ $patterns_url . $patterns_file ] = $patterns_file;
			}
		}    
	}
}
asort( $light_pattern_arr );


$patterns_path = get_stylesheet_directory(). '/images/patterns/dark/';
$patterns_url = get_template_directory_uri().'/images/patterns/dark/';
$dark_pattern_arr = array('' => __('None','kang'));
if ( is_dir($patterns_path) ) {
	if ($patterns_dir = opendir($patterns_path) ) {
		while ( ($patterns_file = readdir($patterns_dir)) !== false ) {
			if( (stristr($patterns_file, ".png") !== false || stristr($patterns_file, ".jpg") !== false || stristr($patterns_file, ".gif") !== false ) && stristr( $patterns_file , '2X') === false ) {
				$dark_pattern_arr[ $patterns_url . $patterns_file ] = $patterns_file;
			}
		}    
	}
}
asort( $dark_pattern_arr );

						
/*-----------------------------------------------------------------------------------*/
/* Header
/*-----------------------------------------------------------------------------------*/
$of_options[] = array( 	'name' 		=> __('Header','kang'),
						'type' 		=> 'heading',
						"icon"		=> ADMIN_IMAGES . "header.png",
				);

	/* Header */
$of_options[] = array( 	'name' 		=>	__('Header','kang'),
						'type' 		=>	'info',
						'std'		=>	__('Header','kang'),
				);
				
$of_options[] = array( 	'name' 		=> __('Favicon icon','kang'),
						'type' 		=> 'media',
						'id'		=>	'favicon',
						'std'		=>	get_template_directory_uri() . '/images/favicon.png',
						'desc'		=>	__('Lựa chọn favicon icon cho website của bạn, kích thước cho favicon thường sẽ là 16x16pixel','kang'),
				);

$of_options[] = array( 	'name' 		=> __('Logo','kang'),
						'type' 		=> 'media',
						'id'		=>	'logo',
						'std'		=>	get_template_directory_uri() . '/images/logo.png',
						'desc'		=>	__('Logo website, kích thước phù hợp của logo là 200x40 pixel','kang'),
				);
				
$of_options[] = array( 	'name' 		=> __('Số điện thoại hotline','kang'),
						'type' 		=> 'text',
						'id'		=>	'header-hotline',
						'std'		=>	'094.333.55.74',
						'desc'		=>	__('Đây là nơi bạn nhập số điện thoại hotline ở header','kang'),
				);
				
/*-----------------------------------------------------------------------------------*/
/* Homepage
/*-----------------------------------------------------------------------------------*/
$of_options[] = array( 	'name' 		=> __('Trang chủ','kang'),
						'type' 		=> 'heading',
						"icon"		=> ADMIN_IMAGES . "footer.png"
				);
				
	/* Liên hệ */				
$of_options[] = array( 	'name' 		=>	__('Trang chủ','kang'),
						'type' 		=>	'info',
						'std'		=>	__('Trang chủ','kang'),
				);
				
$of_options[] = array( 	'name' 		=> __('Ảnh slider ở trang chủ','kang'),
						'type' 		=> 'slider',
						'id'		=>	'gallery-slider-home',
						'std'		=>	'',
						'desc'		=>	__('Thêm các thiết lập, ảnh cho slider ở trang chủ','kang'),
				);
				
$of_options[] = array( 	"name" 		=> __('Các danh mục sản phẩm hiển thị ở trang chủ','kang'),
						"desc" 		=> __('Bạn có thể thay đổi các danh mục hiển thị ở trang chủ bằng cách đưa slug của danh mục ấy vào đây, ví dụ: "may-loc-nuoc-gia-dinh, may-loc-nuoc-nano", nếu bạn bỏ trống sẽ hiển thị ra tất cả các danh mục sản phẩm mà bạn có','kang'),
						"id" 		=> 'product-cat-home',
						"type" 		=> 'textarea',
						'std'		=>	'',
				);
				
$of_options[] = array( 	'name' 		=> __('Số lượng sản phẩm bạn muốn hiển thị ở danh mục sản phẩm ở trang chủ','kang'),
						'type' 		=> 'text',
						'id'		=>	'product-cat-numbers',
						'std'		=>	'5',
						'desc'		=>	__('Bạn muốn thay đổi số lượng sản phẩm hiển thị ở trang chủ thì hãy thay đổi ở đây','kang'),
				);
				
/*-----------------------------------------------------------------------------------*/
/* Contact
/*-----------------------------------------------------------------------------------*/
$of_options[] = array( 	'name' 		=> __('Liên hệ','kang'),
						'type' 		=> 'heading',
						"icon"		=> ADMIN_IMAGES . "footer.png"
				);
				
	/* Liên hệ */				
$of_options[] = array( 	'name' 		=>	__('Liên hệ','kang'),
						'type' 		=>	'info',
						'std'		=>	__('Liên hệ','kang'),
				);
				
$of_options[] = array( 	"name" 		=> __('Thiết lập địa chỉ của bạn','kang'),
						"desc" 		=> __('Bạn thay đổi địa chỉ ở phần address trong shortcode dưới đây để có thể show google map của bạn nhé','kang'),
						"id" 		=> 'address-shortcode',
						"type" 		=> 'textarea',
						'std'		=>	'',
				);

/*-----------------------------------------------------------------------------------*/
/* Đặt hàng
/*-----------------------------------------------------------------------------------*/
$of_options[] = array( 	'name' 		=> __('Đặt hàng','kang'),
						'type' 		=> 'heading',
						"icon"		=> ADMIN_IMAGES . "header.png",
				);

	/* Đặt hàng */
$of_options[] = array( 	'name' 		=>	__('Đặt hàng','kang'),
						'type' 		=>	'info',
						'std'		=>	__('Đặt hàng','kang'),
				);
				
$of_options[] = array( 	'name' 		=> __('Nội dung tin nhắn ở phía trên bên phải popup đặt hàng','kang'),
						'type' 		=> 'textarea',
						'id'		=>	'above-popup',
						'std'		=>	'Đặt hàng trực tuyến qua là một giải pháp tuyệt vời nếu bạn ở tỉnh thành khác, hoặc không tiện đến với cửa hàng chúng tôi hoặc muốn tiết kiệm thời gian cho công việc khác',
						'desc'		=>	__('Bạn có thể thay đổi nội dung phần tin nhắn phần trên ở popup đặt hàng tại đây','kang'),
				);
				
$of_options[] = array( 	'name' 		=> __('Nội dung tin nhắn ở phía trên bên dưới popup đặt hàng','kang'),
						'type' 		=> 'textarea',
						'id'		=>	'bellow-popup',
						'std'		=>	'',
						'desc'		=>	__('Bạn có thể thay đổi nội dung phần tin nhắn ở phần dưới ở popup đặt hàng tại đây ','kang'),
				);
				
$of_options[] = array( 	'name' 		=> __('Nội dung tin nhắn khi đặt hàng thành công','kang'),
						'type' 		=> 'textarea',
						'id'		=>	'message-success',
						'std'		=>	'Đơn đặt hàng của bạn đã được gửi đi thành công, trong giờ mở cửa, chúng tôi sẽ gọi điện thoại lại cho bạn trong vòng 15 phút. Cám ơn bạn!',
						'desc'		=>	__('Bạn có thể thay đổi lại nội dung tin nhắn khi đặt hàng thành công tại đây','kang'),
				);
				
$of_options[] = array( 	'name' 		=> __('Nội dung tin nhắn ở phía trên bên dưới popup đặt hàng','kang'),
						'type' 		=> 'textarea',
						'id'		=>	'message-failed',
						'std'		=>	'Xin lỗi! Có vấn đề trong việc đặt hàng của bạn. Bạn vui lòng thử lại sau ít phút hoặc liên hệ ngay với chúng tôi theo hotline ở cuối trang web.',
						'desc'		=>	__('Bạn có thể thay đổi lại nội dung tin nhắn khi đặt hàng thất bại tại đây','kang'),
				);
				
/*-----------------------------------------------------------------------------------*/
/* Footer
/*-----------------------------------------------------------------------------------*/
$of_options[] = array( 	'name' 		=> __('Footer','kang'),
						'type' 		=> 'heading',
						"icon"		=> ADMIN_IMAGES . "footer.png"
				);
				
	/* Footer Top */				
$of_options[] = array( 	'name' 		=>	__('Footer','kang'),
						'type' 		=>	'info',
						'std'		=>	__('Footer','kang'),
				);
				
$of_options[] = array( 	'name' 		=> __('Link facebook','kang'),
						'type' 		=> 'text',
						'id'		=>	'social-facebook',
						'std'		=>	'#',
						'desc'		=>	__('Bạn điền link fanpage facebook của bạn ở đây','kang'),
				);
				
$of_options[] = array( 	'name' 		=> __('Link google plus','kang'),
						'type' 		=> 'text',
						'id'		=>	'social-google',
						'std'		=>	'#',
						'desc'		=>	__('Bạn điền link google plus của bạn ở đây','kang'),
				);
				
$of_options[] = array( 	'name' 		=> __('Link youtube','kang'),
						'type' 		=> 'text',
						'id'		=>	'social-youtube',
						'std'		=>	'#',
						'desc'		=>	__('Bạn điền link youtube của bạn ở đây','kang'),
				);
				
$of_options[] = array( 	"name" 		=> __('Nội dung phần cuối chân trang của bạn','kang'),
						"desc" 		=> __('Bạn có thể sử dụng các thẻ HTML ở ô này.','kang'),
						"id" 		=> 'footer-copyright',
						"type" 		=> 'textarea',
						'std'		=>	'',
				);
				
				
/*-----------------------------------------------------------------------------------*/
/* Backup Options */
/*-----------------------------------------------------------------------------------*/
$of_options[] = array( 	"name" 		=> __("Backup Options",'kang'),
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "icon-slider.png"
				);
				
$of_options[] = array( 	"name" 		=> __("Backup and Restore Options",'kang'),
						"id" 		=> "of_backup",
						"std" 		=> "",
						"type" 		=> "backup",
						"desc" 		=> __('You can use the two buttons below to backup your current options, and then restore it back at a later time. This is useful if you want to experiment on the options but would like to keep the old settings in case you need it back.','kang'),
				);
				
$of_options[] = array( 	"name" 		=> __("Transfer Theme Options Data",'kang'),
						"id" 		=> "of_transfer",
						"std" 		=> "",
						"type" 		=> "transfer",
						"desc" 		=> __('You can tranfer the saved options data between different installs by copying the text inside the text box. To import data from another install, replace the data in the text box kangth the one from another install and click "Import Options".','kang'),
				);
				
	}//End function: of_options()
}//End chack if function exists: of_options()
?>
