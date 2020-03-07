<?php
	include_once("config/config.php");
	include_once("helper.php");
	$db = new chuyenmuc;
	$db->connect_db();
	$result = $db->load_danhmuc();
	$new_post = $db->load_baivietmoi();
	$post_xemnhieu = $db->load_baivietxemnhieu();
	include('tmpl/chuyenmuc.php');
?>