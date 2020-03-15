<?php
	class thongke
	{
	
			function themonline($tg,$ip,$local)
			{
				$sql = mysql_query("insert into useronline values('$tg','$ip','$local')");
				return $sql;
			}
			function xoaonline($tgnew)
			{
				$sql = mysql_query("delete from useronline where tgtmp < $tgnew");
				return $sql;
			}
			function online()
			{
				$sql = mysql_query("select DISTINCT ip from useronline where local='/index.php'");
				$n = mysql_num_rows($sql);
				return $n;
			}
			function luottruycap()
			{
				$sql = mysql_query("select luottruycap from luottruycap where id='1'");
				$mang = mysql_fetch_array($sql);
				$sl = $mang[0];
				return $sl;
			}
	}
 ?>