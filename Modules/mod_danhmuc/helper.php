<?php
include_once("config/config.php");
class load_danhmuc extends Database_connect {
	public function content_load_danhmuc($iddm){
		
		$sql = "SELECT * from baiviet where trangthai = '1'  and iddm = '$iddm'";

		$this->execute($sql);
		if($this->num_rows()==0){$data=0; } else {while ($datas=$this->getData()){$data[]=$datas; } }
		return $data;
	}
}
?>