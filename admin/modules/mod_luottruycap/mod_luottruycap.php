<?php
		include('../config/database.php');
		include('helper.php');
		$tk = new thongke();
		$luottruycap = $tk->luottruycap();
		$online = $tk->online();
		include('tmpl/sua.php');
		
	
?>