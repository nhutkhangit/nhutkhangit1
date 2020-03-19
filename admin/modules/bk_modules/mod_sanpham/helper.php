<?php
	class sanpham{
		public $idsp;
		public $tensp;
		public $hinhanh;
		public $hinhanhdd;
		public $gia;
		public $tomtat;
		public $gioithieu;
		public $tinhnanghoatdong;
		public $mausac;
		public $kieudang;
		public $noithat;
		public $phukienchinhhieu;
		public $antoan;
		public $thongtokythuat;
		public $giaca;
		public $keyword;
		public $luotxem;
		public $thutu;
		public $trangthai;
		public function them()
		{
			$sql = mysql_query("INSERT into sanpham values(null,'".$this->tensp."','".$this->hinhanh."','".$this->hinhanhdd."','".$this->gia."','".$this->tomtat."','".$this->gioithieu."','".$this->tinhnanghoatdong."','".$this->mausac."','".$this->kieudang."','".$this->noithat."','".$this->phukienchinhhieu."','".$this->antoan."','".$this->thongsokythuat."','".$this->giaca."','".$this->keyword."','".$this->luotxem."','".$this->thutu."','".$this->trangthai."')");
			return $sql;
		}
		public function quanly($sql1)
		{
			$result = array();
			$sql = mysql_query($sql1);
			while($mang = mysql_fetch_array($sql))
			{
				$result[] = $mang;
			}
			return $result;
		}
		public function capnhaptrangthai()
		{
			$sql = mysql_query("update sanpham set trangthai='".$this->trangthai."' where idsp='".$this->idsp."'");
			return $sql;
		}
		public function xoa()
		{
			$sql = mysql_query("delete from sanpham where idsp='".$this->idsp."'");
			return $sql;
		}
		
		public function laysua()
		{
			$sql = mysql_query("select * from sanpham where idsp='".$this->idsp."'");
			$mang = mysql_fetch_array($sql);
			return $mang;
		}
		public function sua()
		{

			if($this->hinhanh =="")//Neu khong thay doi hinh anh
			{
				if($this->hinhanhdd=="")//Neu khong thay doi hinh anh sologan
				{
					$sql = mysql_query("update sanpham set tensp='".$this->tensp."',gia='".$this->gia."',tomtat='".$this->tomtat."',gioithieu='".$this->gioithieu."',tinhnanghoatdong='".$this->tinhnanghoatdong."',mausac='".$this->mausac."',kieudang='".$this->kieudang."',noithat='".$this->noithat."',phukienchinhhieu='".$this->phukienchinhhieu."',antoan='".$this->antoan."',thongsokythuat='".$this->thongsokythuat."',giaca='".$this->giaca."',keyword='".$this->keyword."',thutu='".$this->thutu."',trangthai='".$this->trangthai."' where idsp='".$this->idsp."'");
				}
				else//Neu thay doi hinh anh sologan
				{
					$sql = mysql_query("update sanpham set tensp='".$this->tensp."',gia='".$this->gia."',hinhanhdd='".$this->hinhanhdd."',tomtat='".$this->tomtat."',gioithieu='".$this->gioithieu."',tinhnanghoatdong='".$this->tinhnanghoatdong."',mausac='".$this->mausac."',kieudang='".$this->kieudang."',noithat='".$this->noithat."',phukienchinhhieu='".$this->phukienchinhhieu."',antoan='".$this->antoan."',thongsokythuat='".$this->thongsokythuat."',giaca='".$this->giaca."',keyword='".$this->keyword."',thutu='".$this->thutu."',trangthai='".$this->trangthai."' where idsp='".$this->idsp."'");
				}
			}
			else//Neu thay doi hinh anh
			{
				if($this->hinhanhdd=="")//Neu khong thay doi hinh anh sologan
				{
					$sql = mysql_query("update sanpham set tensp='".$this->tensp."',gia='".$this->gia."',hinhanh='".$this->hinhanh."',tomtat='".$this->tomtat."',gioithieu='".$this->gioithieu."',tinhnanghoatdong='".$this->tinhnanghoatdong."',mausac='".$this->mausac."',kieudang='".$this->kieudang."',noithat='".$this->noithat."',phukienchinhhieu='".$this->phukienchinhhieu."',antoan='".$this->antoan."',thongsokythuat='".$this->thongsokythuat."',giaca='".$this->giaca."',keyword='".$this->keyword."',thutu='".$this->thutu."',trangthai='".$this->trangthai."' where idsp='".$this->idsp."'");
				}
				else//Thay doi hinh anh sologan
				{
					$sql = mysql_query("update sanpham set tensp='".$this->tensp."',gia='".$this->gia."',hinhanh='".$this->hinhanh."',hinhanhdd='".$this->hinhanhdd."',tomtat='".$this->tomtat."',gioithieu='".$this->gioithieu."',tinhnanghoatdong='".$this->tinhnanghoatdong."',mausac='".$this->mausac."',kieudang='".$this->kieudang."',noithat='".$this->noithat."',phukienchinhhieu='".$this->phukienchinhhieu."',antoan='".$this->antoan."',thongsokythuat='".$this->thongsokythuat."',giaca='".$this->giaca."',keyword='".$this->keyword."',thutu='".$this->thutu."',trangthai='".$this->trangthai."' where idsp='".$this->idsp."'");
				}
			}
			return $sql;
		}
	}
		
?>