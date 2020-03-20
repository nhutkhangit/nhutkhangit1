<?php
include_once("config/config.php");
class lienquan extends Database_connect {
	public function baiviet_lienquan($idbv, $iddm){
		
		$sql = "SELECT * from baiviet where trangthai = 1 and iddm = '$iddm' and idbv != '$idbv'  order by idbv DESC limit 3";
		$this->execute($sql);
		if($this->num_rows()==0){$data=0; } else {while ($datas=$this->getData()){$data[]=$datas; } }

		return $data;
	}

	public function get_danhmuc($idbv){
		
		$sql = "SELECT iddm from baiviet where trangthai = 1 and idbv = '$idbv'";
		$this->execute($sql);
		if($this->num_rows()==0){$data=0; } else {while ($datas=$this->getData()){$data[]=$datas; } }

		return $data;
	}
}
?>