<?php
	@session_start();
?>
<link rel="stylesheet" href="css/login.css" type="text/css">
<form method="post" action="" id="form1" name="form1">
<table class="border" align="center" bgcolor="white" cellpadding="2" cellspacing="0" width="31%" >
	<tbody><tr><td colspan="2" class="title" align="center">Đăng nhập</td></tr>
	<tr><td class="fr" width="48%">Tên đăng nhập</td><td class="fr_2" width="52%"><input name="tendangnhap" size="20" type="text" id="tendangnhap" validate="required:true"></td></tr>
	<tr><td class="fr">Mật khẩu</td><td class="fr_2"><input name="matkhau" size="20" type="password" id="matkhau" validate="required:true"></td></tr>
	<tr><td class="fr" colspan="2" align="center"><input class="submit" name="dangnhap" value="Đăng nhập" type="submit" id="dangnhap">
	  <input type="button" name="quen" id="quen" value="Quên mật khẩu" class="submit" onclick="window.location='index.php?page=quenmatkhau'"></td></tr>
</tbody></table>
</form>
