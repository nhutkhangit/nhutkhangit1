<div class="relation-article">
  <h2>Bài viết liên quan</h2>
  <div class="relation-box">
    <div class="owl-relation owl-carousel owl-theme">
      <?php if (!empty($bvlq)): ?>
        <?php foreach ($bvlq as $key => $value): ?>
          <!-- item -->
          <div class="item">
            <a href="?page=chitiet&id=<?=$value['idbv']?>"><img src="uploads/images/post/<?=$value['hinhanh']?>" alt="<?=$value['hinhanh']?>" class="w-100"/></a>
            <h2><a href="?page=chitiet&id=<?=$value['idbv']?>"><?=$value['tieude']?></a></h2>
            <!-- <p class="date"><span>Ngày đăng: <?=$value['ngaytao']?></span></p>
            <p class="summary"><?=$value['tomtat']?></p> -->
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <div>Không có bài viết nào!</div>
      <?php endif; ?>
    </div>
  </div>
  <!-- relation-box -->
</div>