<?php
		include_once("../config/config.php");
		include('phantrang.php');
		include_once("helper.php");
		$vd = new nk_video();
		$vd->connect_db();
		$mangdm = $vd->dsdanhmuc();
		if(isset($_GET['act']) and $_GET['act']=='them')//Them moi 
		{
			include('tmpl/them.php');
			if(isset($_POST['them'])){
				$vd->tieude = $_POST['tieude'];				
				$vd->trangthai = $_POST['trangthai'];				
				$vd->noidung = $_POST['noidung'];
				$vd->link = $_POST['link'];
				$vd->iddm = $_POST['iddm'];				
				$vd->tomtat = $_POST['tomtat'];
				$vd->ngaytao = date('Y-m-d H:i:s', time());
				if($vd->them()){
				?>
				<script language="javascript">
				alert('Thêm mới bài viết  thành công.');
				window.location='index.php?page=video';
				</script>
				<?php
				}
				else
				{
					?>
					<script language="javascript">
					alert('Thêm bài viết không thành công.');
					</script>
					<?php
				}
			}
		}
		if(!isset($_GET['act']))//Quan ly 
		{
			if( isset($_GET['xemtrangthai']) || isset($_GET['xemdanhmuc']) || isset($_GET['xemhientrangchu']))
			{
				if(isset($_GET['xemtrangthai']) and $_GET['xemtrangthai']!='')
				{
					$trangthai = $_GET['xemtrangthai'];
					$limit =30;
					$start =  findstart($limit);
					$count = $vd->nk_count("SELECT * from nk_video where trangthai='$trangthai'");
					$page = findpages($count,$limit);
					$sql = "SELECT * from nk_video where trangthai = '$trangthai' order by id ASC limit $start, $limit";
					$mang = $vd->quanly($sql);
					$chuoi ='index.php?page=video&xemtrangthai='.$trangthai;
				}
				if(isset($_GET['xemdanhmuc']) and $_GET['xemdanhmuc']!='')
				{
					$iddm = $_GET['xemdanhmuc'];
					$limit =30;
					$start =  findstart($limit);
					$count = $vd->nk_count("SELECT * from nk_video where iddm ='$iddm'");
					$page = findpages($count,$limit);
					$sql = "SELECT * from nk_video where iddm ='$iddm' order by thutu ASC limit $start, $limit";
					$mang = $vd->quanly($sql);
					$chuoi ='index.php?page=video&xemdanhmuc='.$iddm;
				}
				if(isset($_GET['xemhientrangchu']) and $_GET['xemhientrangchu']!='')
				{
					$hientrangchu = $_GET['xemhientrangchu'];
					$limit =30;
					$start =  findstart($limit);
					$count = $vd->nk_count("SELECT * from nk_video where hientrangchu='$hientrangchu'");
					$page = findpages($count,$limit);
					$sql = "SELECT * from nk_video where hientrangchu='$hientrangchu' order by thutu ASC limit $start,$limit";
					$mang = $vd->quanly($sql);
					$chuoi ='index.php?page=video&xemhientrangchu='.$hientrangchu;
				}
			}
			else
			{
				$limit =30;
				$start =  findstart($limit);
				$count = $vd->nk_count("SELECT * from nk_video");
				$page = findpages($count, $limit);
				$sql = "SELECT * from nk_video order by id ASC limit $start,$limit";
				$mang = $vd->quanly($sql);
				$chuoi ='index.php?page=video';
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
							// $vd->excute("UPDATE baiviet set thutu='$v' where idbv='$k'");
							$slq = "UPDATE nk_video set thutu='$v' where idbv='$k'";
							$vd->update_status($slq);
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
				$vd->idbv = $_GET['id'];
				$vd->trangthai = $_GET['trangthai'];
				if($vd->capnhaptrangthai())
				{
					?>
					<script language="javascript">
					history.back();
					</script>
					<?php
				}
			}
			if(isset($_GET['id']) and isset($_GET['hientrangchu']))//Cap nhap hien trang chu
			{
				$vd->idbv = $_GET['id'];
				$vd->hientrangchu = $_GET['hientrangchu'];
				if($vd->capnhaphientrangchu())
				{
					?>
					<script language="javascript">
					history.back();
					</script>
					<?php
				}
			}
			if(isset($_GET['id']) and isset($_GET['iddm']))//Cap nhap danh mục
			{
				$vd->idbv = $_GET['id'];
				$vd->iddm = $_GET['iddm'];
				if($vd->capnhapdanhmuc())
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
				if(isset($_POST['bv']))
				{
					$mang = $_POST['bv'];
					$n=count($mang);
					if($n>0)
					{
						for($i=0;$i<$n;$i++)
						{
							$vd->idbv = $mang[$i];
							$vd->xoa();
							
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
			$vd->idbv = $_GET['id'];
			$vd->xoa();
			?>
			<script language="javascript">
			alert('Xóa bài viết thành công.');
			history.back();
			</script>
			<?php
		}
		if(isset($_GET['act']) and $_GET['act']=='sua')//Sua
		{
			$vd->idbv = $_GET['id'];
			$mang = $vd->laysua();
			include('tmpl/sua.php');
			if(isset($_POST['capnhap']))
			{	
				if($_FILES['filesua']['name']=="")
				{
					$vd->idbv = $mang[0];
					$vd->tieude  = $_POST['tieude'];
					$vd->thutu = $_POST['thutu'];
					$vd->tags = $_POST['tags'];
					$vd->tomtat = $_POST['tomtat'];
					$vd->trangthai = $_POST['trangthai'];
					$vd->hientrangchu = $_POST['hientrangchu'];
					$vd->noidung = $_POST['noidung'];
					$vd->keyword = $_POST['keyword'];
					$vd->iddm = $_POST['iddm'];
					if($vd->sua())
					{
						?>
						<script language="javascript">
						alert('Sửa bài viết thành công.');
						window.location='index.php?page=video';
						</script>
						<?php
					}
					else
					{
						?>
						<script language="javascript">
						alert('Sửa bài viết không thành công.');
						</script>
						<?php
					}
				}
				else
				{
					if( $_FILES['filesua']['type']=='image/jpeg' || $_FILES['filesua']['type']=='image/gif' || $_FILES['filesua']['type']=='image/png')
					{
						if(($_FILES['filesua']['error']>1))
						{
							echo $_FILES['filesua']['error'];
						}
						else
						{
							move_uploaded_file($_FILES['filesua']['tmp_name'],'../uploads/images/post/'.$_FILES['filesua']['name']);
							$vd->hinhanh = $_FILES['filesua']['name'];
							$vd->idbv = $mang[0];
							$vd->tieude  = $_POST['tieude'];
							$vd->thutu = $_POST['thutu'];
							$vd->tags = $_POST['tags'];
							$vd->tomtat = $_POST['tomtat'];
							$vd->trangthai = $_POST['trangthai'];
							$vd->hientrangchu = $_POST['hientrangchu'];
							$vd->noidung = $_POST['noidung'];
							$vd->keyword = $_POST['keyword'];
							$vd->iddm = $_POST['iddm'];
							if($vd->sua())
							{
								?>
								<script language="javascript">
								alert('Sửa bài viết thành công.');
								window.location='index.php?page=video';
								</script>
								<?php
							}
							else
							{
								?>
								<script language="javascript">
								alert('Sửa bài viết không thành công.');
								</script>
								<?php
							}
						}
					}
					else
					{
						?>
						 <script language="javascript">
						alert('Không đúng định dạng file.');
						</script>
						<?php
					}
				}
			}
		}
?>