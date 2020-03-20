<?php
include_once("config/config.php");
class chitiet extends Database_connect {
	public function content_load_chitiet($id){
		
		$sql = "SELECT * from baiviet where trangthai = '1'  and idbv = '$id'";

		$this->execute($sql);
		if($this->num_rows()==0){$data=0; } else {while ($datas=$this->getData()){$data[]=$datas; } }
		return $data;
	}

	public function update_view($id, $count_view)
	{
		$sql = "UPDATE baiviet SET luotxem = '$count_view' WHERE idbv = '$id'";
		$update = $this->execute($sql);
	}
}
?>