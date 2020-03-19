<?php
include_once("../config/config.php");
	class menu extends Database_connect{
		public $idmenu;
		public $tenmenu;
		public $url;
		public $thutu;
		public $trangthai;
		public function them()
		{
			$sql = "INSERT into nk_menu values(null, '".$this->tenmenu."' , '".$this->url."', '".$this->trangthai."', '".$this->thutu."', '".$this->create_at."')";
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
			$sql = "DELETE from nk_menu where id='".$this->idmenu."'";
			$result = $this->execute($sql);

			return $result;
		}
		public function laysua(){
			$sql = "SELECT * from nk_menu where id='".$this->idmenu."'";
			$this->execute($sql);
			if($this->num_rows()==0){$result=0; } else {while ($res=$this->getData()){$result[]=$res; } }

			return $result;
		}
		public function sua()
		{

			$sql = "UPDATE nk_menu set name ='".$this->tenmenu."', url ='".$this->url."', orders ='".$this->thutu."',status='".$this->trangthai."' where id='".$this->idmenu."'";
			$update = $this->execute($sql);

			return $update;
		}
	}
		
?>