<?php
	class cauhinh{
		public $id;
		public $url;
		public $hotline;
		public $email;
		public $diachi;
		public $fax;
		public $title;
		public $keywords;
		public $description;
		public $bottom;
		public $bando;
		public function laysua()
		{
			$sql = mysql_query("select * from cauhinh where id='1'");
			$mang = mysql_fetch_array($sql);
			return $mang;
		}
		public function sua()
		{
				$sql = mysql_query("update cauhinh set url='".$this->url."',hotline='".$this->hotline."',email='".$this->email."',diachi='".$this->diachi."',fax='".$this->fax."',title='".$this->title."',keywords='".$this->keywords."',description='".$this->description."',bottom='".$this->bottom."',bando='".$this->bando."'  where id='1'");
			return $sql;
		}
	}
?>