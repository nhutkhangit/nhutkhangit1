<?php
		include('../config/database.php');
		include('helper.php');
		include('phantrang.php');
		$lh = new lienhe();

			$limit =20;
			$start =  findstart($limit);
			$count = mysql_num_rows(mysql_query("select * from lienhe"));
			$page = findpages($count,$limit);
			$sql = "select * from lienhe order by id DESC limit $start,$limit";
			$mang = $lh->quanly($sql);
			$chuoi ='index.php?page=lienhe';
			include('tmpl/quanly.php');
			if(isset($_POST['delete']))
			{
				if(isset($_POST['lh']))
				{
					$mang = $_POST['lh'];
					$n=count($mang);
					if($n>0)
					{
						for($i=0;$i<$n;$i++)
						{
							$lh->id = $mang[$i];
							$lh->xoa();
						}
						?>
						<script language="javascript">
						history.back();
						</script>
						<?php
					}
				}
			}
		
?>