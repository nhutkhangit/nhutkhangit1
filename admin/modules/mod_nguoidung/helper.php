<?php
include_once("../config/config.php");
class nguoidung extends Database_connect{
	public $id;
	public $tendangnhap;
	public $matkhau;
	public $email;
	public $quyen;
	public $trangthai;
	public function kiemtralogin()
	{
		// $sql = mysql_query("select * from quanly where tendangnhap='".$this->tendangnhap."' and matkhau='".$this->matkhau."' and trangthai=1 ");
		$sql = "SELECT * from quanly where tendangnhap='".$this->tendangnhap."' and matkhau='".$this->matkhau."' and trangthai=1 ";
		$this->execute($sql);
		if($this->num_rows()!=0) {return 1; } else {return 0; } 
	}
	public function laylogin()
	{
		$sql = "select * from quanly where tendangnhap='".$this->tendangnhap."' and matkhau='".$this->matkhau."' and trangthai=1 ";
		$this->execute($sql);
		if($this->num_rows()==0){$data=0; } else {while ($datas=$this->getData()){$data[]=$datas; } }

		return $data;
	}
	public function kiemtralaymatkhau()
	{
		$sql = mysql_query("select * from quanly where tendangnhap='".$this->tendangnhap."' and email='".$this->email."' and trangthai=1");
		if(mysql_num_rows($sql)!=0) {return 1; } else {return 0; } 
	}
	public function laymatkhau($tendangnhap,$email)
	{
		$sql = mysql_query("SELECT matkhau from thanhvien where tendangnhap='$tendangnhap' and email='$email' and trangthai=1");
		if(mysql_num_rows($sql)!=0)
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	public function random($chieudai,$sokitu)
	{
		$i=1;
		$ketqua="";
		while($i<=$chieudai)
		{
			$demkitu=strlen($sokitu)-1;
			$ngaunhien=rand(0,$demkitu);
			$so=substr($sokitu,$ngaunhien,1);
			$ketqua=$ketqua.$so;
			$i++;
		}
		return $ketqua;	
	}
	public function capnhappass($tendangnhap,$matkhau)
	{
		$mk = md5($matkhau);
		$sql = mysql_query("update quanly set matkhau='$mk' where tendangnhap='$tendangnhap'");
		return $sql;
	}
	public function ktmatkhaucu($matkhau,$tendangnhap)
	{
		$mk = md5($matkhau);
		$sql = mysql_query("select * from quanly where tendangnhap='$tendangnhap' and matkhau='$mk'");
		if(mysql_num_rows($sql)!=0)
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	public function doimatkhau($matkhau,$tendangnhap)
	{
		$mk = md5($matkhau);
		$sql = mysql_query("update quanly set matkhau='$mk' where tendangnhap='$tendangnhap'");
		return $sql;
	}
	public function them()
	{
		$sql = "INSERT into quanly values('','".$this->tendangnhap."','".$this->matkhau."','".$this->email."','".$this->quyen."','".$this->trangthai."')";
		$this->execute($sql);

		return $sql;
	}
	public function quanly()
	{
		$result = array();
		$sql = mysql_query("select * from quanly order by id DESC");
		while($mang = mysql_fetch_array($sql))
		{
			$result[] = $mang;
		}
		return $result;
	}
	public function capnhaptrangthai()
	{
		$sql = "UPDATE quanly set trangthai='".$this->trangthai."' where id='".$this->id."'";
		$result = $this->execute($sql);

		return $result;
	}
	public function laynguoidung()
	{
		$sql = "SELECT * from quanly where id='".$this->id."'";
		$this->execute($sql);
		if($this->num_rows()==0){$data=0; } else {while ($datas=$this->getData()){$data[]=$datas; } }

		return $data;
	}
	public function sua()
	{
		if($this->matkhau!='')
		{
			$sql = "UPDATE quanly set tendangnhap='".$this->tendangnhap."',matkhau='".$this->matkhau."',email='".$this->email."',quyen='".$this->quyen."',trangthai='".$this->trangthai."' where id='".$this->id."'";
			$result = $this->execute($sql);
		}
		else
		{
			$sql = "UPDATE quanly set tendangnhap='".$this->tendangnhap."',email='".$this->email."',quyen='".$this->quyen."',trangthai='".$this->trangthai."' where id='".$this->id."'";
			$result = $this->execute($sql);
		}

		return $result;
	}
	public function xoa()
	{
		$sql = "DELETE from quanly where id='".$this->id."'";
		$result = $this->execute($sql);

		return $result;
	}
	public function truyvan($sql1)
	{
		$this->execute($sql1);
		if($this->num_rows()==0){$data = 0; } else {while ($datas=$this->getData()){$data[]=$datas; } }

		return $data;
	}
}
?>
