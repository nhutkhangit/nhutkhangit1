<form action="index.php?page=danhmuc&act=them" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table align="center" border="0" width="100%">
    <tbody>
      <tr>
        <td class="title" align="center" width="100%">Thêm mới Danh mục </td>
      </tr>
    </tbody>
  </table>
  <table align="center" cellpadding="0" cellspacing="0" width="100%">
    <tbody>
      <tr>
        <td width="200" class="fr">Tên Danh mục</td>
        <td class="fr_2"><label>
          <input name="tendanhmuc" type="text" id="tendanhmuc" value="<?php if(isset($_POST['tendanhmuc'])){ echo $_POST['tendanhmuc'];}?>" size="35" validate="required:true"/>
        </label></td>
      </tr>
      <tr>
        <td class="fr">Trạng thái</td>
        <td class="fr_2"><select name="trangthai" id="trangthai" validate="required:true">
          <option value="">Trạng thái&nbsp;&nbsp;</option>
          <option value="1">Có</option>
          <option value="0">Không </option>
        </select></td>
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
