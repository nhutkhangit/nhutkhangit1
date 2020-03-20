<?php
	include_once("config/config.php");
	include_once("helper.php");
	$db = new chitiet;
	$db->connect_db();
	$slide = $db->baiviet_noibat();
	include('tmpl/bvnoibat.php');
?>