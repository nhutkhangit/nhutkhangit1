<?php
	include_once("config/config.php");
	include_once("helper.php");
	$db = new menu;
	$db->connect_db();
	$dbmenu = $db->menu_loader();
	include('tmpl/menu.php');
?>