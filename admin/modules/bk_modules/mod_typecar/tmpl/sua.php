<form action="index.php?page=car-type&act=sua&id=<?php echo $mang[0];?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table align="center" border="0" width="100%">
    <tbody>
      <tr>
        <td class="title" align="center" width="100%"><strong>Cập nhập slide show</strong></td>
      </tr>
    </tbody>
  </table>
  <table align="center" cellpadding="0" cellspacing="0" width="100%">
    <tbody>
      <tr>
        <td width="200" class="fr">Loại Xe</td>
        <td class="fr_2"><label>
          <input name="name" type="text" id="name" value="<?php echo $mang[1];?>" size="45"/>
        </label></td>
      </tr>
      <tr>
        <td class="fr">Hình ảnh</td>
        <td class="fr_2"><label>
          <input name="filesua" type="file" id="filesua" size="35"><br>
          <img src="../../upload/slider/<?php echo $mang[2];?>"  width="150" height="50"/>
        </label></td>
      </tr>
      <tr>
        <!-- <td class="fr">Mô Tả</td>
        <td class="fr_2"><input type="text" name="thutu" id="thutu" value="<?php echo $mang[3];?>" validate="required:true,number:true"/></td> -->
        <td width="200" class="fr">Mô Tả</td>
        <td class="fr_2"><label>
          <input name="description" type="text" id="description" value="<?php echo $mang[3];?>" size="45"/>
      </tr>
      <tr>
        <td class="fr">Trạng thái</td>
        <td class="fr_2"><label>
          <select name="trangthai" id="trangthai" validate="required:true">
            <option value="">Trạng thái</option>
            <option value="1"<?php if($mang[4]==1){?> selected="selected"<?php }?>>Có</option>
            <option value="0"<?php if($mang[4]==0){?> selected="selected"<?php }?>>Không </option>
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
