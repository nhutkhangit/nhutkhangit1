<?php
	class datxe{
		public $id;
		public function quanly($sql1)
		{
			$result = array();
			$sql = mysql_query($sql1);
			while($mang = mysql_fetch_array($sql))
			{
				$result[] = $mang;
			}
			return $result;
		}
		public function xoa()
		{
			$sql = mysql_query("delete from datxe where id='".$this->id."'");
			return $sql;
		}
		public function tensp($idsp)
		{
			$sql = mysql_query("select tensp from sanpham where idsp='$idsp'");
			$mang = mysql_fetch_array($sql);
			return $mang[0];
		}
	}
?>