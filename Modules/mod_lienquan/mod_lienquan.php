<?php
	include_once("config/config.php");
	include_once("helper.php");
	$db = new lienquan;
	$db->connect_db();
	$iddm = $db->get_danhmuc($_GET['id']);
	$bvlq = $db->baiviet_lienquan($_GET['id'], $iddm[0]['iddm']);
	include('tmpl/lienquan.php');
?>