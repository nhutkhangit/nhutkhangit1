<?php
include_once("config/config.php");
class load_danhmuc extends Database_connect {
	public function content_load_danhmuc($sql){
		
		// $sql = "SELECT * from baiviet where trangthai = '1'  and iddm = '$iddm'";

		$this->execute($sql);
		if($this->num_rows()==0){$data=0; } else {while ($datas=$this->getData()){$data[]=$datas; } }
		return $data;
	}
	public function load_name_danhmuc($iddm){
		
		$sql = "SELECT name from nk_danhmuc where status = '1'  and id = '$iddm'";

		$this->execute($sql);
		if($this->num_rows()==0){$data = 0; } else {while ($datas=$this->getData()){$data[]=$datas; } }
		return $data;
	}
}
?>