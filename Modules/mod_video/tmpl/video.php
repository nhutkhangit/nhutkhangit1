<br/>
<div class="row nk_video">
  <div class="col-lg-12">
    <iframe class="size-video" src="https://www.youtube.com/embed/FpQhDLDARAo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  <div class="col-lg-12">
    <h4>NHÂN VẬT MẠNH NHẤT ONE PIECE TUỔI U30 THỜI ĐIỂM HIỆN TẠI ???</h4>
  </div>
</div>
<!-- <div class="new-blog">
  <div class="post-right">
    <div class="image-post-right">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/FpQhDLDARAo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="detail-post-right" style="">
      fdhjknvsdl;
    </div>
  </div>
</div> -->
<div class="new-blog">
  <h2 class="title-right-box">Video</h2>
  <?php if (!empty($danhmuc)) : ?>
    <?php foreach ($danhmuc as $key => $danhmuc) : ?>
      <div class="row nk_video">
        <div class="col-lg-6">
          <iframe class="size-video-list" src="<?=$danhmuc['link']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-lg-6 mg-title">
          <h4><?=$danhmuc['tieude']?></h4>
        </div>
      </div>
      <!-- <div class="post-right">
        <div class="image-post-right">
            <a href="?page=video&id=<?=$danhmuc['idbv']?>"><img src="uploads/images/post/<?=$danhmuc['hinhanh']?>" width="100"/></a>
        </div>
        <div class="detail-post-right">
          <h2><a href="?page=video&id=<?=$danhmuc['idbv']?>"><?=$danhmuc['tieude']?></a></h2>
          <span>Ngày đăng: <?=$danhmuc['ngaytao']?></span>
        </div>
      </div> -->
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