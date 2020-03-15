<?php
		include_once('../config/config.php');
		include('helper.php');
		include('phantrang.php');
		$mn = new danhmuc();
		$mn->connect_db();
		if(isset($_GET['act']) and $_GET['act']=='them')//Them moi 
		{
			include('tmpl/them.php');
			if(isset($_POST['them']))
			{
				$mn->tendanhmuc = $_POST['tendanhmuc'];
				$mn->trangthai = $_POST['trangthai'];
				$mn->create_at = date('Y-m-d H:i:s', time());
				if($mn->them())
				{
					?>
					<script language="javascript">
					alert('Thêm danh mục thành công.');
					window.location='index.php?page=danhmuc';
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
				$sql = "SELECT * from nk_danhmuc";
				$count = $mn->execute($sql);
				$count = $mn->num_rows($count);
				$page = findpages($count,$limit);
				$sql = "SELECT * from nk_danhmuc order by id ASC limit $start,$limit";
				$mang = $mn->quanly($sql);
				$chuoi ='index.php?page=danhmuc';

			include('tmpl/quanly.php');
			if(isset($_POST['capnhap']))//cap nhap thu tu
			{
				if(isset($_POST['thutu']))
				{
					foreach($_POST['thutu'] as $k=>$v)
					{
						if($v>0 && is_numeric($v))
						{
							mysql_query("UPDATE nk_danhmuc set thutu='$v' where iddanhmuc='$k'");
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
				$mn->iddanhmuc = $_GET['id'];
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
				$mn->iddanhmuc = $_GET['id'];
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
							$mn->iddanhmuc = $mang[$i];
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
			$mn->iddanhmuc = $_GET['id'];

				$mn->xoa();
				?>
				<script language="javascript">
				alert('Xóa danhmuc thành công.');
				history.back();
				</script>
				<?php

	
		}
		if(isset($_GET['act']) and $_GET['act']=='sua')//Sua
		{
			$mn->iddanhmuc = $_GET['id'];
			$mang = $mn->laysua();
			include('tmpl/sua.php');
			if(isset($_POST['capnhap']))
			{		
				$mn->iddanhmuc = $mang[0];
				$mn->tendanhmuc  = $_POST['tendanhmuc'];
				$mn->trangthai = $_POST['trangthai'];
				if($mn->sua())
				{
					?>
					<script language="javascript">
					alert('Sửa danh mục thành công.');
					window.location='index.php?page=danhmuc';
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