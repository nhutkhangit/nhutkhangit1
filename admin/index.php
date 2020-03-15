<?php
		@session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NhutKhangIT Administrator</title>
<!--CSS-->

	<style>
		.panel-body{
			background:#f0f0f0;
		}
		.panel-header{
			background:#fff  url(images/panel_header_bg.gif) no-repeat top right;
		}
		.panel-tool-collapse{
			background:url(images/arrow_up.gif) no-repeat 0px -3px;
		}
		.panel-tool-expand{
			background:url(images/arrow_down.gif) no-repeat 0px -3px;
		}
	</style>
<!--the end CSS-->
<!-- javascrip-->

<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="js/jquery.easyui.min.js"></script>
<script type="text/javascript"  src="js/nicEdit.js"></script>
<!--the end javascip-->
<!--validate-->
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery_003.js" type="text/javascript"></script>
<script src="js/jquery_002.js" type="text/javascript"></script>

<script type="text/javascript">
// only for demo purposes
	
$.metadata.setType("attr", "validate");

$(document).ready(function() {
	$("#form1").validate();
});
</script>

<style type="text/css">
.block { display: block; color:#F00;}
label.error { display: none; color:#F00; }	
</style>
<!--the end validate-->
<!--begin trinh soan thao-->
<script src="../ckeditor/ckeditor.js" language="javascript"></script>
<!--the end trinh soan thao-->
<!--chu thich----------->
<script type="text/javascript" src="js/tooltip.js"></script>
 <link rel="stylesheet" href="css/tooltip.css" type="text/css">
</head>

<body>
<?php
	if(isset($_GET['page']) and $_GET['page']=='quenmatkhau')
	{
		include('modules/mod_nguoidung/mod_nguoidung.php');
	}
	else
	{
		if(isset($_SESSION['tendangnhap']) and $_SESSION['tendangnhap']!="" and isset($_SESSION['trangthai']) and $_SESSION['trangthai']==1)
		{
			include('main.php');
		}
		else
		{
			include('modules/mod_nguoidung/mod_nguoidung.php');
		}
	}
?>
</body>
</html>

