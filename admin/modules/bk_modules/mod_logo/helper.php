<?php
	class logo{
		public $id;
		public $hinhanh;
		public $url;
		public $thutu;
		public $trangthai;
		public function them()
		{
			$sql = mysql_query("INSERT into logo values(null ,'".$this->hinhanh."','".$this->url."','".$this->thutu."','".$this->trangthai."')");
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
			$sql = mysql_query("UPDATE logo set status='".$this->trangthai."' where id='".$this->id."'");
			return $sql;
		}
		public function xoa()
		{
			$sql = mysql_query("DELETE from logo where id='".$this->id."'");
			return $sql;
		}
		public function laysua()
		{
			$sql = mysql_query("SELECT * from logo where id='".$this->id."'");
			$mang = mysql_fetch_array($sql);
			return $mang;
		}
		public function sua()
		{
			if($this->hinhanh =="")
			{
				$sql = mysql_query("UPDATE logo set url='".$this->url."',orders='".$this->thutu."',status='".$this->trangthai."' where id='".$this->id."'");
			}
			else
			{
				$sql = mysql_query("UPDATE logo set url='".$this->url."',orders='".$this->thutu."',images='".$this->hinhanh."',status='".$this->trangthai."' where id='".$this->id."'");
			}
			return $sql;
		}
	}
?>