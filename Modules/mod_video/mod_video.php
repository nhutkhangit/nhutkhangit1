<?php
	include_once("config/config.php");
	include_once("helper.php");
	include_once("Modules/phantrang.php");
	$db = new nk_load_video;
	$db->connect_db();
	// $danhmuc = $db->content_load_danhmuc($_GET['iddm']);
	// $get_name = $db->load_name_danhmuc($_GET['iddm']);
	$limit =2;
	$start =  findstart($limit);
	$count = $db->nk_count("SELECT * from nk_video");
	$page = findpages($count,$limit);
	$sql = $sql = "SELECT * from nk_video where trangthai = '1' order by id limit $start,$limit";
	$danhmuc = $db->load_video($sql);
	$chuoi ='index.php?page=video';
	include('tmpl/video.php');
?>