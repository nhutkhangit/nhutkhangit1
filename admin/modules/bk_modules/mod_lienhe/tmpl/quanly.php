<script language="javascript">
function check(tt,form)
{
	var b = document.getElementsByName('lh[]');
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
<form action="index.php?page=lienhe" method="post" name="form" enctype="multipart/form-data">
<table width='100%' align='center' cellpadding='2' cellspacing='0' style="margin:5px;">
     <tr>
     <td height="42">  
       <div class="buttons">
   
    <button type="submit" class="positive" name="delete">
        <img src="images/cross.png" alt=""/>
        Xóa
    </button>
</div>
</td>
  </tr>
</table>
<table cellpadding='1' cellspacing='1' width='100%'>
  <tr>
    <td colspan='12' align='center' class='title'><b>Danh sách liên hệ </b></td>
  </tr>

    <tr align=center>
      <td width="2%" class='title'><input type="checkbox" name="checkbox" id="checkbox" onClick="check(this.checked,this.form);"></td>
      <td width="2%" class='title' >STT</td>
      <td  class='title' >Họ tên</td>
      <td class='title'>Email</td>
      <td class='title'>Điện thoại</td>
      <td  class='title'>Địa chỉ</td>
      <td  class='title'>Nội dung</td>
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
                      <td <?php if($stt%2==0){?> class="trOdd"<?php }else{?> class="trEven"<?php }?>><input type="checkbox" name="lh[]" id="lh[]" value="<?php echo $row[0];?>" /></td>
                      <td align="center" <?php if($stt%2==0){?> class="trOdd"<?php }else{?> class="trEven"<?php }?>><?php echo $stt;?></td>
                      <td align="center" <?php if($stt%2==0){?> class="trOdd"<?php }else{?> class="trEven"<?php }?>><?php echo $row[1];?></td>
                      <td align="center" <?php if($stt%2==0){?> class="trOdd"<?php }else{?> class="trEven"<?php }?>><?php echo $row[4];?></td>
                      <td align="center" <?php if($stt%2==0){?> class="trOdd"<?php }else{?> class="trEven"<?php }?>><?php echo $row[2];?></td>
                      <td align="center" <?php if($stt%2==0){?> class="trOdd"<?php }else{?> class="trEven"<?php }?>><?php echo $row[3];?></td>
                      
                      <td align="center" <?php if($stt%2==0){?> class="trOdd"<?php }else{?> class="trEven"<?php }?>><?php echo $row[5];?></td>
                     
                      
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
