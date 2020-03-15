<?php
include_once("../config/config.php");
	class danhmuc extends Database_connect{
		public $idmenu;
		public $tenmenu;
		public $url;
		public $thutu;
		public $trangthai;
		public function them()
		{
			$sql = "INSERT into nk_danhmuc values(null, '".$this->tendanhmuc."', '".$this->trangthai."', '".$this->create_at."')";
			$result = $this->execute($sql);
			
			return $result;
		}
		public function quanly($sql1)
		{
			$this->execute($sql1);
			if($this->num_rows()==0){$data=0; } else {while ($datas=$this->getData()){$data[]=$datas; } }

			return $data;
		}
		public function capnhaptrangthai()
		{
			$sql = mysql_query("UPDATE menu set status='".$this->trangthai."' where id='".$this->idmenu."'");
			return $sql;
		}
		public function xoa()
		{
			$sql = "DELETE from nk_danhmuc where id='".$this->iddanhmuc."'";
			$result = $this->execute($sql);

			return $result;
		}
		public function laysua(){
			$sql = "SELECT * from nk_danhmuc where id='".$this->iddanhmuc."'";
			$this->execute($sql);
			if($this->num_rows()==0){$result=0; } else {while ($res=$this->getData()){$result[]=$res; } }

			return $result;
		}
		public function sua()
		{

			$sql = "UPDATE nk_danhmuc set name='".$this->tendanhmuc."',status='".$this->trangthai."' where id='".$this->iddanhmuc."'";
			$update = $this->execute($sql);

			return $update;
		}
	}
		
?>