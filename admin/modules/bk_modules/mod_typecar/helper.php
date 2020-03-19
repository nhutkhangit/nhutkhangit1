<?php
	class type_product {
		public $id;
		public $hinhanh;
		public $name;
		public $description;
		public $trangthai;
		public function them()
		{
			$sql = mysql_query("INSERT into type_product values(null ,'".$this->hinhanh."','".$this->name."','".$this->description."','".$this->trangthai."')");
			return $sql;
		}
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

		public function capnhaptrangthai()
		{
			$sql = mysql_query("UPDATE type_product set status='".$this->trangthai."' where id='".$this->id."'");
			return $sql;
		}
		public function xoa()
		{
			$sql = mysql_query("DELETE from type_product where id='".$this->id."'");
			return $sql;
		}
		public function laysua()
		{
			$sql = mysql_query("SELECT * from type_product where id='".$this->id."'");
			$mang = mysql_fetch_array($sql);
			return $mang;
		}
		public function sua()
		{
			if($this->hinhanh =="")
			{
				$sql = mysql_query("UPDATE type_product set name='".$this->name."',description='".$this->description."',status='".$this->trangthai."' where id='".$this->id."'");
			}
			else
			{
				$sql = mysql_query("UPDATE type_product set name='".$this->name."',description='".$this->description."',images='".$this->hinhanh."',status='".$this->trangthai."' where id='".$this->id."'");
			}
			return $sql;
		}
	}
?>