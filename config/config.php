<?php
/**
 * 
 */
class Database_connect
{
	private $hostname='nhutkhangitxyz.c1luaigmpfqw.ap-southeast-1.rds.amazonaws.com';
	private $username='root';
	private $pass='nhutkhangitxyz';
	private $dbname='nhutkhangitxyz_db';

	// private $hostname='127.0.0.1';
	// private $username='root';
	// private $pass='';
	// private $dbname='nhutkhangitxyz_db';

	private $conn = NULL;
	private $result = NULL;

	public function connect_db(){
		$this->conn = new mysqli($this->hostname, $this->username, $this->pass, $this->dbname);
		if(!$this->conn){
			echo "ô hay, gì thế này !";
			return false;
		}
		else{
			// mysqli_set_charset($this->conn,'utf-8');
			$this->conn->query('set names "utf8"');
		}
		return $this->conn;
	}

	public function execute($sql){
		$this->result=$this->conn->query($sql);
		return $this->result;
	}

	function num_rows(){
		if ($this->result) {
			$num = mysqli_num_rows($this->result);
		}
		else {
			$num=0;
		}
		return $num;
	}

	function getData(){
		if ($this->result) {
			$data= mysqli_fetch_array($this->result);
		}
		else{
			$data=0;
		}
		return $data;
	}
}
?>