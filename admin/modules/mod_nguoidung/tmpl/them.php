<form action="index.php?page=nguoidung&act=them" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table align="center" border="0" width="100%">
    <tbody>
      <tr>
        <td class="title" align="center" width="100%">Thêm mới người dùng</td>
      </tr>
    </tbody>
  </table>
  <table align="center" cellpadding="0" cellspacing="0" width="100%">
    <tbody>
      <tr>
        <td width="200" class="fr">Tên đăng nhập</td>
        <td class="fr_2"><label>
          <input name="tendangnhap" type="text" id="tendangnhap" value="<?php if(isset($_POST['tendangnhap'])){ echo $_POST['tendangnhap'];}?>" size="35" validate="required:true"/>
        </label></td>
      </tr>
      <tr>
        <td class="fr">Mật khẩu</td>
        <td class="fr_2"><input name="mk1" type="password" id="mk1"  validate="required:true"/></td>
      </tr>
      <tr>
        <td class="fr">Nhập lại mật khẩu</td>
        <td class="fr_2"><input name="mk2" type="password" id="mk2" validate="required:true,equalTo:mk1"/></td>
      </tr>
      <tr>
        <td class="fr">Email</td>
        <td class="fr_2"><input name="email" type="text" id="email"  size="35" validate="required:true,email:true"/></td>
      </tr>
      <tr>
        <td class="fr">Phân quyền</td>
        <td class="fr_2"><table width="200" border="0">
          <tr>
            <td width="27" align="center"><input name="q[]" type="checkbox" value="nguoi-dung" id="q[]" /></td>
            <td width="163">Người dùng</td>
          </tr>
          <tr>
            <td align="center"><input name="q[]" type="checkbox" value="slide" id="q[]" /></td>
            <td>Quản lý slideshow</td>
          </tr>
          <tr>
            <td align="center"><input name="q[]" type="checkbox" value="chuyen-muc" id="q[]" /></td>
            <td>Quản lý chuyên mục</td>
          </tr>
          <tr>
            <td align="center"><input name="q[]" type="checkbox" value="theuudai" id="q[]" /></td>
            <td>Quản lý điểm bán thẻ</td>
          </tr>
          <tr>
            <td align="center"><input name="q[]" type="checkbox" value="sanpham" id="q[]" /></td>
            <td>Quản lý sản phẩm</td>
          </tr>
          <tr>
            <td align="center"><input name="q[]" type="checkbox" value="voucher" id="q[]" /></td>
            <td>Quản lý voucher</td>
          </tr>
          <tr>
            <td align="center"><input name="q[]" type="checkbox" value="hoadontheuudai" id="q[]" /></td>
            <td>Hóa đơn thẻ ưu đãi</td>
          </tr>
          <tr>
            <td align="center"><input name="q[]" type="checkbox" value="hoadonsanpham" id="q[]" /></td>
            <td>Hóa đơn sản phẩm</td>
          </tr>
          <tr>
            <td align="center"><input name="q[]" type="checkbox" value="hoadonvoucher" id="q[]" /></td>
            <td>Hóa đơn voucher</td>
          </tr>
          <tr>
            <td align="center"><input name="q[]" type="checkbox" value="thanhvien" id="q[]" /></td>
            <td>Quản lý thành viên</td>
          </tr>
          <tr>
            <td align="center"><input name="q[]" type="checkbox" value="the" id="q[]" /></td>
            <td>Quản lý thẻ ưu đãi</td>
          </tr>
          <tr>
            <td align="center"><input name="q[]" type="checkbox" value="quang-cao" id="q[]" /></td>
            <td>Quảng cáo</td>
          </tr>
          <tr>
            <td align="center"><input name="q[]" type="checkbox" value="ho-tro" id="q[]" /></td>
            <td>Hỗ trợ trực tuyến</td>
          </tr>
        </table></td>
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
          <input name="them" value="Submit" type="submit" id="them" />
          <input value="Reset" type="reset" /></td>
      </tr>
    </tbody>
  </table>
</form>
