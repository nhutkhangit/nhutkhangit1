<?php
	class hotro{
		public $id;
		public $tieude;
		public $yahoo;
		public $skype;
		public $thutu;
		public $trangthai;
		public function them()
		{
			$sql = mysql_query("insert into hotro values('','".$this->tieude."','".$this->yahoo."','".$this->skype."','".$this->thutu."','".$this->trangthai."')");
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
			$sql = mysql_query("update hotro set trangthai='".$this->trangthai."' where id='".$this->id."'");
			return $sql;
		}
		public function xoa()
		{
			$sql = mysql_query("delete from hotro where id='".$this->id."'");
			return $sql;
		}
		public function laysua()
		{
			$sql = mysql_query("select * from hotro where id='".$this->id."'");
			$mang = mysql_fetch_array($sql);
			return $mang;
		}
		public function sua()
		{

			$sql = mysql_query("update hotro set tieude='".$this->tieude."',thutu='".$this->thutu."',yahoo='".$this->yahoo."',skype='".$this->skype."',trangthai='".$this->trangthai."' where id='".$this->id."'");

			return $sql;
		}
	}
	
?>