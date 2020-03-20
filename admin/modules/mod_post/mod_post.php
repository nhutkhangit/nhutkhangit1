<?php
		include_once("../config/config.php");
		include('phantrang.php');
		include_once("helper.php");
		$bv = new baiviet();
		$bv->connect_db();
		$mangdm = $bv->dsdanhmuc();
		if(isset($_GET['act']) and $_GET['act']=='them')//Them moi 
		{
			include('tmpl/them.php');
			if(isset($_POST['them']))
			{
				$bv->tieude = $_POST['tieude'];
				$bv->thutu = $_POST['thutu'];
				$bv->tags = $_POST['tags'];
				$bv->trangthai = $_POST['trangthai'];
				$bv->hientrangchu = $_POST['hientrangchu'];
				$bv->noidung = $_POST['noidung'];
				$bv->iddm = $_POST['iddm'];
				$bv->keyword = $_POST['keyword'];
				$bv->tomtat = $_POST['tomtat'];
				$bv->luotxem = '0';
				$bv->ngaytao = date('Y-m-d H:i:s', time());
				if($_FILES['file']['type']=='image/jpeg' || $_FILES['file']['type']=='image/gif' || $_FILES['file']['type']=='image/png')
				{
					if(($_FILES['file']['error']>1))
					{
						echo $_FILES['file']['error'];
					}
					else
					{
							move_uploaded_file($_FILES['file']['tmp_name'],'../uploads/images/post/'.$_FILES['file']['name']);
							chmod(ABS_PATH . 'post', 0666);
							$bv->hinhanh = $_FILES['file']['name'];
							if($bv->them())
							{
								?>
								<script language="javascript">
								alert('Thêm mới bài viết  thành công.');
								window.location='index.php?page=post';
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
				else
				{
					?>
                    <script language="javascript">
					alert('Không đúng định dạng ảnh.');
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
					$count = $bv->nk_count("select * from baiviet where trangthai='$trangthai'");
					$page = findpages($count,$limit);
					$sql = "select * from baiviet where trangthai='$trangthai' order by thutu ASC limit $start,$limit";
					$mang = $bv->quanly($sql);
					$chuoi ='index.php?page=post&xemtrangthai='.$trangthai;
				}
				if(isset($_GET['xemdanhmuc']) and $_GET['xemdanhmuc']!='')
				{
					$iddm = $_GET['xemdanhmuc'];
					$limit =30;
					$start =  findstart($limit);
					$count = $bv->nk_count("SELECT * from baiviet where iddm='$iddm'");
					$page = findpages($count,$limit);
					$sql = "select * from baiviet where iddm='$iddm' order by thutu ASC limit $start,$limit";
					$mang = $bv->quanly($sql);
					$chuoi ='index.php?page=post&xemdanhmuc='.$iddm;
				}
				if(isset($_GET['xemhientrangchu']) and $_GET['xemhientrangchu']!='')
				{
					$hientrangchu = $_GET['xemhientrangchu'];
					$limit =30;
					$start =  findstart($limit);
					$count = $bv->nk_count("SELECT * from baiviet where hientrangchu='$hientrangchu'");
					$page = findpages($count,$limit);
					$sql = "select * from baiviet where hientrangchu='$hientrangchu' order by thutu ASC limit $start,$limit";
					$mang = $bv->quanly($sql);
					$chuoi ='index.php?page=post&xemhientrangchu='.$hientrangchu;
				}
				
				
			}
			else
			{
				$limit =30;
				$start =  findstart($limit);
				$count = $bv->nk_count("SELECT * from baiviet");
				$page = findpages($count,$limit);
				$sql = "SELECT * from baiviet order by thutu ASC limit $start,$limit";
				$mang = $bv->quanly($sql);
				$chuoi ='index.php?page=post';
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
							// $bv->excute("UPDATE baiviet set thutu='$v' where idbv='$k'");
							$slq = "UPDATE baiviet set thutu='$v' where idbv='$k'";
							$bv->update_status($slq);
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
				$bv->idbv = $_GET['id'];
				$bv->trangthai = $_GET['trangthai'];
				if($bv->capnhaptrangthai())
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
				$bv->idbv = $_GET['id'];
				$bv->hientrangchu = $_GET['hientrangchu'];
				if($bv->capnhaphientrangchu())
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
				$bv->idbv = $_GET['id'];
				$bv->iddm = $_GET['iddm'];
				if($bv->capnhapdanhmuc())
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
							$bv->idbv = $mang[$i];
							$bv->xoa();
							
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
			$bv->idbv = $_GET['id'];
			$bv->xoa();
			?>
			<script language="javascript">
			alert('Xóa bài viết thành công.');
			history.back();
			</script>
			<?php
		}
		if(isset($_GET['act']) and $_GET['act']=='sua')//Sua
		{
			$bv->idbv = $_GET['id'];
			$mang = $bv->laysua();
			include('tmpl/sua.php');
			if(isset($_POST['capnhap']))
			{	
				if($_FILES['filesua']['name']=="")
				{
					$bv->idbv = $mang[0];
					$bv->tieude  = $_POST['tieude'];
					$bv->thutu = $_POST['thutu'];
					$bv->tags = $_POST['tags'];
					$bv->tomtat = $_POST['tomtat'];
					$bv->trangthai = $_POST['trangthai'];
					$bv->hientrangchu = $_POST['hientrangchu'];
					$bv->noidung = $_POST['noidung'];
					$bv->keyword = $_POST['keyword'];
					$bv->iddm = $_POST['iddm'];
					if($bv->sua())
					{
						?>
						<script language="javascript">
						alert('Sửa bài viết thành công.');
						window.location='index.php?page=post';
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
							$bv->hinhanh = $_FILES['filesua']['name'];
							$bv->idbv = $mang[0];
							$bv->tieude  = $_POST['tieude'];
							$bv->thutu = $_POST['thutu'];
							$bv->tags = $_POST['tags'];
							$bv->tomtat = $_POST['tomtat'];
							$bv->trangthai = $_POST['trangthai'];
							$bv->hientrangchu = $_POST['hientrangchu'];
							$bv->noidung = $_POST['noidung'];
							$bv->keyword = $_POST['keyword'];
							$bv->iddm = $_POST['iddm'];
							if($bv->sua())
							{
								?>
								<script language="javascript">
								alert('Sửa bài viết thành công.');
								window.location='index.php?page=post';
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