<?php
if (isset($_GET['type']) && $_GET['type']=='logout') {
	include_once("modules/mod_logout/mod_logout.php");
}
	include('tmpl/index.php');
?>