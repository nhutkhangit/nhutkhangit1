<?php if (!empty($mang)): ?>
  <?php foreach ($mang as $key => $mang):?>
    <form action="index.php?page=danhmuc&act=sua&id=<?php echo $mang[0];?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <table align="center" border="0" width="100%">
        <tbody>
            <tr>
                <td class="title" align="center" width="100%">Cập nhập danhmuc</td>
            </tr>
        </tbody>
    </table>
    <table align="center" cellpadding="0" cellspacing="0" width="100%">
        <tbody>
            <tr>
                <td width="200" class="fr">Tên Danh mục</td>
                <td class="fr_2">
                    <label>
                        <input name="tendanhmuc" type="text" id="tendanhmuc" value="<?php echo $mang[1];?>" size="45" validate="required:true" />
                    </label>
                </td>
            </tr>
            <tr>
                <td class="fr">Trạng thái</td>
                <td class="fr_2">
                    <select name="trangthai" id="trangthai" validate="required:true">
                        <option value="">Trạng thái</option>
                        <option value="1" <?php if($mang[2]==1){?> selected="selected"
                            <?php }?>>Có</option>
                        <option value="0" <?php if($mang[2]==0){?> selected="selected"
                            <?php }?>>Không </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td align="left">
                    <div id="wait"></div>
                    <div class="buttons">
                        <button type="submit" class="positive" name="capnhap">
                            <img src="images/apply2.png" alt="" /> Cập nhập
                        </button>

                        <button type="reset" class="positive" name="reset">
                            <img src="images/cross.png" alt="" /> Làm lại
                        </button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    </form>
  <?php endforeach; ?>
<?php endif; ?>
