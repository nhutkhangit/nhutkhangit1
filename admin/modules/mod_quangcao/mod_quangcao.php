<?php
		include('../config/database.php');
		include('helper.php');
		include('phantrang.php');
		$qc = new quangcao();
		if(isset($_GET['act']) and $_GET['act']=='them')//Them moi 
		{
			include('tmpl/them.php');
			if(isset($_POST['them']))
			{
				$qc->url = $_POST['url'];
				$qc->thutu = $_POST['thutu'];
				$qc->trangthai = $_POST['trangthai'];
				if($_FILES['file']['type']=='application/x-shockwave-flash' || $_FILES['file']['type']=='image/jpeg' || $_FILES['file']['type']=='image/gif' || $_FILES['file']['type']=='image/png')
				{
					if(($_FILES['file']['error']>1))
					{
						echo $_FILES['file']['error'];
					}
					else
					{
							move_uploaded_file($_FILES['file']['tmp_name'],'../data/quangcao/'.$_FILES['file']['name']);
							$qc->hinhanh = $_FILES['file']['name'];
							if($qc->them())
							{
								?>
                                <script language="javascript">
								alert('Thêm quảng cáo thành công.');
								window.location='index.php?page=quangcao';
								</script>
                                <?php
							}
							else
							{
								?>
                                <script language="javascript">
								alert('Thêm quảng cáo không thành công.');
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
			if(isset($_GET['xemtrangthai']) and $_GET['xemtrangthai']!='')
			{
				$trangthai = $_GET['xemtrangthai'];
				$limit =10;
				$start =  findstart($limit);
				$count = mysql_num_rows(mysql_query("select * from quangcao where trangthai='$trangthai'"));
				$page = findpages($count,$limit);
				$sql = "select * from quangcao where trangthai='$trangthai' order by thutu ASC limit $start,$limit";
				$mang = $qc->quanly($sql);
				$chuoi ='index.php?page=quangcao&xemtrangthai='.$trangthai;
			}
			else
			{
				$limit =10;
				$start =  findstart($limit);
				$count = mysql_num_rows(mysql_query("select * from quangcao"));
				$page = findpages($count,$limit);
				$sql = "select * from quangcao order by thutu ASC limit $start,$limit";
				$mang = $qc->quanly($sql);
				$chuoi ='index.php?page=quangcao';
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
							mysql_query("update quangcao set thutu='$v' where id='$k'");
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
				$qc->id = $_GET['id'];
				$qc->trangthai = $_GET['trangthai'];
				if($qc->capnhaptrangthai())
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
				if(isset($_POST['qc']))
				{
					$mang = $_POST['qc'];
					$n=count($mang);
					if($n>0)
					{
						for($i=0;$i<$n;$i++)
						{
							$qc->id = $mang[$i];
							$qc->xoa();
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
			$qc->id = $_GET['id'];
			$qc->xoa();
			?>
			<script language="javascript">
			alert('Xóa slide show thành công.');
			history.back();
			</script>
			<?php
	
		}
		if(isset($_GET['act']) and $_GET['act']=='sua')//Sua
		{
			$qc->id = $_GET['id'];
			$mang = $qc->laysua();
			include('tmpl/sua.php');
			if(isset($_POST['capnhap']))
			{
				if($_FILES['filesua']['name']=="")
				{
					$qc->id = $mang[0];
					$qc->url  = $_POST['url'];
					$qc->thutu = $_POST['thutu'];
					$qc->trangthai = $_POST['trangthai'];
					$qc->hinhanh ='';
					if($qc->sua())
					{
						?>
						<script language="javascript">
						alert('Sửa quangcao  thành công.');
						window.location='index.php?page=quangcao';
						</script>
						<?php
					}
					else
					{
						?>
						<script language="javascript">
						alert('Sửa quảng cáo không thành công.');
						</script>
						<?php
					}
				}
				else
				{
					if( $_FILES['filesua']['type']=='application/x-shockwave-flash' || $_FILES['filesua']['type']=='image/jpeg' || $_FILES['filesua']['type']=='image/gif' || $_FILES['filesua']['type']=='image/png')
					{
							if(($_FILES['filesua']['error']>1))
							{
								echo $_FILES['filesua']['error'];
							}
							else
							{
								move_uploaded_file($_FILES['filesua']['tmp_name'],'../data/quangcao/'.$_FILES['filesua']['name']);
								$qc->id = $mang[0];
								$qc->hinhanh = $_FILES['filesua']['name'];
								$qc->url  = $_POST['url'];
								$qc->thutu = $_POST['thutu'];
								$qc->trangthai = $_POST['trangthai'];
								if($qc->sua())
								  {
									  ?>
									  <script language="javascript">
									  alert('Sửa quảng cáo thành công.');
									  window.location='index.php?page=quangcao';
									  </script>
									  <?php
								  }
								  else
								  {
									  ?>
									  <script language="javascript">
									  alert('Sửa quảng cáo không thành công.');
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