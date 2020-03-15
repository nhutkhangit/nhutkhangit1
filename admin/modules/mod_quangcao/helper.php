<?php
	class quangcao{
		public $id;
		public $hinhanh;
		public $url;
		public $thutu;
		public $trangthai;
		public function them()
		{
			$sql = mysql_query("insert into quangcao values('','".$this->hinhanh."','".$this->url."','".$this->thutu."','".$this->trangthai."')");
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
			$sql = mysql_query("update quangcao set trangthai='".$this->trangthai."' where id='".$this->id."'");
			return $sql;
		}
		public function xoa()
		{
			$sql = mysql_query("delete from quangcao where id='".$this->id."'");
			return $sql;
		}
		public function laysua()
		{
			$sql = mysql_query("select * from quangcao where id='".$this->id."'");
			$mang = mysql_fetch_array($sql);
			return $mang;
		}
		public function sua()
		{
			if($this->hinhanh =="")
			{
				$sql = mysql_query("update quangcao set url='".$this->url."',thutu='".$this->thutu."',trangthai='".$this->trangthai."' where id='".$this->id."'");
			}
			else
			{
				$sql = mysql_query("update quangcao set url='".$this->url."',thutu='".$this->thutu."',hinhanh='".$this->hinhanh."',trangthai='".$this->trangthai."' where id='".$this->id."'");
			}
			return $sql;
		}
	}
?>