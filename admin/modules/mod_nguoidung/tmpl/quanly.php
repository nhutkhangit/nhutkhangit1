<script language="javascript">
function check(tt,form)
{
	var b = document.getElementsByName('nd[]');
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
<form action="index.php?page=nguoidung" method="post" name="form">
<table width='100%' align='center' cellpadding='2' cellspacing='0' style="margin:5px;">
    <tr>
      <td width="100%" height="34">
        <!-- <input type="button" name="them" id="them" value="Thêm mới" onClick="window.location='index.php?page=nguoidung&act=them'"> -->
        <div class="buttons">
          <button type="button" class="positive" name="them" onClick="window.location='index.php?page=nguoidung&act=them'"> <img src="images/add.png" alt=""/> Thêm mới </button> 
          <button type="submit" class="positive" name="delete" id="delete"> <img src="images/cross.png" alt=""/> Xóa </button> 
        </div>
        <!-- <input type="submit" name="delete" id="delete" value="Delete"> -->
</td>
  </tr>
</table>
<table cellpadding='1' cellspacing='1' width='100%'>
  <tr>
    <td colspan='12' align='center' class='title'><b>Danh sách người dùng </b></td>
  </tr>

    <tr align=center>
      <td width="2%" class='title'><input type="checkbox" name="checkbox" id="checkbox" onClick="check(this.checked,this.form);"></td>
      <td width="2%" class='title' >STT</td>
      <td  class='title' >Tên đăng nhập</td>
      <td class='title'>Email</td>
      <td class='title' width="35%">Phân quyền </td>
      <td  class='title'>Trạng thái</td>
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
                    <tr align='center'<?php if($stt%2==0){?> class="trOdd"<?php }else{?> class="trEven"<?php }?> >
                      <td <?php if($stt%2==0){?> class="trOdd"<?php }else{?> class="trEven"<?php }?>><input type="checkbox" name="nd[]" id="nd[]" value="<?php echo $row[0];?>" /></td>
                      <td align="center" <?php if($stt%2==0){?> class="trOdd"<?php }else{?> class="trEven"<?php }?>><?php echo $stt;?></td>
                      <td align="center" <?php if($stt%2==0){?> class="trOdd"<?php }else{?> class="trEven"<?php }?>><?php echo $row[1];?></td>
                      <td align="center" <?php if($stt%2==0){?> class="trOdd"<?php }else{?> class="trEven"<?php }?>><?php echo $row[3];?></td>
                      <td align="center" <?php if($stt%2==0){?> class="trOdd"<?php }else{?> class="trEven"<?php }?>><?php echo $row[4];?></td>
                       <td <?php if($stt%2==0){?> class="trOdd"<?php }else{?> class="trEven"<?php }?>><label>
                         <input type="checkbox" name="checkbox2" id="checkbox2"<?php if($row[5]==1){?> checked="checked"<?php }?> onclick="if(this.checked==true){ window.location='index.php?page=nguoidung&id=<?php echo $row[0];?>&trangthai=1';}else{window.location='index.php?page=nguoidung&id=<?php echo $row[0];?>&trangthai=0';}" />
                      </label></td>
                            <td <?php if($stt%2==0){?> class="trOdd" <?php }else{?> class="trEven" <?php }?> ><a href="index.php?page=nguoidung&act=sua&id=<?php echo $row[0];?>"><img src="images/edit.png" /></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?page=nguoidung&act=xoa&id=<?php echo $row[0];?>" onclick="return confirm('Bạn có chắc chắn muốn xóa.');"><img src="images/delete.png" /></a></td>
                      
                    </tr>
                    <?php
				}
			}
	?>
    <tr align='center'>
      <td colspan="10" align="center" class="fr">Trang : 
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
