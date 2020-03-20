<?php
	include_once("config/config.php");
	include_once("helper.php");
	$db = new content;
	$db->connect_db();
	// if (isset($_GET['bai-viet']) && !empty($_GET['bai-viet'])){
	// 	$chitiet = $db->content_load_chitiet($_GET['bai-viet']);
	// 	$update = $db->update_view($_GET['bai-viet'], $chitiet[0]['luotxem'] +1);
	// 	include('tmpl/content.php');
	// }else{ 
	// 	$result = $db->content_load_db();
	// 	$slide = $db->baiviet_noibat();
	// 	include('tmpl/content.php');
	// }
	include('tmpl/content.php');
?>