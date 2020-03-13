<?php
/**
 * 
 */
include_once("../config/config.php");

class content extends Database_connect {
	public function load_chuyenmuc()
	{
		// $result = array();
		$sql = "SELECT * from nk_danhmuc order by ID ASC";

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
	public function add_chuyenmuc($name, $status, $time){
		$sql = "INSERT INTO `nk_danhmuc` (`id`, `name`, `status`, `created_at`) VALUES (NULL, '$name', '$status', '$time')";
		if ($this->execute($sql)) {
			return true;
		}else {
			return false;
		}
	}

	public function delete_chuyenmuc($id){
		$sql = "DELETE FROM `nk_danhmuc` WHERE `nk_danhmuc`.`id` = '$id'";
		if ($this->execute($sql)) {
			return true;
		}else {
			return false;
		}
	}
	public function load_data_edit($id)
	{
		// $result = array();
		$sql = "SELECT * from nk_danhmuc where id = '$id' order by ID ASC";

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
	public function update_qlcm($name, $status, $id)
	{
		// $result = array();
		$sql = "UPDATE `nk_danhmuc` SET `name` = '$name', `status` = '$status' WHERE `nk_danhmuc`.`id` = '$id'";

		if ($this->execute($sql)) {
			return true;
		}else {
			return false;
		}
	}
}
?>