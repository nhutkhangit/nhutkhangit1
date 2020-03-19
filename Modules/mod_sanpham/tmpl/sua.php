<form action="index.php?page=sanpham&act=sua&id=<?php echo $mang[0];?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table align="center" border="0" width="100%">
    <tbody>
      <tr>
        <td class="title" align="center" width="100%">Cập nhập sản phẩm</td>
      </tr>
    </tbody>
  </table>
  <table align="center" cellpadding="0" cellspacing="0" width="100%">
    <tbody>
      <tr>
        <td width="200" class="fr">Tên sản phẩm</td>
        <td class="fr_2"><label>
          <input name="tensp" type="text" id="tensp" value="<?php echo $mang[1];?>" size="35" validate="required:true"/>
        </label></td>
      </tr>
      <tr>
        <td class="fr">Hình ảnh </td>
        <td class="fr_2"><label>
          <input type="file" name="filesua" id="filesua" />
        </label><br />
        <img src="../data/sanpham/<?php echo $mang[2];?>" width="120" height="60" /></td>
      </tr>
      <tr>
        <td class="fr">Hình ảnh sologan</td>
        <td class="fr_2"><input type="file" name="filesua1" id="filesua1" />
        <br />
          <img src="../data/sanpham/<?php echo $mang[3];?>" width="190" height="60" />
        </td>
      </tr>
      <tr>
        <td class="fr">Giá</td>
        <td class="fr_2"><input name="gia" type="text" id="gia" value="<?php echo $mang[4];?>" size="35" validate="required:true,number:true"/></td>
      </tr>
      <tr>
        <td class="fr">Tóm tắt</td>
        <td class="fr_2"><label>
          <textarea name="tomtat" id="tomtat" cols="45" rows="5" validate="required:true"><?php echo $mang[5];?></textarea>
        </label></td>
      </tr>
        <tr>
          <td class="fr">Giới thiệu</td>
          <td class="fr_2"><textarea name="gioithieu" cols="65" rows="5" id="gioithieu" validate="required:true"><?php echo $mang[6];?></textarea></td>
        </tr>
        <tr>
          <td class="fr">Tính năng hoạt động</td>
          <td class="fr_2"><textarea name="tinhnanghoatdong" cols="65" rows="5" id="tinhnanghoatdong" validate="required:true"><?php echo $mang[7];?>          </textarea></td>
        </tr>
        <tr>
          <td class="fr">Màu sắc</td>
          <td class="fr_2"><textarea name="mausac" cols="65" rows="5" id="mausac" validate="required:true"><?php echo $mang[8];?></textarea></td>
        </tr>
        <tr>
          <td class="fr">Kiểu dáng</td>
          <td class="fr_2"><textarea name="kieudang" cols="65" rows="5" id="kieudang" validate="required:true"><?php echo $mang[9];?></textarea></td>
        </tr>
        <tr>
          <td class="fr">Nội thất</td>
          <td class="fr_2"><textarea name="noithat" cols="65" rows="5" id="noithat" validate="required:true"><?php echo $mang[10];?></textarea></td>
        </tr>
        <tr>
          <td class="fr">Phụ kiện chính hiệu</td>
          <td class="fr_2"><textarea name="phukienchinhhieu" cols="65" rows="5" id="phukienchinhhieu" validate="required:true"><?php echo $mang[11];?></textarea></td>
        </tr>
        <tr>
          <td class="fr">An toàn</td>
          <td class="fr_2"><textarea name="antoan" cols="65" rows="5" id="antoan" validate="required:true"><?php echo $mang[12];?></textarea></td>
        </tr>
        <tr>
          <td class="fr">Thông số kỹ thuật</td>
          <td class="fr_2"><textarea name="thongsokythuat" cols="65" rows="5" id="thongsokythuat" validate="required:true"><?php echo $mang[13];?></textarea></td>
        </tr>
        <tr>
          <td class="fr">Giá cả</td>
          <td class="fr_2"><textarea name="giaca" cols="65" rows="5" id="giaca" validate="required:true"><?php echo $mang[14];?></textarea></td>
        </tr>
        <tr>
          <td class="fr">Keyword</td>
          <td class="fr_2"><label>
            <textarea name="keyword" id="keyword" cols="45" rows="4" validate="required:true"><?php echo $mang[15];?></textarea>
          </label></td>
        </tr>
        <tr>
        <td class="fr">Thứ tự</td>
        <td class="fr_2"><input name="thutu" type="text" id="thutu" value="<?php echo $mang[17];?>" validate="required:true,number:true"/></td>
      </tr>
      <tr>
        <td class="fr">Trạng thái</td>
        <td class="fr_2"><select name="trangthai" id="trangthai" validate="required:true">
          <option value="">Trạng thái&nbsp;&nbsp;</option>
          <option value="1" <?php if($mang[18]==1){?> selected="selected"<?php }?>>Có</option>
          <option value="0" <?php if($mang[18]==0){?> selected="selected"<?php }?>>Không </option>
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
<script type="text/javascript" language="javascript">
 
    CKEDITOR.replace( 'gioithieu' );
	CKEDITOR.replace( 'tinhnanghoatdong' );
	CKEDITOR.replace( 'mausac' );
	CKEDITOR.replace( 'kieudang' );
	CKEDITOR.replace( 'noithat' );
	CKEDITOR.replace( 'phukienchinhhieu' );
	CKEDITOR.replace( 'antoan' );
	CKEDITOR.replace( 'thongsokythuat' );
	CKEDITOR.replace( 'giaca' );
 
</script>
