<?php
/**
 * 
 */
include_once("config/config.php");

class chuyenmuc extends Database_connect {
	function load_danhmuc()
	{
		// $result = array();
		$sql = "SELECT * from nk_danhmuc where status = 1  order by ID ASC";

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

	function load_baivietmoi()
	{
		// $result = array();
		$sql = "SELECT * FROM `nk_baiviet` WHERE STATUS = 1 ORDER BY id DESC LIMIT 3";

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

	function load_baivietxemnhieu()
	{
		// $result = array();
		$sql = "SELECT * FROM `nk_baiviet` WHERE STATUS = 1 ORDER BY count_view DESC LIMIT 5";

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
}
?>