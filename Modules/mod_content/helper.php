<?php
/**
 * 
 */
include_once("config/config.php");

class content extends Database_connect {
	function content_load_db()
	{
		// $result = array();
		$sql = "SELECT * from nk_test where 1  order by ID ASC";

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