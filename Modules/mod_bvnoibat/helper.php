<?php
include_once("config/config.php");
class chitiet extends Database_connect {
	public function baiviet_noibat(){
		
		$sql = "SELECT * from baiviet where trangthai = 1 order by luotxem DESC";
		$this->execute($sql);
		if($this->num_rows()==0){$data=0; } else {while ($datas=$this->getData()){$data[]=$datas; } }

		return $data;
	}
}
?>