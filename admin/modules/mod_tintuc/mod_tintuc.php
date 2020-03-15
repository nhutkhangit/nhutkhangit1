<?php
		include('../config/database.php');
		include('helper.php');
		include('phantrang.php');
		$tt = new tintuc();
		$dscm = $tt->dschuyenmuc();
		if(isset($_GET['act']) and $_GET['act']=='them')//Them moi 
		{
			include('tmpl/them.php');
			if(isset($_POST['them']))
			{
				$tt->tieude = $_POST['tieude'];
				$tt->tags = $_POST['tags'];
				$tt->keyword = $_POST['keyword'];
				$tt->hientrangchu = $_POST['hientrangchu'];
				$tt->idcm = $_POST['idcm'];
				$tt->thutu = $_POST['thutu'];
				$tt->trangthai = $_POST['trangthai'];
				$tt->tomtat = $_POST['tomtat'];
				$tt->noidung = $_POST['noidung'];
				$tt->luotxem = '0';
				$now = getdate();
				$tt->ngaydang = $now["mday"] . "-" . $now["mon"] . "-" . $now["year"];
				if($_FILES['file']['type']=='image/jpeg' || $_FILES['file']['type']=='image/gif' || $_FILES['file']['type']=='image/png')
				{
					if(($_FILES['file']['error']>1))
					{
						echo $_FILES['file']['error'];
					}
					else
					{
						move_uploaded_file($_FILES['file']['tmp_name'],'../data/tintuc/'.$_FILES['file']['name']);
						$tt->hinhanh = $_FILES['file']['name'];
						if($tt->them())
						{
							?>
							<script language="javascript">
							alert('Thêm mới tin tức  thành công.');
							window.location='index.php?page=tintuc';
							</script>
							<?php
						}
						else
						{
							?>
							<script language="javascript">
							alert('Thêm tin tức không thành công.');
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
			if( isset($_GET['xemtrangthai']) || isset($_GET['xemhientrangchu']) || isset($_GET['xemchuyenmuc']))
			{
				if(isset($_GET['xemtrangthai']) and $_GET['xemtrangthai']!='')
				{
					$trangthai = $_GET['xemtrangthai'];
					$limit =30;
					$start =  findstart($limit);
					$count = mysql_num_rows(mysql_query("select * from tintuc where trangthai='$trangthai'"));
					$page = findpages($count,$limit);
					$sql = "select * from tintuc where trangthai='$trangthai' order by thutu ASC limit $start,$limit";
					$mang = $tt->quanly($sql);
					$chuoi ='index.php?page=tintuc&xemtrangthai='.$trangthai;
				}
				if(isset($_GET['xemhientrangchu']) and $_GET['xemhientrangchu']!='')
				{
					$hientrangchu = $_GET['xemhientrangchu'];
					$limit =30;
					$start =  findstart($limit);
					$count = mysql_num_rows(mysql_query("select * from tintuc where hientrangchu='$hientrangchu'"));
					$page = findpages($count,$limit);
					$sql = "select * from tintuc where hientrangchu='$hientrangchu' order by thutu ASC limit $start,$limit";
					$mang = $tt->quanly($sql);
					$chuoi ='index.php?page=tintuc&xemhientrangchu='.$hientrangchu;
				}
				if(isset($_GET['xemchuyenmuc']) and $_GET['xemchuyenmuc']!='')
				{
					$idcm = $_GET['xemchuyenmuc'];
					$limit =30;
					$start =  findstart($limit);
					$count = mysql_num_rows(mysql_query("select * from tintuc where idcm='$idcm'"));
					$page = findpages($count,$limit);
					$sql = "select * from tintuc where idcm='$idcm' order by thutu ASC limit $start,$limit";
					$mang = $tt->quanly($sql);
					$chuoi ='index.php?page=tintuc&xemchuyenmuc='.$idcm;
				}
				
			}
			else
			{
				$limit =30;
				$start =  findstart($limit);
				$count = mysql_num_rows(mysql_query("select * from tintuc"));
				$page = findpages($count,$limit);
				$sql = "select * from tintuc order by thutu ASC limit $start,$limit";
				$mang = $tt->quanly($sql);
				$chuoi ='index.php?page=tintuc';
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
							mysql_query("update tintuc set thutu='$v' where id='$k'");
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
				$tt->id = $_GET['id'];
				$tt->trangthai = $_GET['trangthai'];
				if($tt->capnhaptrangthai())
				{
					?>
					<script language="javascript">
					history.back();
					</script>
					<?php
				}
			}
			if(isset($_GET['id']) and isset($_GET['idcm']))//Cap nhap chuyen muc
			{
				$tt->id = $_GET['id'];
				$tt->idcm = $_GET['idcm'];
				if($tt->capnhapchuyenmuc())
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
				$tt->id = $_GET['id'];
				$tt->hientrangchu = $_GET['hientrangchu'];
				if($tt->capnhaphientrangchu())
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
				if(isset($_POST['tt']))
				{
					$mang = $_POST['tt'];
					$n=count($mang);
					if($n>0)
					{
						for($i=0;$i<$n;$i++)
						{
							$tt->id = $mang[$i];
							$tt->xoa();
							
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
			$tt->id = $_GET['id'];
			
				$tt->xoa();
				?>
				<script language="javascript">
				alert('Xóa tin tức thành công.');
				history.back();
				</script>
				<?php
	
	
		}
		if(isset($_GET['act']) and $_GET['act']=='sua')//Sua
		{
			$tt->id = $_GET['id'];
			$mang = $tt->laysua();
			include('tmpl/sua.php');
			if(isset($_POST['capnhap']))
			{	
				if($_FILES['filesua']['name']=="")
				{
					$tt->id = $mang[0];
					$tt->tieude = $_POST['tieude'];
					$tt->tags = $_POST['tags'];
					$tt->keyword = $_POST['keyword'];
					$tt->hientrangchu = $_POST['hientrangchu'];
					$tt->idcm = $_POST['idcm'];
					$tt->thutu = $_POST['thutu'];
					$tt->trangthai = $_POST['trangthai'];
					$tt->tomtat = $_POST['tomtat'];
					$tt->noidung = $_POST['noidung'];
					if($tt->sua())
					{
						?>
						<script language="javascript">
						alert('Sửa tin tức thành công.');
						window.location='index.php?page=tintuc';
						</script>
						<?php
					}
					else
					{
						?>
						<script language="javascript">
						alert('Sửa tin tức không thành công.');
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
								move_uploaded_file($_FILES['filesua']['tmp_name'],'../data/tintuc/'.$_FILES['filesua']['name']);
								$tt->hinhanh = $_FILES['filesua']['name'];
								$tt->id = $mang[0];
								$tt->tieude = $_POST['tieude'];
								$tt->tags = $_POST['tags'];
								$tt->keyword = $_POST['keyword'];
								$tt->hientrangchu = $_POST['hientrangchu'];
								$tt->idcm = $_POST['idcm'];
								$tt->thutu = $_POST['thutu'];
								$tt->trangthai = $_POST['trangthai'];
								$tt->tomtat = $_POST['tomtat'];
								$tt->noidung = $_POST['noidung'];
								if($tt->sua())
								{
									?>
									<script language="javascript">
									alert('Sửa tin tức thành công.');
									window.location='index.php?page=tintuc';
									</script>
									<?php
								}
								else
								{
									?>
									<script language="javascript">
									alert('Sửa tin tức không thành công.');
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