<form action="index.php?page=tintuc&act=sua&id=<?php echo $mang[0];?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table align="center" border="0" width="100%">
    <tbody>
      <tr>
        <td class="title" align="center" width="100%">Cập nhập tin tức</td>
      </tr>
    </tbody>
  </table>
  <table align="center" cellpadding="0" cellspacing="0" width="100%">
    <tbody>
    <tr>
        <td class="fr">Thuộc chuyên mục</td>
        <td class="fr_2"><label>
          <select name="idcm" id="idcm" validate="required:true">
            <option value="">Thuộc chuyên mục</option>
            <?php 
					foreach($dscm as $rowcm)
					{
						?>
                        <option value="<?php echo $rowcm[0];?>" <?php if($mang[1]==$rowcm[0]){?> selected="selected"<?php }?>><?php echo $rowcm[1];?></option>
                        <?php
					}
			?>
          </select>
        </label></td>
      </tr>
      <tr>
        <td width="200" class="fr">Tiêu đề</td>
        <td class="fr_2"><label>
          <input name="tieude" type="text" id="tieude" value="<?php echo $mang[2];?>" size="45" validate="required:true"/>
        </label></td>
      </tr>
      <tr>
        <td class="fr">Hình ảnh</td>
        <td class="fr_2"><label>
          <input name="filesua" type="file" id="filesua" size="35"  />
        </label><br />
        <img src="../data/tintuc/<?php echo $mang[3];?>" width="120" height="70" /></td>
      </tr>
      <tr>
        <td class="fr">Tóm tắt</td>
        <td class="fr_2"><label>
          <textarea name="tomtat" id="tomtat" cols="45" rows="5"><?php echo $mang[4];?></textarea>
        </label></td>
      </tr>
      <tr>
        <td class="fr">Nội dung</td>
        <td class="fr_2"><textarea name="noidung" cols="65" rows="5" id="noidung" validate="required:true"><?php echo $mang[5];?></textarea></td>
      </tr>
      <tr>
        <td class="fr">Tags</td>
        <td class="fr_2"><input name="tags" type="text" id="tags" value="<?php echo $mang[10];?>" size="45" validate="required:true"/></td>
      </tr>
      <tr>
        <td class="fr">Keyword</td>
        <td class="fr_2"><label>
          <textarea name="keyword" id="keyword" cols="45" rows="4"><?php echo $mang[11];?></textarea>
        </label></td>
      </tr>
      <tr>
        <td class="fr">Thứ tự</td>
        <td class="fr_2"><input name="thutu" type="text" id="thutu" value="<?php echo $mang[6];?>" validate="required:true,number:true"/></td>
      </tr>
      <tr>
        <td class="fr">Hiện trang chủ</td>
        <td class="fr_2"><select name="hientrangchu" id="hientrangchu" validate="required:true">
         <option value="">Hiện trang chủ&nbsp;&nbsp;</option>
        <option value="1"<?php if($mang[9]==1){?> selected="selected"<?php }?>>Có</option>
        <option value="0"<?php if($mang[9]==0){?> selected="selected"<?php }?>>Không </option>
        </select></td>
      </tr>
      <tr>
        <td class="fr">Trạng thái</td>
        <td class="fr_2"><select name="trangthai" id="trangthai" validate="required:true">
         <option value="">Trạng thái&nbsp;&nbsp;</option>
        <option value="1"<?php if($mang[12]==1){?> selected="selected"<?php }?>>Có</option>
        <option value="0"<?php if($mang[12]==0){?> selected="selected"<?php }?>>Không </option>
        </select></td>
      </tr>
      <tr>
        <td></td>
        <td align="left"><div id="wait"></div>
          <div class="buttons">
            <button type="submit" class="positive" name="capnhap"> <img src="images/apply2.png" alt=""/> Cập nhập </button>
            <button type="reset" class="positive" name="reset"> <img src="images/cross.png" alt=""/> Làm lại </button>
        </div></td>
      </tr>
    </tbody>
  </table>
</form>
<script type="text/javascript" language="javascript">
 
    CKEDITOR.replace( 'noidung' );
 
</script>
