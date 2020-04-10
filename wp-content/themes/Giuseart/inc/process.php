<?php 
/**
 * This is file to process mail
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

$nameCT = isset($_POST['nameCT']) ? $_POST['nameCT'] : '';
$addressCT = isset($_POST['addressCT']) ? $_POST['addressCT'] : '';
$phoneCT = isset($_POST['phoneCT']) ? $_POST['phoneCT'] : '';
$emailCT = isset($_POST['emailCT']) ? $_POST['emailCT'] : '';
$messageCT = isset($_POST['messageCT']) ? $_POST['messageCT'] : '';

if( $nameCT == '' || $addressCT == '' || $phoneCT == '' || $emailCT == '' || $messageCT == '') exit('NOT FOUND');

require 'PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();
$mail->SMTPAuth = true;
//$mail->SMTPDebug = 2;

$mail->Host = 'smtp.gmail.com';
$mail->Username = 'taoxanhvnn@gmail.com';
$mail->Password = 'taoxanh123';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;



$mail->From = $siteMail;
$mail->FromName = 'MayLocNuocGiaDinh';
$mail->addReplyTo($siteMail, 'Reply Address');
$mail->addAddress($siteMail, 'MayLocNuocGiaDinh');
$mail->isHTML(true);
//$mail->addCC('taoxanhvnn@gmail.com', 'TaoXanh');
$mail->Subject = 'Email lien he tu website '.home_url().' - Thoi gian gui mail: '.$currentTime;
$mail->Body =   '<div style="width: 600px; min-height: 400px; border: 2px solid #ddd; ">
					<div style="margin-top: 20px;">
						<h1 style="font-size: 21px; text-align: center; font-weight: normal; font-family: Arial; ">Email Liên Hệ Từ Website '.home_url().'</h1>
						<div style="font-size: 14px; line-height: 1.5em; font-family: Arial; padding: 0 20px 20px;">
							<p style="vertical-align: top; margin: 10px 0;"><strong style="width: 240px; display: inline-block;">Tên khách hàng: </strong>'.$nameCT.'</p>
							<p style="vertical-align: top; margin: 10px 0;"><strong style="width: 240px; display: inline-block;">Địa chỉ khách hàng: </strong>'.$addressCT.'</p>
							<p style="vertical-align: top; margin: 10px 0;"><strong style="width: 240px; display: inline-block;">Số điện thoại: </strong>'.$phoneCT.'</p>
							<p style="vertical-align: top; margin: 10px 0;"><strong style="width: 240px; display: inline-block;">Email khách hàng: </strong>'.$emailCT.'</p>
							<p style="vertical-align: top; margin: 10px 0;"><strong style="width: 240px; display: inline-block;">Nội dung tin nhắn: </strong>'.$messageCT.'</p>
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