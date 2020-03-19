<?php
		include('../connect.php');
		include('helper.php');
		include('phantrang.php');
		$sp = new sanpham();
		if(isset($_GET['act']) and $_GET['act']=='them')//Them moi 
		{
			include('tmpl/them.php');
			if(isset($_POST['them']))
			{
				$sp->tensp = $_POST['tensp'];
				$sp->gia = $_POST['gia'];
				$sp->tomtat = $_POST['tomtat'];
				$sp->gioithieu = $_POST['gioithieu'];
				$sp->tinhnanghoatdong = $_POST['tinhnanghoatdong'];
				$sp->mausac = $_POST['mausac'];
				$sp->kieudang = $_POST['kieudang'];
				$sp->noithat = $_POST['noithat'];
				$sp->phukienchinhhieu = $_POST['phukienchinhhieu'];
				$sp->antoan = $_POST['antoan'];
				$sp->thongsokythuat = $_POST['thongsokythuat'];
				$sp->giaca = $_POST['giaca'];
				$sp->keyword = $_POST['keyword'];
				$sp->luotxem = '0';
				$sp->thutu = $_POST['thutu'];
				$sp->trangthai = $_POST['trangthai'];
				if(($_FILES['file']['type']=='image/jpeg' || $_FILES['file']['type']=='image/gif' || $_FILES['file']['type']=='image/png') and ($_FILES['file1']['type']=='image/jpeg' || $_FILES['file1']['type']=='image/gif' || $_FILES['file1']['type']=='image/png'))
				{
					if(($_FILES['file']['error']>1) and ($_FILES['file1']['error']>1))
					{
						echo $_FILES['file']['error'];
						echo $_FILES['file1']['error'];
					}
					else
					{
							move_uploaded_file($_FILES['file']['tmp_name'],'../data/sanpham/'.$_FILES['file']['name']);
							move_uploaded_file($_FILES['file1']['tmp_name'],'../data/sanpham/'.$_FILES['file1']['name']);
							$sp->hinhanh = $_FILES['file']['name'];
							$sp->hinhanhdd = $_FILES['file1']['name'];
							if($sp->them())
							{
								?>
								<script language="javascript">
								alert('Thêm mới sản phẩm thành công.');
								window.location='index.php?page=sanpham';
								</script>
								<?php
							}
							else
							{
								?>
								<script language="javascript">
								alert('Thêm sản phẩm không thành công.');
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
			if( isset($_GET['xemtrangthai']))
			{
				if(isset($_GET['xemtrangthai']) and $_GET['xemtrangthai']!='')
				{
					$trangthai = $_GET['xemtrangthai'];
					$limit =30;
					$start =  findstart($limit);
					$count = mysql_num_rows(mysql_query("select * from sanpham where trangthai='$trangthai'"));
					$page = findpages($count,$limit);
					$sql = "select * from sanpham where trangthai='$trangthai' order by thutu ASC limit $start,$limit";
					$mang = $sp->quanly($sql);
					$chuoi ='index.php?page=sanpham&xemtrangthai='.$trangthai;
				}
			}
			else
			{
				$limit =30;
				$start =  findstart($limit);
				$count = mysql_num_rows(mysql_query("select * from sanpham"));
				$page = findpages($count,$limit);
				$sql = "select * from sanpham order by thutu ASC limit $start,$limit";
				$mang = $sp->quanly($sql);
				$chuoi ='index.php?page=sanpham';
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
							mysql_query("update sanpham set thutu='$v' where idsp='$k'");
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
				$sp->idsp = $_GET['id'];
				$sp->trangthai = $_GET['trangthai'];
				if($sp->capnhaptrangthai())
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
				if(isset($_POST['sp']))
				{
					$mang = $_POST['sp'];
					$n=count($mang);
					if($n>0)
					{
						for($i=0;$i<$n;$i++)
						{
							$sp->idsp = $mang[$i];
							$sp->xoa();
							
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
			$sp->idsp = $_GET['id'];
			$sp->xoa();
			?>
			<script language="javascript">
			alert('Xóa sản phẩm thành công.');
			history.back();
			</script>
			<?php
		}
		if(isset($_GET['act']) and $_GET['act']=='sua')//Sua
		{
			$sp->idsp = $_GET['id'];
			$mang = $sp->laysua();
			include('tmpl/sua.php');
			if(isset($_POST['capnhap']))
			{	
				if($_FILES['filesua']['name']=="")//Neu khong thay doi hinh anh
				{
					if($_FILES['filesua1']['name']=="")//Neu hinh anh sologan khong thay doi
					{
						$sp->idsp = $mang[0];
						$sp->tensp = $_POST['tensp'];
						$sp->gia = $_POST['gia'];
						$sp->tomtat = $_POST['tomtat'];
						$sp->gioithieu = $_POST['gioithieu'];
						$sp->tinhnanghoatdong = $_POST['tinhnanghoatdong'];
						$sp->mausac = $_POST['mausac'];
						$sp->kieudang = $_POST['kieudang'];
						$sp->noithat = $_POST['noithat'];
						$sp->phukienchinhhieu = $_POST['phukienchinhhieu'];
						$sp->antoan = $_POST['antoan'];
						$sp->thongsokythuat = $_POST['thongsokythuat'];
						$sp->giaca = $_POST['giaca'];
						$sp->keyword = $_POST['keyword'];
						$sp->thutu = $_POST['thutu'];
						$sp->trangthai = $_POST['trangthai'];
						if($sp->sua())
						{
							?>
							<script language="javascript">
							alert('Sửa sản phẩm thành công.');
							window.location='index.php?page=sanpham';
							</script>
							<?php
						}
						else
						{
							?>
							<script language="javascript">
							alert('Sửa sản phẩm không thành công.');
							</script>
							<?php
						}
					}
					else//Neu hinh anh sologan thay doi
					{
						if( $_FILES['filesua1']['type']=='image/jpeg' || $_FILES['filesua1']['type']=='image/gif' || $_FILES['filesua1']['type']=='image/png')
						{
							if(($_FILES['filesua1']['error']>1))
							{
								echo $_FILES['filesua1']['error'];
							}
							else
							{
								move_uploaded_file($_FILES['filesua1']['tmp_name'],'../data/sanpham/'.$_FILES['filesua1']['name']);
								$sp->hinhanhdd = $_FILES['filesua1']['name'];
								$sp->idsp = $mang[0];
								$sp->tensp = $_POST['tensp'];
								$sp->gia = $_POST['gia'];
								$sp->tomtat = $_POST['tomtat'];
								$sp->gioithieu = $_POST['gioithieu'];
								$sp->tinhnanghoatdong = $_POST['tinhnanghoatdong'];
								$sp->mausac = $_POST['mausac'];
								$sp->kieudang = $_POST['kieudang'];
								$sp->noithat = $_POST['noithat'];
								$sp->phukienchinhhieu = $_POST['phukienchinhhieu'];
								$sp->antoan = $_POST['antoan'];
								$sp->thongsokythuat = $_POST['thongsokythuat'];
								$sp->giaca = $_POST['giaca'];
								$sp->keyword = $_POST['keyword'];
								$sp->thutu = $_POST['thutu'];
								$sp->trangthai = $_POST['trangthai'];
								if($sp->sua())
								{
									?>
									<script language="javascript">
									alert('Sửa sản phẩm thành công.');
									window.location='index.php?page=sanpham';
									</script>
									<?php
								}
								else
								{
									?>
									<script language="javascript">
									alert('Sửa sản phẩm không thành công.');
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
				else//Neu thay doi hinh anh
				{
					if($_FILES['filesua1']['name']=="")//Neu khong thay doi hinh anh sologan
					{
						if( $_FILES['filesua']['type']=='image/jpeg' || $_FILES['filesua']['type']=='image/gif' || $_FILES['filesua']['type']=='image/png')
						{
							if(($_FILES['filesua']['error']>1))
							{
								echo $_FILES['filesua']['error'];
							}
							else
							{
								move_uploaded_file($_FILES['filesua']['tmp_name'],'../data/sanpham/'.$_FILES['filesua']['name']);
								$sp->hinhanh = $_FILES['filesua']['name'];
								$sp->idsp = $mang[0];
								$sp->tensp = $_POST['tensp'];
								$sp->gia = $_POST['gia'];
								$sp->tomtat = $_POST['tomtat'];
								$sp->gioithieu = $_POST['gioithieu'];
								$sp->tinhnanghoatdong = $_POST['tinhnanghoatdong'];
								$sp->mausac = $_POST['mausac'];
								$sp->kieudang = $_POST['kieudang'];
								$sp->noithat = $_POST['noithat'];
								$sp->phukienchinhhieu = $_POST['phukienchinhhieu'];
								$sp->antoan = $_POST['antoan'];
								$sp->thongsokythuat = $_POST['thongsokythuat'];
								$sp->giaca = $_POST['giaca'];
								$sp->keyword = $_POST['keyword'];
								$sp->thutu = $_POST['thutu'];
								$sp->trangthai = $_POST['trangthai'];
								if($sp->sua())
								{
									?>
									<script language="javascript">
									alert('Sửa sản phẩm thành công.');
									window.location='index.php?page=sanpham';
									</script>
									<?php
								}
								else
								{
									?>
									<script language="javascript">
									alert('Sửa sản phẩm không thành công.');
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
					else//Neu thay doi hinh anh sologan
					{
						if(($_FILES['filesua']['type']=='image/jpeg' || $_FILES['filesua']['type']=='image/gif' || $_FILES['filesua']['type']=='image/png') and ($_FILES['filesua1']['type']=='image/jpeg' || $_FILES['filesua1']['type']=='image/gif' || $_FILES['filesua1']['type']=='image/png'))
						{
							if(($_FILES['filesua']['error']>1) and ($_FILES['filesua1']['error']>1))
							{
								echo $_FILES['filesua']['error'];
								echo $_FILES['filesua1']['error'];
							}
							else
							{
									move_uploaded_file($_FILES['filesua']['tmp_name'],'../data/sanpham/'.$_FILES['filesua']['name']);
									move_uploaded_file($_FILES['filesua1']['tmp_name'],'../data/sanpham/'.$_FILES['filesua1']['name']);
									$sp->hinhanh = $_FILES['filesua']['name'];
									$sp->hinhanhdd = $_FILES['filesua1']['name'];
									$sp->idsp = $mang[0];
									$sp->tensp = $_POST['tensp'];
									$sp->gia = $_POST['gia'];
									$sp->tomtat = $_POST['tomtat'];
									$sp->gioithieu = $_POST['gioithieu'];
									$sp->tinhnanghoatdong = $_POST['tinhnanghoatdong'];
									$sp->mausac = $_POST['mausac'];
									$sp->kieudang = $_POST['kieudang'];
									$sp->noithat = $_POST['noithat'];
									$sp->phukienchinhhieu = $_POST['phukienchinhhieu'];
									$sp->antoan = $_POST['antoan'];
									$sp->thongsokythuat = $_POST['thongsokythuat'];
									$sp->giaca = $_POST['giaca'];
									$sp->keyword = $_POST['keyword'];
									$sp->thutu = $_POST['thutu'];
									$sp->trangthai = $_POST['trangthai'];
									if($sp->sua())
									{
										?>
										<script language="javascript">
										alert('Sửa sản phẩm thành công.');
										window.location='index.php?page=sanpham';
										</script>
										<?php
									}
									else
									{
										?>
										<script language="javascript">
										alert('Sửa sản phẩm không thành công.');
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
		}
?>