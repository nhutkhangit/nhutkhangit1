<script language="javascript">
function check(tt,form)
{
	var b = document.getElementsByName('bv[]');
	if(tt == true)
	{
		for(var i=0;i< b.length;i++)
		{
			b[i].checked = true;
		}
	}
	if(tt == false)
	{
		for(var i=0;i< b.length;i++)
		{
			b[i].checked = false;
		}
	}
}
</script>
<form action="index.php?page=baiviet" method="post" name="form">
<table width='100%' align='center' cellpadding='2' cellspacing='0' style="margin:5px;">
 <tr>
    <td width="100%" height="34">
       
    <div class="buttons">
    <button type="button" class="positive" name="save" onclick="window.location='index.php?page=baiviet&act=them'">
        <img src="images/add.png" alt=""/> 
        Thêm mới
    </button>

    <button type="submit" class="positive" name="capnhap">
        <img src="images/textfield_key.png" alt=""/> 
       Cập nhập thứ tự
   </button>

    <button type="submit" class="positive" name="delete">
        <img src="images/cross.png" alt=""/>
        Xóa
    </button>
</div>
      </td>
  </tr>
  <tr>
    <td height="35">
      <b>Thuộc danh mục </b>&nbsp;&nbsp;&nbsp;
      <label>
        <select name="select4" id="select4" onchange="if(this.value==''){window.location='index.php?page=baiviet';}else{window.location='index.php?page=baiviet&xemdanhmuc='+this.value;}">
         <option value="">Thuộc danh mục&nbsp;&nbsp;</option>
         <?php
		 		foreach($mangdm as $rowdm)
				{
					?>
                    
        <option value="<?php echo $rowdm[0];?>"<?php if(isset($_GET['xemdanhmuc']) and $_GET['xemdanhmuc']==$rowdm[0]){?> selected="selected"<?php }?>><?php echo $rowdm[2];?></option>
                    <?php
				}
		 ?>
        </select>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <b>Hiện trang chủ</b>&nbsp;&nbsp;&nbsp;
      <label>
        <select name="select5" id="select5" onchange="if(this.value==''){window.location='index.php?page=baiviet';}else{window.location='index.php?page=baiviet&xemhientrangchu='+this.value;}">
         <option value="">Hiện trang chủ&nbsp;&nbsp;</option>
        <option value="1"<?php if(isset($_GET['xemhientrangchu']) and $_GET['xemhientrangchu']==1){?> selected="selected"<?php }?>>Có</option>
        <option value="0"<?php if(isset($_GET['xemhientrangchu']) and $_GET['xemhientrangchu']==0){?> selected="selected"<?php }?>>Không</option>
        </select>
      </label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <b>Trạng thái</b>&nbsp;&nbsp;&nbsp;
      <label>
        <select name="select5" id="select5" onchange="if(this.value==''){window.location='index.php?page=baiviet';}else{window.location='index.php?page=baiviet&xemtrangthai='+this.value;}">
         <option value="">Trạng thái&nbsp;&nbsp;</option>
        <option value="1"<?php if(isset($_GET['xemtrangthai']) and $_GET['xemtrangthai']==1){?> selected="selected"<?php }?>>Có</option>
        <option value="0"<?php if(isset($_GET['xemtrangthai']) and $_GET['xemtrangthai']==0){?> selected="selected"<?php }?>>Không</option>
        </select>
      </label>
      </td>
  </tr>
  <tr>
    <td height="35">
    <i><b>Di chuột vào tiêu đề bài viết để biết thông tin.</b></i>
    </td>
    </tr>

</table>
<table cellpadding='1' cellspacing='1' width='100%'>
  <tr>
    <td height="35" colspan='14' align='center' class='title'><b>Quản lý bài viết</b></td>
  </tr>
  
    <tr align=center>
      <td  class='title'><input type="checkbox" name="checkbox" id="checkbox" onClick="check(this.checked,this.form);"></td>
      <td  class='title' >STT</td>
      <td  class='title' width="20%" >Tiêu đề</td>
      <td  class='title' >Hình ảnh</td>
      <td  class='title'>Thuộc danh mục</td>
      <td  class='title'>Lượt xem</td>
      <td  class='title'>Thứ tự</td>
      <td  class='title'>Hiện trang chủ</td>
      <td class='title'>Trạng thái</td>
      <td  class='title'>Action</td>
    </tr>
    <?php
			
			$n = count($mang);
			if($n>0)
			{
				$stt=0;
				foreach($mang as $row)
				{
					$stt++;
					?>
                    <tr align='center' <?php if($stt%2==0){?> class="trOdd" <?php }else{?> class="trEven" <?php }?> >
                      <td <?php if($stt%2==0){?> class="trOdd" <?php }else{?> class="trEven" <?php }?> ><input type="checkbox" name="bv[]" id="bv[]" value="<?php echo $row[0];?>" /></td>
                      <td align="center" <?php if($stt%2==0){?> class="trOdd" <?php }else{?> class="trEven" <?php }?> ><?php echo $stt;?></td>
                      <td align="center" <?php if($stt%2==0){?> class="trOdd" <?php }else{?> class="trEven" <?php }?> ><a href="#" id="" onmouseout="hidetip();" onmouseover="showtip('<b>Tóm tắt</b> : <?php echo $row[4];?>');"><?php echo $row[2];?></a></td>
                      <td align="center" <?php if($stt%2==0){?> class="trOdd" <?php }else{?> class="trEven" <?php }?> ><img src="../data/baiviet/<?php echo $row[3];?>" width="120" height="70" /></td>
                      <td align="center" <?php if($stt%2==0){?> class="trOdd" <?php }else{?> class="trEven" <?php }?> >
                      <select name="select4" id="select4" onchange="window.location='index.php?page=baiviet&id=<?php echo $row[0];?>&iddm='+this.value;">
                         <option value="">Thuộc danh mục&nbsp;&nbsp;</option>
                         <?php
                                foreach($mangdm as $rowdm)
                                {
                                    ?>
                                    
                        <option value="<?php echo $rowdm[0];?>"<?php if($row[1]==$rowdm[0]){?> selected="selected"<?php }?>><?php echo $rowdm[2];?></option>
                                    <?php
                                }
                         ?>
                        </select>
                      
                      </td>
                      <td align="center" <?php if($stt%2==0){?> class="trOdd" <?php }else{?> class="trEven" <?php }?> ><?php echo $row[6];?></td>
                      <td <?php if($stt%2==0){?> class="trOdd" <?php }else{?> class="trEven" <?php }?> ><label>
                        <input  name="thutu[<?php echo $row[0];?>]" type="text" value="<?php echo $row[7];?>" size="10"/>
                      </label>
                      
                      
                       <td <?php if($stt%2==0){?> class="trOdd" <?php }else{?> class="trEven" <?php }?> ><label>
                         <input type="checkbox" name="checkbox2" id="checkbox2"<?php if($row[11]==1){?> checked="checked"<?php }?> onclick="if(this.checked==true){ window.location='index.php?page=baiviet&id=<?php echo $row[0];?>&hientrangchu=1';}else{window.location='index.php?page=baiviet&id=<?php echo $row[0];?>&hientrangchu=0';}" />
                      </label></td>
           
                      
                      
                      <td <?php if($stt%2==0){?> class="trOdd" <?php }else{?> class="trEven" <?php }?> ><label>
                         <input type="checkbox" name="checkbox2" id="checkbox2"<?php if($row[10]==1){?> checked="checked"<?php }?> onclick="if(this.checked==true){ window.location='index.php?page=baiviet&id=<?php echo $row[0];?>&trangthai=1';}else{window.location='index.php?page=baiviet&id=<?php echo $row[0];?>&trangthai=0';}" />
                      </label></td>
           
      <td <?php if($stt%2==0){?> class="trOdd" <?php }else{?> class="trEven" <?php }?> ><a href="index.php?page=baiviet&act=sua&id=<?php echo $row[0];?>"><img src="images/edit.png" /></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?page=baiviet&act=xoa&id=<?php echo $row[0];?>" onclick="return confirm('Bạn có chắc chắn muốn xóa.');"><img src="images/delete.png" /></a></td>
                    </tr>
                    <?php
				}
			}
	?>
    <tr align='center'>
      <td colspan="12" align="center" class="fr">Trang : 
        <label>
          <select name="select" id="select" onchange="window.location='<?php echo $chuoi;?>&p='+this.value;">
          <?php
		  		for($i=1;$i<=$page;$i++)
				{
					?>
                    <option value="<?php echo $i;?>"<?php if(isset($_GET['p']) and $_GET['p']==$i){?> selected="selected"<?php }?>><?php echo $i;?></option>
                    <?php
				}
		  ?>
          </select>
      </label></td>
    </tr>    
 
</table>
</form>
