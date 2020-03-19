<?php
include_once("config/config.php");
class menu extends Database_connect {
	function menu_loader(){
		
		$sql = "SELECT * from nk_menu where status = 1  order by orders ASC";
		$this->execute($sql);
		if($this->num_rows()==0){$data=0; } else {while ($datas=$this->getData()){$data[]=$datas; } }

		return $data;
	}
}
?>