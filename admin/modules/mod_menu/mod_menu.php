<?php
		include_once('../config/config.php');
		include('helper.php');
		include('phantrang.php');
		$mn = new menu();
		$mn->connect_db();
		if(isset($_GET['act']) and $_GET['act']=='them')//Them moi 
		{
			include('tmpl/them.php');
			if(isset($_POST['them']))
			{
				$mn->tenmenu = $_POST['tenmenu'];
				$mn->url = $_POST['url'];
				$mn->trangthai = $_POST['trangthai'];
				$mn->thutu = $_POST['thutu'];
				$mn->create_at = date('Y-m-d H:i:s', time());
				if($mn->them())
				{
					?>
					<script language="javascript">
					alert('Thêm danh mục thành công.');
					window.location='index.php?page=menu';
					</script>
					<?php
				}
				else
				{
					?>
					<script language="javascript">
					alert('Thêm danh mục không thành công.');
					</script>
					<?php
				}
							
			
			}

		}
		if(!isset($_GET['act']))//Quan ly 
		{
				$limit =30;
				$start =  findstart($limit);
				$sql = "SELECT * from nk_menu";
				$count = $mn->execute($sql);
				$count = $mn->num_rows($count);
				$page = findpages($count,$limit);
				$sql = "SELECT * from nk_menu order by id ASC limit $start,$limit";
				$mang = $mn->quanly($sql);
				$chuoi ='index.php?page=menu';

			include('tmpl/quanly.php');
			if(isset($_POST['capnhap']))//cap nhap thu tu
			{
				if(isset($_POST['thutu']))
				{
					foreach($_POST['thutu'] as $k=>$v)
					{
						if($v>0 && is_numeric($v))
						{
							mysql_query("UPDATE nk_menu set thutu='$v' where idmenu='$k'");
						}
					}
					?>
					<script language="javascript">
					history.back();
					</script>
					<?php
				}
			}
			if(isset($_GET['id']) and isset($_GET['noibat']))//Cap nhap noi bat
			{
				$mn->idmenu = $_GET['id'];
				$mn->noibat = $_GET['noibat'];
				if($mn->capnhapnoibat())
				{
					?>
					<script language="javascript">
					history.back();
					</script>
					<?php
				}
			}
			if(isset($_GET['id']) and isset($_GET['trangthai']))//Cap nhap trang thai
			{
				$mn->idmenu = $_GET['id'];
				$mn->trangthai = $_GET['trangthai'];
				if($mn->capnhaptrangthai())
				{
					?>
					<script language="javascript">
					history.back();
					</script>
					<?php
				}
			}
			if(isset($_POST['delete']))
			{
				if(isset($_POST['mn']))
				{
					$mang = $_POST['mn'];
					$n=count($mang);
					if($n>0)
					{
						for($i=0;$i<$n;$i++)
						{
							$mn->idmenu = $mang[$i];
								$mn->xoa();
							
						}
						?>
						<script language="javascript">
						history.back();
						</script>
						<?php
					}
				}
			}
		}
		if(isset($_GET['act']) and $_GET['act']=='xoa')//Xoa 
		{
			$mn->idmenu = $_GET['id'];

				$mn->xoa();
				?>
				<script language="javascript">
				alert('Xóa menu thành công.');
				history.back();
				</script>
				<?php

	
		}
		if(isset($_GET['act']) and $_GET['act']=='sua')//Sua
		{
			$mn->idmenu = $_GET['id'];
			$mang = $mn->laysua();
			include('tmpl/sua.php');
			if(isset($_POST['capnhap']))
			{		
				$mn->idmenu = $mang[0];
				$mn->tenmenu  = $_POST['tenmenu'];
				$mn->url  = $_POST['url'];
				$mn->thutu  = $_POST['thutu'];
				$mn->trangthai = $_POST['trangthai'];
				if($mn->sua())
				{
					?>
					<script language="javascript">
					alert('Sửa danh mục thành công.');
					window.location='index.php?page=menu';
					</script>
					<?php
				}
				else
				{
					?>
					<script language="javascript">
					alert('Sửa danh mục không thành công.');
					</script>
					<?php
				}
			}
		}
?>