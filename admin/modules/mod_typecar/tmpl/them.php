<form action="index.php?page=slide&act=them" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table align="center" border="0" width="100%">
    <tbody>
      <tr>
        <td class="title" align="center" width="100%">Thêm mới slide show</td>
      </tr>
    </tbody>
  </table>
  <table align="center" cellpadding="0" cellspacing="0" width="100%">
    <tbody>
      <tr>
        <td width="200" class="fr">URL</td>
        <td class="fr_2"><label>
          <input name="url" type="text" id="url" value="<?php if(isset($_POST['url'])){ echo $_POST['url'];}?>" size="45" validate="required:true,url:true"/>
        </label></td>
      </tr>
      <tr>
        <td class="fr">Hình ảnh</td>
        <td class="fr_2"><label>
          <input name="file" type="file" id="file" size="35" validate="required:true">
        </label></td>
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
            <option value="0">Không </option>
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
