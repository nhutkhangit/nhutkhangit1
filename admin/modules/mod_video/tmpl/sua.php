<?php if (!empty($mang)): ?>
  <?php foreach ($mang as $key => $mang) : ?>
    <form action="index.php?page=video&act=sua&id=<?php echo $mang[0];?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <table align="center" border="0" width="100%">
        <tbody>
          <tr>
            <td class="title" align="center" width="100%">Cập nhập bài viết</td>
          </tr>
        </tbody>
      </table>
      <table align="center" cellpadding="0" cellspacing="0" width="100%">
        <tbody>
          <tr>
            <td class="fr">Thuộc danh mục</td>
            <td class="fr_2"><select name="iddm" id="iddm" validate="required:true">
              <option value="">Thuộc danh mục</option>
              <?php
              if (!empty($mangdm)) {
                foreach($mangdm as $rowdm){
                ?>
                  <option value="<?php echo $rowdm[0];?>"<?php if($mang[1]==$rowdm[0]){?> selected="selected"<?php }?>><?php echo $rowdm[1];?></option>
                <?php
                }
              }         
              ?>
            </select></td>
          </tr>
          <tr>
            <td width="200" class="fr">Tiêu đề</td>
            <td class="fr_2"><label>
              <input name="tieude" type="text" id="tieude" value="<?php echo $mang[2];?>" size="45" validate="required:true"/>
            </label></td>
          </tr>
          <tr>
            <td width="200" class="fr">Link</td>
            <td class="fr_2"><label>
              <input name="tieude" type="text" id="tieude" value="<?php echo $mang[5];?>" size="45" validate="required:true"/>
            </label></td>
          </tr>
          <tr>
            <td class="fr">Tóm tắt</td>
            <td class="fr_2"><label>
              <textarea name="tomtat" id="tomtat" cols="45" rows="5" validate="required:true"><?php echo $mang[3];?></textarea>
            </label></td>
          </tr>
          <tr>
            <td class="fr">Nội dung</td>
            <td class="fr_2"><textarea name="noidung" cols="65" rows="5" id="noidung" validate="required:true"><?php echo $mang[4];?></textarea></td>
          </tr>
          <tr>
            <td class="fr">Trạng thái</td>
            <td class="fr_2"><select name="trangthai" id="trangthai" validate="required:true">
             <option value="">Trạng thái</option>
            <option value="1"<?php if($mang[6]==1){?> selected="selected"<?php }?>>Có</option>
            <option value="0"<?php if($mang[6]==0){?> selected="selected"<?php }?>>Không </option>
            </select></td>
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
  <?php endforeach; ?>
<?php endif; ?>
<script type="text/javascript" language="javascript">
 
    CKEDITOR.replace( 'noidung' );
 
</script>
