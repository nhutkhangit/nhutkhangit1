<script language="javascript">
function check(tt,form)
{
	var b = document.getElementsByName('mn[]');
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
<form action="index.php?page=danhmuc" method="post" name="form">
<table width='100%' align='center' cellpadding='2' cellspacing='0' style="margin:5px;">
 <tr>
    <td width="100%" height="34">
    
    <div class="buttons">
    <button type="button" class="positive" name="save" onclick="window.location='index.php?page=danhmuc&act=them'">
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
</table>
<table cellpadding='1' cellspacing='1' width='100%'>
  <tr>
    <td height="35" colspan='14' align='center' class='title'><b>Quản lý Danh mục</b></td>
  </tr>
  
    <tr align=center>
      <td  class='title'><input type="checkbox" name="checkbox" id="checkbox" onClick="check(this.checked,this.form);"></td>
      <td  class='title' >STT</td>
      <td  class='title' >Tên Danh Mục</td>
      <td class='title'>Trạng thái</td>
      <td  class='title'>Thao tác</td>
    </tr>
    <?php	
      if (!empty($mang)) {
        $n = count($mang);
      }
			if(isset($n) && $n>0){
				$stt=0;
        if (!empty($mang)) {
          foreach($mang as $row){
            $stt++;
            ?>
            <tr align='center' <?php if($stt%2==0){?> class="trOdd" <?php }else{?> class="trEven" <?php }?> >
              <td <?php if($stt%2==0){?> class="trOdd" <?php }else{?> class="trEven" <?php }?> ><input type="checkbox" name="mn[]" id="mn[]" value="<?php echo $row[0];?>" /></td>
              <td align="center" <?php if($stt%2==0){?> class="trOdd" <?php }else{?> class="trEven" <?php }?> ><?php echo $stt;?></td>
              <td align="center" <?php if($stt%2==0){?> class="trOdd" <?php }else{?> class="trEven" <?php }?> ><?php echo $row[1];?></td>
              <td align="center" <?php if($stt%2==0){?> class="trOdd" <?php }else{?> class="trEven" <?php }?> >
                <?php
                if ($row[2]==1){
                  echo 'Publish';
                }else{
                  echo 'Unpublish';
                }
                ?> 
              </td>
              <td <?php if($stt%2==0){?> class="trOdd" <?php }else{?> class="trEven" <?php }?> >
                <a href="index.php?page=danhmuc&act=sua&id=<?php echo $row[0];?>"><img src="images/edit.png" /></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?page=danhmuc&act=xoa&id=<?php echo $row[0];?>" onclick="return confirm('Bạn có chắc chắn muốn xóa.');"><img src="images/delete.png" /></a>
              </td>
            </tr>
            <?php
          }
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
