<?php
		include('../config/db_connect.php');
		include('helper.php');
		include('phantrang.php');
		$sl = new logo();
		if(isset($_GET['act']) and $_GET['act']=='them')//Them moi 
		{
			include('tmpl/them.php');
			if(isset($_POST['them']))
			{
				$sl->url = $_POST['url'];
				$sl->thutu = $_POST['thutu'];
				$sl->trangthai = $_POST['trangthai'];
				if($_FILES['file']['type']=='image/jpeg' || $_FILES['file']['type']=='image/gif' || $_FILES['file']['type']=='image/png')
				{
					if(($_FILES['file']['error']>1))
					{
						echo $_FILES['file']['error'];
					}
					else
					{
							move_uploaded_file($_FILES['file']['tmp_name'],'../data/logo/'.$_FILES['file']['name']);
							$sl->hinhanh = $_FILES['file']['name'];
							if($sl->them())
							{
								?>
                                <script language="javascript">
								alert('Thêm logo show thành công.');
								window.location='index.php?page=logo';
								</script>
                                <?php
							}
							else
							{
								?>
                                <script language="javascript">
								alert('Thêm logo show không thành công.');
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
				$count = mysql_num_rows(mysql_query("SELECT * from logo where status='$trangthai'"));
				$page = findpages($count,$limit);
				$sql = "SELECT * from logo where status='$trangthai' order by orders ASC limit $start,$limit";
				$mang = $sl->quanly($sql);
				$chuoi ='index.php?page=logo&xemtrangthai='.$trangthai;
			}
			else
			{
				$limit =10;
				$start =  findstart($limit);
				$count = mysql_num_rows(mysql_query("SELECT * from logo"));
				$page = findpages($count,$limit);
				$sql = "SELECT * from logo order by orders ASC limit $start,$limit";
				$mang = $sl->quanly($sql);
				$chuoi ='index.php?page=logo';
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
							mysql_query("update logo set thutu='$v' where id='$k'");
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
				$sl->id = $_GET['id'];
				$sl->trangthai = $_GET['trangthai'];
				if($sl->capnhaptrangthai())
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
				if(isset($_POST['sl']))
				{
					$mang = $_POST['sl'];
					$n=count($mang);
					if($n>0)
					{
						for($i=0;$i<$n;$i++)
						{
							$sl->id = $mang[$i];
							$sl->xoa();
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
			$sl->id = $_GET['id'];
			$sl->xoa();
			?>
			<script language="javascript">
			alert('Xóa logo show thành công.');
			history.back();
			</script>
			<?php
	
		}
		if(isset($_GET['act']) and $_GET['act']=='sua')//Sua
		{
			$sl->id = $_GET['id'];
			$mang = $sl->laysua();
			include('tmpl/sua.php');
			if(isset($_POST['capnhap']))
			{
				if($_FILES['filesua']['name']=="")
				{
					$sl->id = $mang[0];
					$sl->url  = $_POST['url'];
					$sl->thutu = $_POST['thutu'];
					$sl->trangthai = $_POST['trangthai'];
					$sl->hinhanh ='';
					if($sl->sua())
					{
						?>
						<script language="javascript">
						alert('Sửa logo show  thành công.');
						window.location='index.php?page=logo';
						</script>
						<?php
					}
					else
					{
						?>
						<script language="javascript">
						alert('Sửa logo show không thành công.');
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
								move_uploaded_file($_FILES['filesua']['tmp_name'],'../data/logo/'.$_FILES['filesua']['name']);
								$sl->id = $mang[0];
								$sl->hinhanh = $_FILES['filesua']['name'];
								$sl->url  = $_POST['url'];
								$sl->thutu = $_POST['thutu'];
								$sl->trangthai = $_POST['trangthai'];
								if($sl->sua())
								  {
									  ?>
									  <script language="javascript">
									  alert('Sửa logo show thành công.');
									  window.location='index.php?page=logo';
									  </script>
									  <?php
								  }
								  else
								  {
									  ?>
									  <script language="javascript">
									  alert('Sửa logo show không thành công.');
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