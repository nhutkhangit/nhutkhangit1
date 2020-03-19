<?php
		include('../config/database.php');
		include('helper.php');
		include('phantrang.php');
		$dx = new datxe();

			$limit =20;
			$start =  findstart($limit);
			$count = mysql_num_rows(mysql_query("select * from datxe"));
			$page = findpages($count,$limit);
			$sql = "select * from datxe order by id DESC limit $start,$limit";
			$mang = $dx->quanly($sql);
			$chuoi ='index.php?page=datxe';
			include('tmpl/quanly.php');
			if(isset($_POST['delete']))
			{
				if(isset($_POST['dx']))
				{
					$mang = $_POST['dx'];
					$n=count($mang);
					if($n>0)
					{
						for($i=0;$i<$n;$i++)
						{
							$dx->id = $mang[$i];
							$dx->xoa();
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