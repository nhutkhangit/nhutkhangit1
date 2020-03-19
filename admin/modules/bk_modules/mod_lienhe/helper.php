<?php
	class lienhe{
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
			$sql = mysql_query("delete from lienhe where id='".$this->id."'");
			return $sql;
		}
	}
?>