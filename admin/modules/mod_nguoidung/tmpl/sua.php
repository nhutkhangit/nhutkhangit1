<form action="index.php?page=nguoidung&act=sua&id=<?php echo $mang[0];?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table align="center" border="0" width="100%">
    <tbody>
      <tr>
        <td class="title" align="center" width="100%"><strong>Cập nhập thông tin người dùng</strong></td>
      </tr>
    </tbody>
  </table>
  <table align="center" cellpadding="0" cellspacing="0" width="100%">
    <tbody>
      <tr>
        <td width="200" class="fr">Tên đăng nhập</td>
        <td class="fr_2"><label>
          <input name="tendangnhap" type="text" id="tendangnhap" readonly="readonly" value="<?php echo $mang[1];?>">
        </label></td>
      </tr>
      <tr>
        <td class="fr">Mật khẩu</td>
        <td class="fr_2"><input name="mk1" type="password" id="mk1"  /></td>
      </tr>
      <tr>
        <td class="fr">Nhập lại mật khẩu</td>
        <td class="fr_2"><input name="mk2" type="password" id="mk2"  /></td>
      </tr>
      <tr>
        <td class="fr">Email</td>
        <td class="fr_2"><input name="email" type="text" id="email" value="<?php echo $mang[3];?>" size="35"  readonly="readonly"/></td>
      </tr>
      <tr>
        <td class="fr">Phân quyền</td>
        <td class="fr_2">
        <table width="200" border="0">
          <tr>
            <td width="27" align="center"><input name="q[]" type="checkbox" value="nguoi-dung" id="q[]"  <?php for($i=0;$i< count($mang1);$i++){ 
	  if($mang1[$i]=='nguoi-dung')
	  {
		  ?>
          checked="true";
          <?php
	  }
	  }
	  ?>/></td>
            <td width="163">Người dùng</td>
          </tr>
          <tr>
            <td align="center"><input name="q[]" type="checkbox" value="slide" id="q[]"  <?php for($i=0;$i< count($mang1);$i++){ 
	  if($mang1[$i]=='slide')
	  {
		  ?>
          checked="true";
          <?php
	  }
	  }
	  ?>/></td>
            <td>Quản lý slideshow</td>
          </tr>
          <tr>
            <td align="center"><input name="q[]" type="checkbox" value="chuyen-muc" id="q[]"  <?php for($i=0;$i< count($mang1);$i++){ 
	  if($mang1[$i]=='chuyen-muc')
	  {
		  ?>
          checked="true";
          <?php
	  }
	  }
	  ?>/></td>
            <td>Quản lý chuyên mục</td>
          </tr>
          <tr>
            <td align="center"><input name="q[]" type="checkbox" value="theuudai" id="q[]"  <?php for($i=0;$i< count($mang1);$i++){ 
	  if($mang1[$i]=='theuudai')
	  {
		  ?>
          checked="true";
          <?php
	  }
	  }
	  ?> /></td>
            <td>Quản lý điểm bán thẻ</td>
          </tr>
          <tr>
            <td align="center"><input name="q[]" type="checkbox" value="sanpham" id="q[]"  <?php for($i=0;$i< count($mang1);$i++){ 
	  if($mang1[$i]=='sanpham')
	  {
		  ?>
          checked="true";
          <?php
	  }
	  }
	  ?>/></td>
            <td>Quản lý sản phẩm</td>
          </tr>
          <tr>
            <td align="center"><input name="q[]" type="checkbox" value="voucher" id="q[]"  <?php for($i=0;$i< count($mang1);$i++){ 
	  if($mang1[$i]=='voucher')
	  {
		  ?>
          checked="true";
          <?php
	  }
	  }
	  ?>/></td>
            <td>Quản lý voucher</td>
          </tr>
          <tr>
            <td align="center"><input name="q[]" type="checkbox" value="hoadontheuudai" id="q[]"  <?php for($i=0;$i< count($mang1);$i++){ 
	  if($mang1[$i]=='hoadontheuudai')
	  {
		  ?>
          checked="true";
          <?php
	  }
	  }
	  ?>/></td>
            <td>Hóa đơn thẻ ưu đãi</td>
          </tr>
          <tr>
            <td align="center"><input name="q[]" type="checkbox" value="hoadonsanpham" id="q[]"  <?php for($i=0;$i< count($mang1);$i++){ 
	  if($mang1[$i]=='hoadonsanpham')
	  {
		  ?>
          checked="true";
          <?php
	  }
	  }
	  ?>/></td>
            <td>Hóa đơn sản phẩm</td>
          </tr>
          <tr>
            <td align="center"><input name="q[]" type="checkbox" value="hoadonvoucher" id="q[]"  <?php for($i=0;$i< count($mang1);$i++){ 
	  if($mang1[$i]=='hoadonvoucher')
	  {
		  ?>
          checked="true";
          <?php
	  }
	  }
	  ?>/></td>
            <td>Hóa đơn voucher</td>
          </tr>
          <tr>
            <td align="center"><input name="q[]" type="checkbox" value="thanhvien" id="q[]"  <?php for($i=0;$i< count($mang1);$i++){ 
	  if($mang1[$i]=='thanhvien')
	  {
		  ?>
          checked="true";
          <?php
	  }
	  }
	  ?>/></td>
            <td>Quản lý thành viên</td>
          </tr>
          <tr>
            <td align="center"><input name="q[]" type="checkbox" value="the" id="q[]"  <?php for($i=0;$i< count($mang1);$i++){ 
	  if($mang1[$i]=='the')
	  {
		  ?>
          checked="true";
          <?php
	  }
	  }
	  ?>/></td>
            <td>Quản lý thẻ ưu đãi</td>
          </tr>
          <tr>
            <td align="center"><input name="q[]" type="checkbox" value="quang-cao" id="q[]"  <?php for($i=0;$i< count($mang1);$i++){ 
	  if($mang1[$i]=='quang-cao')
	  {
		  ?>
          checked="true";
          <?php
	  }
	  }
	  ?>/></td>
            <td>Quảng cáo</td>
          </tr>
          <tr>
            <td align="center"><input name="q[]" type="checkbox" value="ho-tro" id="q[]"  <?php for($i=0;$i< count($mang1);$i++){ 
	  if($mang1[$i]=='ho-tro')
	  {
		  ?>
          checked="true";
          <?php
	  }
	  }
	  ?>/></td>
            <td>Hỗ trợ trực tuyến</td>
          </tr>
        </table>
        </td>
      </tr>
      <tr>
        <td class="fr">Trạng thái</td>
        <td class="fr_2"><label>
          <select name="trangthai" id="trangthai" readonly="readonly">
          <option value="">Trạng thái</option>
          <option value="1" <?php if($mang[5]==1){?> selected="selected"<?php }?>>Có</option>
          <option value="0" <?php if($mang[5]==0){?> selected="selected"<?php }?>>Không</option>
          </select>
        </label></td>
      </tr>
      <tr>
        <td></td>
        <td align="left"><div id="wait"></div>
          <input name="capnhap" value="Submit" type="submit" id="capnhap" />
          <input value="Reset" type="reset" /></td>
      </tr>
    </tbody>
  </table>
</form>
