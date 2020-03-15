<?php
		@session_start();
?>
<link rel="stylesheet" href="css/login.css" type="text/css">
<form method="post" action="index.php?page=quenmatkhau" id="form1" name="form1">
<table class="border" align="center" bgcolor="white" cellpadding="2" cellspacing="0" width="31%">
	<tbody><tr>
	  <td colspan="2" class="title" align="center">Lấy lại mật khẩu</td></tr>
	<tr><td class="fr" width="36%">Tên đăng nhập</td><td class="fr_2" width="64%"><input name="tendangnhap" type="text" id="tendangnhap" value="<?php if(isset($_POST['tendangnhap'])){ echo $_POST['tendangnhap'];}?>" size="30" validate="required:true"></td></tr>
	<tr>
	  <td class="fr">Email</td>
	  <td class="fr_2"><input name="email" type="text" id="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email'];}?>" size="30" validate="required:true,email:true"></td>
	  </tr>
	<tr>
	  <td class="fr">Mã xác nhận</td>
	  <td class="fr_2"><input type="text" size="30" name="maxacnhan" id="maxacnhan" validate="required:true"></td></tr>
	<tr>
	  <td class="fr" colspan="2" align="center"><img src="../captcha.php" height="30" width="80"></td>
	  </tr>
	<tr><td class="fr" colspan="2" align="center"><input class="submit" name="laylai" value="Lấy lại mật khẩu" type="submit" id="laylai">
	  <input class="submit"  type="button" name="button" id="button" value="Đăng nhập" onClick="window.location='index.php'"></td></tr>
</tbody></table>
</form>
