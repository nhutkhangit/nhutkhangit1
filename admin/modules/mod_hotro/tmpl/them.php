<form action="index.php?page=hotro&act=them" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table align="center" border="0" width="100%">
    <tbody>
      <tr>
        <td class="title" align="center" width="100%">Thêm mới hỗ trợ trực tuyến</td>
      </tr>
    </tbody>
  </table>
  <table align="center" cellpadding="0" cellspacing="0" width="100%">
    <tbody>
      <tr>
        <td class="fr">Tiêu đề</td>
        <td class="fr_2"><input name="tieude" type="text" id="tieude" value="<?php if(isset($_POST['tieude'])){ echo $_POST['tieude'];}?>" size="35" validate="required:true" /></td>
      </tr>
      <tr>
        <td width="200" class="fr">Yahoo</td>
        <td class="fr_2"><label>
          <input name="yahoo" type="text" id="yahoo" value="<?php if(isset($_POST['yahoo'])){ echo $_POST['yahoo'];}?>" size="35" validate="required:true" />
        </label></td>
      </tr>
      <tr>
        <td class="fr">Skype</td>
        <td class="fr_2"><input name="skype" type="text" id="skype" value="<?php if(isset($_POST['skype'])){ echo $_POST['skype'];}?>" size="35" validate="required:true" /></td>
      </tr>
      <tr>
        <td class="fr">Thứ tự</td>
        <td class="fr_2"><input name="thutu" type="text" id="thutu" value="<?php if(isset($_POST['thutu'])){ echo $_POST['thutu'];}?>" validate="required:true,number:true"/></td>
      </tr>
      <tr>
        <td class="fr">Trạng thái</td>
        <td class="fr_2"><label>
          <select name="trangthai" id="trangthai" validate="required:true">
            <option value="">Trạng thái</option>
            <option value="1">Có</option>
            <option value="0">Không</option>
          </select>
        </label></td>
      </tr>
      <tr>
        <td></td>
        <td align="left"><div id="wait"></div>
          <div class="buttons">
    <button type="submit" class="positive" name="them">
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
