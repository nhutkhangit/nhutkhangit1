<?php
		include('../connect.php');
		include('helper.php');
		include('phantrang.php');
		$sl = new type_product();
		if(isset($_GET['act']) and $_GET['act']=='them')//Them moi 
		{
			include('tmpl/them.php');
			if(isset($_POST['them']))
			{
				$sl->url = $_POST['url'];
				$sl->description = $_POST['description'];
				$sl->trangthai = $_POST['trangthai'];
				if($_FILES['file']['type']=='image/jpeg' || $_FILES['file']['type']=='image/gif' || $_FILES['file']['type']=='image/png')
				{
					if(($_FILES['file']['error']>1))
					{
						echo $_FILES['file']['error'];
					}
					else
					{
							move_uploaded_file($_FILES['file']['tmp_name'],'../../upload/slider/'.$_FILES['file']['name']);
							$sl->hinhanh = $_FILES['file']['name'];
							if($sl->them())
							{
								?>
                                <script language="javascript">
								alert('Thêm type_product show thành công.');
								window.location='index.php?page=type_product';
								</script>
                                <?php
							}
							else
							{
								?>
                                <script language="javascript">
								alert('Thêm type_product show không thành công.');
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
				$count = mysql_num_rows(mysql_query("SELECT * from type_product where status='$trangthai'"));
				// $count = mysql_num_rows(mysql_query("SELECT * from type_product where status=1"));
				$page = findpages($count,$limit);
				$sql = "SELECT * from type_product where status='$trangthai' order by orders ASC limit $start,$limit";
				// $sql = "SELECT * from type_product where status=1 order by id ASC limit $start,$limit";
				$mang = $sl->quanly($sql);
				$chuoi ='index.php?page=type_product&xemtrangthai='.$trangthai;
			}
			else
			{
				$limit =10;
				$start =  findstart($limit);
				$count = mysql_num_rows(mysql_query("SELECT * from type_product"));
				$page = findpages($count,$limit);
				$sql = "SELECT * from type_product order by id ASC limit $start,$limit";
				$mang = $sl->quanly($sql);
				$chuoi ='index.php?page=type_product';
			}
			include('tmpl/quanly.php');
			if(isset($_POST['capnhap']))//cap nhap thu tu
			{
				if(isset($_POST['description']))
				{
					foreach($_POST['description'] as $k=>$v)
					{
						if($v>0 && is_numeric($v))
						{
							mysql_query("update type_product set description='$v' where id='$k'");
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
			alert('Xóa type_product show thành công.');
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
					$sl->name  = $_POST['name'];
					$sl->description = $_POST['description'];
					$sl->trangthai = $_POST['trangthai'];
					$sl->hinhanh ='';
					if($sl->sua())
					{
						?>
						<script language="javascript">
						alert('Sửa type_product show  thành công.');
						window.location='index.php?page=car-type';
						</script>
						<?php
					}
					else
					{
						?>
						<script language="javascript">
						alert('Sửa type_product show không thành công.');
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
								move_uploaded_file($_FILES['filesua']['tmp_name'],'../../upload/slider/'.$_FILES['filesua']['name']);
								$sl->id = $mang[0];
								$sl->hinhanh = $_FILES['filesua']['name'];
								$sl->url  = $_POST['url'];
								$sl->description = $_POST['description'];
								$sl->trangthai = $_POST['trangthai'];
								if($sl->sua())
								  {
									  ?>
									  <script language="javascript">
									  alert('Sửa type_product show thành công.');
									  window.location='index.php?page=car-type';
									  </script>
									  <?php
								  }
								  else
								  {
									  ?>
									  <script language="javascript">
									  alert('Sửa type_product show không thành công.');
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