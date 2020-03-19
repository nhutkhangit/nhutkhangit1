<?php
		include('../config/database.php');
		include('helper.php');
		include('phantrang.php');
		$ht = new hotro();
		if(isset($_GET['act']) and $_GET['act']=='them')//Them moi 
		{
			include('tmpl/them.php');
			if(isset($_POST['them']))
			{
				$ht->tieude = $_POST['tieude'];
				$ht->yahoo = $_POST['yahoo'];
				$ht->skype= $_POST['skype'];
				$ht->thutu = $_POST['thutu'];
				$ht->trangthai = $_POST['trangthai'];
				if($ht->them())
				{
					?>
					<script language="javascript">
					alert('Thêm mới hỗ trợ trực tuyến thành công.');
					window.location='index.php?page=hotro';
					</script>
					<?php
				}
				else
				{
					?>
					<script language="javascript">
					alert('Thêm hỗ trợ trực tuyến không thành công.');
					</script>
					<?php
				}
							
			
			}

		}
		if(!isset($_GET['act']))//Quan ly 
		{

			if(isset($_GET['xemtrangthai']) and $_GET['xemtrangthai']!='')//Thong ke theo trang thai
			{
				$trangthai = $_GET['xemtrangthai'];
				$limit = 20;
				$start = findstart($limit);
				$count = @mysql_num_rows(mysql_query("select * from hotro  where trangthai='$trangthai'"));
				$page = findpages($count,$limit);
				$sql = "select * from hotro where trangthai='$trangthai' order by thutu ASC limit $start,$limit";
				$mang = $ht->quanly($sql);
				$chuoi = 'index.php?page=hotro&xemtrangthai='.$trangthai;
			}

			else//Thong ke het chuyen muc
			{
				$limit = 20;
				$start = findstart($limit);
				$count = @mysql_num_rows(mysql_query("select * from hotro "));
				$page = findpages($count,$limit);
				$sql = "select * from hotro order by thutu ASC limit $start,$limit";
				$mang = $ht->quanly($sql);
				$chuoi = 'index.php?page=hotro';
			}
			include('tmpl/quanly.php');
			if(isset($_POST['capnhap']))//cap nhap thu tu
			{
				if(isset($_POST['thutu']))
				{
					foreach($_POST['thutu'] as $k=>$v)
					{
						if($v>0 && is_numeric($v))
						{
							mysql_query("update hotro set thutu='$v' where id='$k'");
						}
					}
					?>
					<script language="javascript">
					history.back();
					</script>
					<?php
				}
			}
			if(isset($_GET['id']) and isset($_GET['trangthai']))//Cap nhap trang thai
			{
				$ht->id = $_GET['id'];
				$ht->trangthai = $_GET['trangthai'];
				if($ht->capnhaptrangthai())
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
				if(isset($_POST['ht']))
				{
					$mang = $_POST['ht'];
					$n=count($mang);
					if($n>0)
					{
						for($i=0;$i<$n;$i++)
						{
							$ht->id = $mang[$i];
							$ht->xoa();
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
			$ht->id = $_GET['id'];
			$ht->xoa();
			?>
			<script language="javascript">
			alert('Xóa hỗ trợ trực tuyến thành công.');
			history.back();
			</script>
			<?php
	
		}
		if(isset($_GET['act']) and $_GET['act']=='sua')//Sua
		{
			$ht->id = $_GET['id'];
			$mang = $ht->laysua();
			include('tmpl/sua.php');
			if(isset($_POST['capnhap']))
			{		
				$ht->id = $mang[0];
				$ht->tieude  = $_POST['tieude'];
				$ht->thutu = $_POST['thutu'];
				$ht->yahoo = $_POST['yahoo'];
				$ht->skype = $_POST['skype'];
				$ht->trangthai = $_POST['trangthai'];
				if($ht->sua())
				{
					?>
					<script language="javascript">
					alert('Sửa hỗ trợ trực tuyến  thành công.');
					window.location='index.php?page=hotro';
					</script>
					<?php
				}
				else
				{
					?>
					<script language="javascript">
					alert('Sửa hỗ trợ trực tuyến không thành công.');
					</script>
					<?php
				}
			}
		}
?>