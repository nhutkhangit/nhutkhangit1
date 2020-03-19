<?php
/**
 * 
 */
include_once("config/config.php");

class content extends Database_connect {
	public function content_load_db()
	{
		// $result = array();
		$sql = "SELECT * from baiviet where trangthai = '1' order by idbv DESC";

		$this->execute($sql);
		if($this->num_rows()==0){$data=0; } else {while ($datas=$this->getData()){$data[]=$datas; } }
		return $data;
	}

	public function content_load_chitiet($id)
	{
		// $result = array();
		$sql = "SELECT * from baiviet where trangthai = '1'  and idbv = '$id'";

		$this->execute($sql);
		if($this->num_rows()==0){$data=0; } else {while ($datas=$this->getData()){$data[]=$datas; } }
		return $data;
	}
	public function baiviet_noibat()
	{
		// $result = array();
		$sql = "SELECT * from baiviet where trangthai = 1 order by luotxem DESC";

		$this->execute($sql);
		if($this->num_rows()==0){
			$data=0;
		}
		else {
			while ($datas=$this->getData()){
				$data[]=$datas;
			}
		}
		
		return $data;
	}

	public function update_view($id, $count_view)
	{
		$sql = "UPDATE baiviet SET luotxem = '$count_view' WHERE idbv = '$id'";
		$update = $this->execute($sql);
	}
}
?>