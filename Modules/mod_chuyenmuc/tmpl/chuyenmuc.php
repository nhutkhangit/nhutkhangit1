<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  <div class="right-box">
    <h2 class="title-right-box">Chuyên mục</h2>
    <ul class="category-right">
      <?php foreach ($result as $key => $value)  : ?>         
          <li><a href="?page=danhmuc&iddm=<?=$value['id'];?>"><?=$value['name'];?></a>
      <?php endforeach; ?>
    </ul>
  </div>
  <!-- right box -->
  <div class="new-blog">
    <h2 class="title-right-box">Bài viết mới</h2>
    <?php if (!empty($new_post)) : ?>
      <?php foreach ($new_post as $key => $new_posted) : ?>
        <div class="post-right">
          <div class="image-post-right">
              <a href="?bai-viet=<?=$new_posted['id']?>"><img src="assets/images/<?=$new_posted['images']?>" width="80"/></a>
          </div>
          <div class="detail-post-right">
            <h2><a href="?bai-viet=<?=$new_posted['id']?>"><?=$new_posted['title']?></a></h2>
            <span>Ngày đăng: <?=$new_posted['create_at']?></span>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else : ?>
      <div>No new post!</div>
    <?php endif; ?>
    <!-- blog-right -->
  </div>
  <!-- right box -->
  <div class="new-blog">
    <h2 class="title-right-box">Bài viết xem nhiều</h2>
    <?php if (!empty($post_xemnhieu)): ?>
      <?php $i=1; ?>
      <?php foreach ($post_xemnhieu as $key => $xemnhieu) : ?>
        <div class="post-right">
          <div class="number-post"><?=$i++?></div>
          <div class="detail-post-right">
            <h2><a href="?bai-viet=<?=$xemnhieu['id']?>"><?=$xemnhieu['title']?></a></h2>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <div>No Post !!</div>
    <?php endif;?>
    <!-- post-right -->
  </div>
  <!-- right box -->
  <div class="right-box">
    <h2 class="title-right-box">Quảng cáo</h2>
    <a href="#"><img src="assets/images/banner-adv.jpg" alt="banner-adv.jpg" class="w-100"/></a>
  </div>
  <!-- right box -->
  <div class="new-blog">
    <h2 class="title-right-box">Bạn bè</h2>
    <div class="post-right">
      <div class="detail-post-right">
        <h2><a href="#">Blog 1</a></h2>
      </div>
    </div>
    <!-- post-right -->
    <div class="post-right">
      <div class="detail-post-right">
        <h2><a href="#">Blog 2</a></h2>
      </div>
    </div>
    <!-- post-right -->
    <div class="post-right">
      <div class="detail-post-right">
        <h2><a href="#">Blog 3</a></h2>
      </div>
    </div>
    <!-- post-right -->
  </div>
  <!-- right box -->
  <div class="new-blog">
    <h2 class="title-right-box">Facebook</h2>
  </div>
  <!-- right box -->
</div>