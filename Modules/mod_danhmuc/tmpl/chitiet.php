<div class="new-blog">
  <h2 class="title-right-box"><?php if (!empty($get_name)): ?><?=$get_name[0]['name']?><?php endif; ?></h2>
  <?php if (!empty($danhmuc)) : ?>
    <?php foreach ($danhmuc as $key => $danhmuc) : ?>
      <div class="post-right">
        <div class="image-post-right">
            <a href="?page=chitiet&id=<?=$danhmuc['idbv']?>"><img src="uploads/images/post/<?=$danhmuc['hinhanh']?>" width="100"/></a>
        </div>
        <div class="detail-post-right">
          <h2><a href="?page=chitiet&id=<?=$danhmuc['idbv']?>"><?=$danhmuc['tieude']?></a></h2>
          <span>Ngày đăng: <?=$danhmuc['ngaytao']?></span>
        </div>
      </div>
    <?php endforeach; ?>
    <tr align='center'>
      <td colspan="12" align="center" class="fr">Trang : 
        <label>
          <select name="select" id="select" onchange="window.location='<?php echo $chuoi;?>&p='+this.value;">
          <?php
          for($i=1;$i<=$page;$i++){
          ?>
          <option value="<?php echo $i;?>"<?php if(isset($_GET['p']) and $_GET['p']==$i){?> selected="selected"<?php }?>><?php echo $i;?></option>
          <?php
          }
          ?>
          </select>
        </label>
      </td>
    </tr>
  <?php else : ?>
    <div>Không có bài viết nào!</div>
  <?php endif; ?>
  <!-- blog-right -->
</div>