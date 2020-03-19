<?php
include_once("../config/config.php");
	class baiviet extends Database_connect{
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
			$sql = "INSERT into baiviet values(NULL,'".$this->iddm."','".$this->tieude."','".$this->hinhanh."','".$this->tomtat."','".$this->noidung."','".$this->luotxem."','".$this->thutu."','".$this->tags."','".$this->keyword."','".$this->trangthai."','".$this->hientrangchu."','".$this->ngaytao."')";
			$this->execute($sql);

			return $sql;
		}
		public function quanly($sql1)
		{
			$this->execute($sql1);
			if($this->num_rows()==0){$data = 0; } else {while ($datas=$this->getData()){$data[]=$datas; } }

			return $data;
		}
		public function dsdanhmuc()
		{
			$sql = "SELECT * from nk_danhmuc where status = 1 order by id ASC";
			$this->execute($sql);
			if($this->num_rows()==0){$data=0; } else {while ($datas=$this->getData()){$data[]=$datas; } }

			return $data;
		}
		public function capnhaptrangthai()
		{
			$sql = "UPDATE baiviet set trangthai='".$this->trangthai."' where idbv='".$this->idbv."'";
			$this->execute($sql);
			return $sql;
		}
		public function capnhaphientrangchu()
		{
			$sql = "UPDATE baiviet set hientrangchu='".$this->hientrangchu."' where idbv='".$this->idbv."'";
			$this->execute($sql);
			return $sql;
		}
		public function capnhapdanhmuc()
		{
			$sql = mysql_query("update baiviet set iddm='".$this->iddm."' where idbv='".$this->idbv."'");
			return $sql;
		}
		public function xoa()
		{
			$sql = "DELETE from baiviet where idbv='".$this->idbv."'";
			$this->execute($sql);
			return $sql;
		}
		
		public function laysua()
		{
			$sql = "SELECT * from baiviet where idbv='".$this->idbv."'";
			$this->execute($sql);
			if($this->num_rows()==0){$data = 0; } else {while ($datas=$this->getData()){$data[]=$datas; } }

			return $data;
		}
		public function sua()
		{

			if($this->hinhanh =="")
			{
				$sql = "UPDATE baiviet set iddm='".$this->iddm."',tieude='".$this->tieude."',tomtat='".$this->tomtat."',noidung='".$this->noidung."',thutu='".$this->thutu."',tags='".$this->tags."',keyword='".$this->keyword."',trangthai='".$this->trangthai."',hientrangchu='".$this->hientrangchu."' where idbv='".$this->idbv."'";
				$this->execute($sql);
			}
			else
			{
				$sql = "UPDATE baiviet set iddm='".$this->iddm."',tieude='".$this->tieude."',hinhanh='".$this->hinhanh."',tomtat='".$this->tomtat."',noidung='".$this->noidung."',thutu='".$this->thutu."',tags='".$this->tags."',keyword='".$this->keyword."',trangthai='".$this->trangthai."',hientrangchu='".$this->hientrangchu."' where idbv='".$this->idbv."'";
				$this->execute($sql);
			}
			return $sql;
		}

		public function update_status($sql){
			$result = $this->execute($sql);
			
			return $result;
		}
	}
		
?>