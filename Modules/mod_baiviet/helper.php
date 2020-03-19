<?php
	class baiviet{
		public $idbv;
		public $iddm;
		public $tieude;
		public $hinhanh;
		public $tomtat;
		public $noidung;
		public $luotxem;
		public $thutu;
		public $tags;
		public $keyword;
		public $trangthai;
		public $hientrangchu;
		public function them()
		{
			$sql = mysql_query("insert into baiviet values('','".$this->iddm."','".$this->tieude."','".$this->hinhanh."','".$this->tomtat."','".$this->noidung."','".$this->luotxem."','".$this->thutu."','".$this->tags."','".$this->keyword."','".$this->trangthai."','".$this->hientrangchu."')");
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
		public function dsdanhmuc()
		{
			$result = array();
			$sql = mysql_query("select * from danhmuc where trangthai=1 and idtl=1 order by thutu ASC");
			while($mang = mysql_fetch_array($sql))
			{
				$result[] = $mang;
			}
			return $result;
		}
		public function capnhaptrangthai()
		{
			$sql = mysql_query("update baiviet set trangthai='".$this->trangthai."' where idbv='".$this->idbv."'");
			return $sql;
		}
		public function capnhaphientrangchu()
		{
			$sql = mysql_query("update baiviet set hientrangchu='".$this->hientrangchu."' where idbv='".$this->idbv."'");
			return $sql;
		}
		public function capnhapdanhmuc()
		{
			$sql = mysql_query("update baiviet set iddm='".$this->iddm."' where idbv='".$this->idbv."'");
			return $sql;
		}
		public function xoa()
		{
			$sql = mysql_query("delete from baiviet where idbv='".$this->idbv."'");
			return $sql;
		}
		
		public function laysua()
		{
			$sql = mysql_query("select * from baiviet where idbv='".$this->idbv."'");
			$mang = mysql_fetch_array($sql);
			return $mang;
		}
		public function sua()
		{

			if($this->hinhanh =="")
			{
				$sql = mysql_query("update baiviet set iddm='".$this->iddm."',tieude='".$this->tieude."',tomtat='".$this->tomtat."',noidung='".$this->noidung."',thutu='".$this->thutu."',tags='".$this->tags."',keyword='".$this->keyword."',trangthai='".$this->trangthai."',hientrangchu='".$this->hientrangchu."' where idbv='".$this->idbv."'");
			}
			else
			{
				$sql = mysql_query("update baiviet set iddm='".$this->iddm."',tieude='".$this->tieude."',hinhanh='".$this->hinhanh."',tomtat='".$this->tomtat."',noidung='".$this->noidung."',thutu='".$this->thutu."',tags='".$this->tags."',keyword='".$this->keyword."',trangthai='".$this->trangthai."',hientrangchu='".$this->hientrangchu."' where idbv='".$this->idbv."'");
			}
			return $sql;
		}
	}
		
?>