<form action="index.php?page=hotro&act=sua&id=<?php echo $mang[0];?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table align="center" border="0" width="100%">
    <tbody>
      <tr>
        <td class="title" align="center" width="100%"><strong>Cập nhập hỗ trợ trực tuyến</strong></td>
      </tr>
    </tbody>
  </table>
  <table align="center" cellpadding="0" cellspacing="0" width="100%">
    <tbody>
      <tr>
        <td width="200" height="25" class="fr">Tiêu đề</td>
        <td class="fr_2"><label>
          <input name="tieude" type="text" id="tieude" value="<?php echo $mang[1];?>" validate="required:true">
        </label></td>
      </tr>
      <tr>
        <td class="fr">Yahoo</td>
        <td class="fr_2"><input type="text" name="yahoo" id="yahoo" value="<?php echo $mang[2];?>" validate="required:true"/></td>
      </tr>
      <tr>
        <td class="fr">Skype</td>
        <td class="fr_2"><label>
          <input type="text" name="skype" id="skype" value="<?php echo $mang[3];?>" validate="required:true"/>
        </label></td>
      </tr>
      <tr>
        <td class="fr">Thứ tự</td>
        <td class="fr_2"><input type="text" name="thutu" id="thutu" value="<?php echo $mang[4];?>" validate="required:true,number:true"/></td>
      </tr>
      <tr>
        <td class="fr">Trạng thái</td>
        <td class="fr_2"><label>
          <select name="trangthai" id="trangthai" validate="required:true">
            <option value="">Trạng thái</option>
            <option value="1" <?php if($mang[5]==1){?> selected="selected"<?php }?>>Có </option>
            <option value="0" <?php if($mang[5]==0){?> selected="selected"<?php }?>>Không</option>
          </select>
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
