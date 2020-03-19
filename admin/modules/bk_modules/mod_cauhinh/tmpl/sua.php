<form action="index.php?page=cauhinh" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table align="center" border="0" width="100%">
    <tbody>
      <tr>
        <td class="title" align="center" width="100%"><strong>Cấu hình chung</strong></td>
      </tr>
    </tbody>
  </table>
  <table align="center" cellpadding="0" cellspacing="0" width="100%">
    <tbody>
      <tr>
        <td width="200" class="fr">URL</td>
        <td class="fr_2"><input name="url" type="text" id="url" value="<?php echo $mang[1];?>" size="45" validate="required:true"/></td>
      </tr>
      <tr>
        <td class="fr">Hotline</td>
        <td class="fr_2"><input name="hotline" type="text" id="hotline" value="<?php echo $mang[2];?>" size="45" validate="required:true"/></td>
      </tr>
      <tr>
        <td class="fr">Email</td>
        <td class="fr_2"><input name="email" type="text" id="email" value="<?php echo $mang[3];?>" size="45" validate="required:true"/></td>
      </tr>
      <tr>
        <td class="fr">Địa chỉ</td>
        <td class="fr_2"><input name="diachi" type="text" id="diachi" value="<?php echo $mang[4];?>" size="45" validate="required:true"/></td>
      </tr>
      <tr>
        <td class="fr">Fax</td>
        <td class="fr_2"><input name="fax" type="text" id="fax" value="<?php echo $mang[5];?>" size="45" validate="required:true"/></td>
      </tr>
      <tr>
        <td class="fr">Title</td>
        <td class="fr_2"><input name="title" type="text" id="title" value="<?php echo $mang[6];?>" size="45" validate="required:true"/></td>
      </tr>
    
      <tr>
        <td class="fr">Keywords</td>
        <td class="fr_2"><textarea name="keywords" id="keywords" cols="45" rows="5"><?php echo $mang[7];?></textarea></td>
      </tr>
      <tr>
        <td class="fr">Description</td>
        <td class="fr_2"><label>
          <textarea name="description" id="description" cols="45" rows="5"><?php echo $mang[8];?></textarea>
        </label></td>
      </tr>
        <tr>
        <td class="fr">Bottom</td>
        <td class="fr_2"><textarea name="bottom" id="bottom" cols="45" rows="5"><?php echo $mang[9];?></textarea></td>
      </tr>
      <tr>
        <td class="fr">Bản đồ</td>
        <td class="fr_2"><label>
          <textarea name="bando" id="bando" cols="45" rows="5"><?php echo $mang[10];?></textarea>
        </label></td>
      </tr>
      <tr>
        <td></td>
        <td align="left"><div id="wait"></div>
                  <div class="buttons">
    <button type="submit" class="positive" name="capnhap">
        <img src="images/apply2.png" alt=""/> 
        Cập nhập
    </button>


    <button type="reset" class="positive" name="reset">
        <img src="images/cross.png" alt=""/>
        Làm lại
    </button>
</div></td>
      </tr>
    </tbody>
  </table>
</form>

<script type="text/javascript" language="javascript">
 
    CKEDITOR.replace( 'bottom' );
	CKEDITOR.replace( 'lienhe' );
 
</script>
