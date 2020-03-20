<?php
	include_once("config/config.php");
	include_once("helper.php");
	$db = new chitiet;
	$db->connect_db();
	$chitiet = $db->content_load_chitiet($_GET['id']);
	$update = $db->update_view($_GET['id'], $chitiet[0]['luotxem'] +1);
	include('tmpl/chitiet.php');
?>