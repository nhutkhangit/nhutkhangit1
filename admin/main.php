<?php
/**
Name: Admin page;
Create by: Kendy Liên
 **/
include_once("../config/config.php");

class main_index extends Database_connect {
	
	function quyen($tendangnhap){
		$sql = "SELECT quyen from quanly where tendangnhap='$tendangnhap'";
		$this->execute($sql);
		if($this->num_rows()==0){$data=0; } else {while ($datas=$this->getData()){$data[]=$datas; } }

		return $data;
	}
}
$db = new main_index();
$db->connect_db();
$q = $db->quyen($_SESSION['tendangnhap']);
foreach ($q as $key => $qq) {
	$quyen = trim($qq[0]);
}
$mang = explode(',',$quyen);
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css">

<div id="header" class="clearfix">
	<div class="div">
		<table class="table" cellspacing="0" cellpadding="0">
			<tbody>
				<tr>
					<td colspan="3" class="logo">ADMIN PAGE MANAGER</td>
				</tr>
				<tr>
					<td class="left">Wellcome: <strong><?php echo $_SESSION['tendangnhap'];?></strong>&nbsp; | &nbsp; Ngôn ngữ đang dùng: <b>Tiếng Việt</b> &nbsp; 
					</td>
					<td class="right">[ <a href="index.php" >Trang quản trị </a> ] &nbsp; [ <a href="" >Trang chủ</a> ] &nbsp; [<a href="index.php?page=nguoidung&act=logout"> Đăng xuất</a> ]
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<div id="main" class="clearfix">
    <table width="100%" border="0" cellspacing="0">
        <tbody>
        	<tr>
                <td id="col_left">
                	<div id="ctl00_admLeft1_pnQuantri">
                		<table class="table" cellspacing="0" cellpadding="0">
                			<tbody>
                				<tr>
                					<td class="left"><img src="images/blank.gif"></td>
    								<td>Quản lý </td>
    								<td class="image">
    									<img id="imgdiv1" src="images/closed.gif" onclick="toggleXPMenu(&#39;div1&#39;);">
    								</td>
    								<td class="right">
    									<img src="images/blank.gif">
    								</td>
    							</tr>
    						</tbody>
    					</table>
    					<div id="div1" class="content">	
    					<ul>
    						<li>
    							<img src="images/1358024845_menu_16.png">
    							<a href="index.php?page=danhmuc">Quản lý Danh mục</a>
    						</li>
    						<li>
    							<img src="images/1358024845_menu_16.png">
    							<a href="index.php?page=nguoidung">Quản lý Người dùng</a>
    						</li>
    					</ul>
    				</div>
    			<!-- </div> -->
	    			<script type="text/javascript"> function Get(idname) { if (document.getElementById) { return document.getElementById(idname); } else if (document.all) { return document.all[idname]; } else if (document.layers) { return document.layers[idname]; } else { return null; } } function toggleXPMenu(block) { var CloseImage = "images/closed.gif"; var OpenImage = "images/open.gif"; var divid = block; var img = "img" + block; if (Get(divid).style.display == "") { Get(divid).style.display = "none"; Get(img).src = OpenImage; return false; } else { Get(divid).style.display = ""; Get(img).src = CloseImage; return false; } }</script>
	    			<div class="powered_by">powered by : 
	    				<a href="http://nhutkhangit.xyz/" target="_blank">
				    		<b>Nhutkhangit.xyz</b>
				    	</a>
				    </div>
				</td>
                <td id="col_right">
                <!--main-->
				<?php
				if(isset($_GET['page'])){
					$page  = $_GET['page'];
					switch($page){
						//Danh muc
						case 'danhmuc':
						include('modules/mod_danhmuc/mod_danhmuc.php');
						break;

						//Nguoi dung
						case 'nguoidung':
						include('modules/mod_nguoidung/mod_nguoidung.php');
						break;
					}
				}
				?>
            	</td>
            </tr>
        </tbody>
    </table>
</div>
    
