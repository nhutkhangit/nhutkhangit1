<?php
	include_once("config/config.php");
	include_once("helper.php");
	include_once("Modules/phantrang.php");
	$db = new chitiet;
	$db->connect_db();
	$bvnoibat = $db->baiviet_noibat();
	$bvmoinhat = $db->baiviet_moinhat();
	include('tmpl/bvnoibat.php');
?>