<div class="new-blog">
  <h2 class="title-right-box">Bài viết mới</h2>
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
  <?php else : ?>
    <div>Không có bài viết nào!</div>
  <?php endif; ?>
  <!-- blog-right -->
</div>