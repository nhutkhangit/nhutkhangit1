<?php
/**
 * 
 */
include_once("config/config.php");

class content extends Database_connect {
	public function content_load_db()
	{
		// $result = array();
		$sql = "SELECT * from nk_baiviet where status = 1 order by ID ASC";

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

	public function content_load_chitiet($id)
	{
		// $result = array();
		$sql = "SELECT * from nk_baiviet where status = 1  and id = '$id' order by ID ASC";

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
	public function baiviet_noibat()
	{
		// $result = array();
		$sql = "SELECT * from nk_baiviet where status = 1 order by ID ASC";

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
		$sql = "UPDATE nk_baiviet SET count_view = '$count_view' WHERE id = '$id';";
		$update = $this->execute($sql);
	}
}
?>