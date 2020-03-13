<?php
	include_once("helper.php");
	$db = new content;
	$db->connect_db();
	$chuyenmuc = $db->load_chuyenmuc();
	if (isset($_SESSION['login'])) {
		if(isset($_GET['type']) && isset($_GET['action']) && $_GET['type']=='qlcm' &&  $_GET['action']=='add_cm'){
			include('tmpl/add_qlcm.php');
		}
		if(isset($_GET['type']) && isset($_GET['action']) && isset($_GET['id_post']) && $_GET['type']=='qlcm' &&  $_GET['action']=='delete' && !empty($_GET['id_post'])){
			include('tmpl/delete_cm.php');
		}
		if(isset($_GET['type']) && isset($_GET['action']) && isset($_GET['id_post']) && $_GET['type']=='qlcm' &&  $_GET['action']=='edit' && !empty($_GET['id_post'])){
			include('tmpl/edit_qlcm.php');
		}
	}else {
		echo "đéo";
	}
	include('tmpl/qlcm.php');
?>