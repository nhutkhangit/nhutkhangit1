<?php 
/**
 * This is file to process order room
 * This file will hold all data and process this
 * @package Wordpress
 * @Author Kang
*/

$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );

/* Get mail in setting page */
$siteMail = get_bloginfo('admin_email');
/* Time */
$currentTime = current_time('d/m/Y G:i');

$sex = isset($_POST['sex']) ? $_POST['sex'] : 'Anh';
$sex = ($sex == 'Anh') ? 'Nam' : 'Nữ';
$name = isset($_POST['name']) ? $_POST['name'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';
$nameProduct = isset($_POST['nameProduct']) ? $_POST['nameProduct'] : '';

if( $name == '' || $phone == '' ) exit('NOT FOUND');

require 'PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();
$mail->SMTPAuth = true;
//$mail->SMTPDebug = 2;


$mail->Host = 'smtp.gmail.com';
$mail->Username = 'nhutkhangit@gmail.com';
$mail->Password = 'eneahkrcqkaaksqb';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;



$mail->From = $siteMail;
$mail->FromName = 'EMAIL XAC NHAN DAT HANG';
$mail->addReplyTo($siteMail, 'Reply Address');
$mail->addAddress($siteMail, 'Bot san day');
$mail->isHTML(true);
$mail->addCC('nhutkhangit@gmail.com', 'GiuseLethien');
$mail->Subject = 'Email dat hang tu website '. home_url() .' - Thoi gian gui mail: '.$currentTime;
$mail->Body =   '<div style="width: 600px; min-height: 400px; border: 2px solid #ddd; ">
					<div style="margin-top: 20px;">
						<h1 style="font-size: 21px; text-align: center; font-weight: normal; font-family: Arial; ">Email Đặt Hàng Từ Website '. home_url() .'</h1>
						<div style="font-size: 14px; line-height: 1.5em; font-family: Arial; padding: 0 20px 20px;">
							<p style="vertical-align: top; margin: 10px 0;"><strong style="width: 240px; display: inline-block;">Giới tính khách hàng: </strong>'.$sex.'</p>
							<p style="vertical-align: top; margin: 10px 0;"><strong style="width: 240px; display: inline-block;">Tên khách hàng: </strong>'.$name.'</p>
							<p style="vertical-align: top; margin: 10px 0;"><strong style="width: 240px; display: inline-block;">Sản phẩm đặt: </strong>'.$nameProduct.'</p>
							<p style="vertical-align: top; margin: 10px 0;"><strong style="width: 240px; display: inline-block;">Địa chỉ/ghi chú của khách hàng: </strong>'.$address.'</p>
							<p style="vertical-align: top; margin: 10px 0;"><strong style="width: 240px; display: inline-block;">Email khách hàng: </strong>'.$email.'</p>
							<p style="vertical-align: top; margin: 10px 0;"><strong style="width: 240px; display: inline-block;">Số điện thoại khách hàng: </strong>'.$phone.'</p>
						</div>
					</div>
				</div>';
				
//send the message, check for errors
if (!$mail->send()) {
    echo 'failed';
} else {
    echo 'success';
}
?>