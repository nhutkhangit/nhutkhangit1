<form action="index.php?page=sanpham&act=them" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table align="center" border="0" width="100%">
    <tbody>
      <tr>
        <td class="title" align="center" width="100%">Thêm mới sản phẩm</td>
      </tr>
    </tbody>
  </table>
  <table align="center" cellpadding="0" cellspacing="0" width="100%">
    <tbody>
      <tr>
        <td width="200" class="fr">Tên sản phẩm</td>
        <td class="fr_2"><label>
          <input name="tensp" type="text" id="tensp" value="<?php if(isset($_POST['tencm'])){ echo $_POST['tencm'];}?>" size="35" validate="required:true"/>
        </label></td>
      </tr>
      <tr>
        <td class="fr">Hình ảnh </td>
        <td class="fr_2"><label>
          <input type="file" name="file" id="file" validate="required:true"/>
        </label></td>
      </tr>
      <tr>
        <td class="fr">Hình ảnh sologan</td>
        <td class="fr_2"><input type="file" name="file1" id="file1" validate="required:true"/></td>
      </tr>
      <tr>
        <td class="fr">Giá</td>
        <td class="fr_2"><input name="gia" type="text" id="gia" value="<?php if(isset($_POST['gia'])){ echo $_POST['gia'];}?>" size="35" validate="required:true,number:true"/></td>
      </tr>
      <tr>
        <td class="fr">Tóm tắt</td>
        <td class="fr_2"><label>
          <textarea name="tomtat" id="tomtat" cols="45" rows="5" validate="required:true"><?php if(isset($_POST['tomtat'])){ echo $_POST['tomtat'];}?>
          </textarea>
        </label></td>
      </tr>
        <tr>
          <td class="fr">Giới thiệu</td>
          <td class="fr_2"><textarea name="gioithieu" cols="65" rows="5" id="gioithieu" validate="required:true"><?php if(isset($_POST['gioithieu'])){ echo $_POST['gioithieu'];}?>
          </textarea></td>
        </tr>
        <tr>
          <td class="fr">Tính năng hoạt động</td>
          <td class="fr_2"><textarea name="tinhnanghoatdong" cols="65" rows="5" id="tinhnanghoatdong" validate="required:true"><?php if(isset($_POST['tinhnanghoatdong'])){ echo $_POST['tinhnanghoatdong'];}?>
          </textarea></td>
        </tr>
        <tr>
          <td class="fr">Màu sắc</td>
          <td class="fr_2"><textarea name="mausac" cols="65" rows="5" id="mausac" validate="required:true"><?php if(isset($_POST['mausac'])){ echo $_POST['mausac'];}?>
          </textarea></td>
        </tr>
        <tr>
          <td class="fr">Kiểu dáng</td>
          <td class="fr_2"><textarea name="kieudang" cols="65" rows="5" id="kieudang" validate="required:true"><?php if(isset($_POST['kieudang'])){ echo $_POST['kieudang'];}?>
          </textarea></td>
        </tr>
        <tr>
          <td class="fr">Nội thất</td>
          <td class="fr_2"><textarea name="noithat" cols="65" rows="5" id="noithat" validate="required:true"><?php if(isset($_POST['noithat'])){ echo $_POST['noithat'];}?>
          </textarea></td>
        </tr>
        <tr>
          <td class="fr">Phụ kiện chính hiệu</td>
          <td class="fr_2"><textarea name="phukienchinhhieu" cols="65" rows="5" id="phukienchinhhieu" validate="required:true"><?php if(isset($_POST['phukienchinhhieu'])){ echo $_POST['phukienchinhhieu'];}?>
          </textarea></td>
        </tr>
        <tr>
          <td class="fr">An toàn</td>
          <td class="fr_2"><textarea name="antoan" cols="65" rows="5" id="antoan" validate="required:true"><?php if(isset($_POST['antoan'])){ echo $_POST['antoan'];}?>
          </textarea></td>
        </tr>
        <tr>
          <td class="fr">Thông số kỹ thuật</td>
          <td class="fr_2"><textarea name="thongsokythuat" cols="65" rows="5" id="thongsokythuat" validate="required:true"><?php if(isset($_POST['thongsokythuat'])){ echo $_POST['thongsokythuat'];}?>
          </textarea></td>
        </tr>
        <tr>
          <td class="fr">Giá cả</td>
          <td class="fr_2"><textarea name="giaca" cols="65" rows="5" id="giaca" validate="required:true"><?php if(isset($_POST['giaca'])){ echo $_POST['giaca'];}?>
          </textarea></td>
        </tr>
        <tr>
          <td class="fr">Keyword</td>
          <td class="fr_2"><label>
            <textarea name="keyword" id="keyword" cols="45" rows="4" validate="required:true"><?php if(isset($_POST['keyword'])){ echo $_POST['keyword'];}?>
            </textarea>
          </label></td>
        </tr>
        <tr>
        <td class="fr">Thứ tự</td>
        <td class="fr_2"><input name="thutu" type="text" id="thutu" value="<?php if(isset($_POST['thutu'])){ echo $_POST['thutu'];}?>" validate="required:true,number:true"/></td>
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
