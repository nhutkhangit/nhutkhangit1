<?php
	include_once("config/config.php");
	include_once("helper.php");
	include_once("Modules/phantrang.php");
	$db = new load_danhmuc;
	$db->connect_db();
	// $danhmuc = $db->content_load_danhmuc($_GET['iddm']);
	$get_name = $db->load_name_danhmuc($_GET['iddm']);
	$limit =6;
	$start =  findstart($limit);
	$count = $db->nk_count("SELECT * from baiviet");
	$page = findpages($count,$limit);
	$iddm = $_GET['iddm'];
	$sql = $sql = "SELECT * from baiviet where trangthai = '1'  and iddm = '$iddm' limit $start,$limit";
	$danhmuc = $db->content_load_danhmuc($sql);
	$chuoi ='index.php?page=danhmuc&iddm='.$iddm;
	include('tmpl/chitiet.php');
?>