<?php
	include_once("config/config.php");
	include_once("helper.php");
	$db = new content;
	$db->connect_db();
	$result = $db->content_load_db();
	include('tmpl/content.php');
?>