<?php
	function findstart($limit)
	{
		if(!isset($_GET['p'])|| $_GET['p']== "1" || !is_numeric($_GET['p']))
		{
			$start = 0;
			$_GET['p']=1;
		}
		else
		{
			$start = ($_GET['p']-1)*$limit;
		}
		return $start;
	}
	function findpages($count,$limit)
	{
		if($count % $limit ==0)
			$pages = $count/$limit;
		else
			$pages = ceil($count/$limit);
		return $pages;
	}
?>