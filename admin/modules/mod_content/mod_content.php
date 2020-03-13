<?php
	// include('connect.php');
	// include('helper.php');
	// $header_menu = new header();
	// $product_items = $header_menu->header_product_menu();
	// if (isset($_GET['type']) && $_GET['type']=='logout'){
	// 	echo 'ok';
	// 	// include_once("modules/mod_logout/mod_logout.php");
	// }
	if (isset($_GET['type']) && $_GET['type']=='logout'){
    	include_once("modules/mod_logout/mod_logout.php"); 
    }else {
        include('tmpl/content.php');
    }
?>