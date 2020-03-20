<?php
	include_once("config/config.php");
	include_once("helper.php");
	$db = new load_danhmuc;
	$db->connect_db();
	$danhmuc = $db->content_load_danhmuc($_GET['iddm']);
	include('tmpl/chitiet.php');
?>