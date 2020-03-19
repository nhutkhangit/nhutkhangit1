<script language="javascript">
function check(tt,form)
{
	var b = document.getElementsByName('ht[]');
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
<form action="index.php?page=hotro" method="post" name="form">
<table width='100%' align='center' cellpadding='2' cellspacing='0' style="margin:5px;">
  <tr>
  <td width="100%">
  
     
    <div class="buttons">
    <button type="button" class="positive" name="save" onclick="window.location='index.php?page=hotro&act=them'">
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
     <td height="42"><b>Trạng thái </b>&nbsp;&nbsp;
       <label>
         <select name="select2" id="select2" onchange="if(this.value==''){window.location='index.php?page=hotro';}else{window.location='index.php?page=hotro&xemtrangthai='+this.value;}">
           <option value="">&nbsp;&nbsp;Trạng thái&nbsp;&nbsp;</option>
           <option value="1"<?php if(isset($_GET['xemtrangthai']) and $_GET['xemtrangthai']==1){?> selected="selected"<?php }?>>Có</option>
           <option value="0"<?php if(isset($_GET['xemtrangthai']) and $_GET['xemtrangthai']==0){?> selected="selected"<?php }?>>Không</option>
         </select>
      </label>
</td>
  </tr>
</table>
<table cellpadding='1' cellspacing='1' width='100%'>
  <tr>
    <td colspan='13' align='center' class='title'><b>Danh sách hỗ trợ trực tuyến</b></td>
  </tr>

  
    <tr align='center' >
      <td width="4%" class='title'><input type="checkbox" name="checkbox" id="checkbox" onClick="check(this.checked,this.form);"></td>
      <td width="5%"  class='title' >STT</td>
      <td width="18%"  class='title' >Tiêu đề</td>
      <td width="13%" class='title'>Yahoo</td>
      <td width="15%" class='title'>Skype</td>
      <td width="13%" class='title'>Thứ tự</td>
      <td width="12%"  class='title'>Trạng thái</td>
      <td width="15%"  class='title'>Action</td>
    </tr>
    <?php
   			$stt=0;
			foreach($mang as $row)
			{
				$stt++;
				?>
                    <tr align='center' <?php if($stt%2==0){?> class="trOdd"<?php }else{?> class="trEven" <?php }?> >
                      <td <?php if($stt%2==0){?> class="trOdd"<?php }else{?> class="trEven" <?php }?> ><input type="checkbox" name="ht[]" id="ht[]" value="<?php echo $row[0];?>" /> </td>
                      <td align="center" <?php if($stt%2==0){?> class="trOdd"<?php }else{?> class="trEven" <?php }?> ><?php echo $stt;?></td>
                      <td align="center" <?php if($stt%2==0){?> class="trOdd"<?php }else{?> class="trEven" <?php }?> ><?php  echo $row[1];?></td>
                      <td <?php if($stt%2==0){?> class="trOdd"<?php }else{?> class="trEven" <?php }?>><?php  echo $row[2];?></td>
                      <td <?php if($stt%2==0){?> class="trOdd"<?php }else{?> class="trEven" <?php }?>><?php  echo $row[3];?></td>
                      <td ><label>
                        <input  name="thutu[<?php echo $row[0];?>]" type="text" value="<?php echo $row[4];?>" size="10"/>
                      </label></td>
                      <td  <?php if($stt%2==0){?> class="trOdd"<?php }else{?> class="trEven" <?php }?>><label>
                         <input type="checkbox" name="checkbox2" id="checkbox2"<?php if($row[5]==1){?> checked="checked"<?php }?> onclick="if(this.checked==true){ window.location='index.php?page=hotro&id=<?php echo $row[0];?>&trangthai=1';}else{window.location='index.php?page=hotro&id=<?php echo $row[0];?>&trangthai=0';}" />
                      </label></td>
                      <td  <?php if($stt%2==0){?> class="trOdd"<?php }else{?> class="trEven" <?php }?>><a href="index.php?page=hotro&act=sua&id=<?php echo $row[0];?>"><img src="images/edit.png" /></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?page=hotro&act=xoa&id=<?php echo $row[0];?>" onclick="return confirm('Bạn có chắc chắn muốn xóa.');"><img src="images/delete.png" /></a></td>
                    </tr>
                    <?php
			}
	?>
    <tr align='center'>
      <td colspan="11" align="center" class="fr">Trang : 
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
