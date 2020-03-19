<?php
	class tintuc{
		public $id;
		public $idcm;
		public $tieude;
		public $hinhanh;
		public $tomtat;
		public $noidung;
		public $thutu;
		public $luotxem;
		public $ngaydang;
		public $hientrangchu;
		public $tags;
		public $keyword;
		public $trangthai;
		public function them()
		{
			$sql = mysql_query("insert into tintuc values('','".$this->idcm."','".$this->tieude."','".$this->hinhanh."','".$this->tomtat."','".$this->noidung."','".$this->thutu."','".$this->luotxem."','".$this->ngaydang."','".$this->hientrangchu."','".$this->tags."','".$this->keyword."','".$this->trangthai."')");
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
		public function dschuyenmuc()
		{
			$result = array();
			$sql = mysql_query("select * from chuyenmuc where trangthai=1 order by thutu ASC");
			while($mang = mysql_fetch_array($sql))
			{
				$result[] = $mang;
			}
			return $result;
		}
		public function capnhaptrangthai()
		{
			$sql = mysql_query("update tintuc set trangthai='".$this->trangthai."' where id='".$this->id."'");
			return $sql;
		}
		public function capnhaphientrangchu()
		{
			$sql = mysql_query("update tintuc set hientrangchu='".$this->hientrangchu."' where id='".$this->id."'");
			return $sql;
		}
		public function capnhapchuyenmuc()
		{
			$sql = mysql_query("update tintuc set idcm='".$this->idcm."' where id='".$this->id."'");
			return $sql;
		}
		public function xoa()
		{
			$sql = mysql_query("delete from tintuc where id='".$this->id."'");
			return $sql;
		}
		
		public function laysua()
		{
			$sql = mysql_query("select * from tintuc where id='".$this->id."'");
			$mang = mysql_fetch_array($sql);
			return $mang;
		}
		public function sua()
		{
			if($this->hinhanh =="")
			{
				$sql = mysql_query("update tintuc set idcm='".$this->idcm."',tieude='".$this->tieude."',tomtat='".$this->tomtat."',noidung='".$this->noidung."',thutu='".$this->thutu."',hientrangchu='".$this->hientrangchu."',tags='".$this->tags."',keyword='".$this->keyword."',trangthai='".$this->trangthai."'  where id='".$this->id."'");
			}
			else
			{
				$sql = mysql_query("update tintuc set idcm='".$this->idcm."',tieude='".$this->tieude."',hinhanh='".$this->hinhanh."',tomtat='".$this->tomtat."',noidung='".$this->noidung."',thutu='".$this->thutu."',hientrangchu='".$this->hientrangchu."',tags='".$this->tags."',keyword='".$this->keyword."',trangthai='".$this->trangthai."'  where id='".$this->id."'");
			}
			return $sql;
		}
	}
		
?>