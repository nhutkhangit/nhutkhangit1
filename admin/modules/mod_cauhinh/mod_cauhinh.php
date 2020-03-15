<?php
		include('../config/database.php');
		include('helper.php');
		include('phantrang.php');
		$ch = new cauhinh();
			$mang = $ch->laysua();
			include('tmpl/sua.php');
			if(isset($_POST['capnhap']))
			{
					$ch->url = $_POST['url'];
					$ch->hotline = $_POST['hotline'];
					$ch->email = $_POST['email'];
					$ch->diachi = $_POST['diachi'];
					$ch->fax = $_POST['fax'];
					$ch->title = $_POST['title'];
					$ch->keywords = $_POST['keywords'];
					$ch->description = $_POST['description'];
					$ch->bottom = $_POST['bottom'];
					$ch->bando = $_POST['bando'];
					if($ch->sua())
					{
						?>
						<script language="javascript">
						alert('Sửa cấu hình thành công.');
						window.location='index.php?page=cauhinh';
						</script>
						<?php
					}
					else
					{
						?>
						<script language="javascript">
						alert('Sửa cấu hình không thành công.');
						</script>
						<?php
					}
				
			}
	
?>