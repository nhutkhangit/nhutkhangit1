<h1 class="title-blog">Bài viết nổi bật</h1>
<div class="slider-blog">
  <div class="owl-slider owl-carousel owl-theme">
    <?php foreach ($slide as $slider) :?>
      <div class="item">
        <a href="?page=chitiet&id=<?=$slider['idbv']?>"><img src="uploads/images/post/<?=$slider['hinhanh']?>" alt="slider-1.jpg" class="w-100"/></a>
        <h2><a href="?page=chitiet&id=<?=$slider['idbv']?>"><?=$slider['tieude']?></a></h2>
        <p class="date"><span>Ngày đăng: <?=$slider['ngaytao']?></span> <span>Lượt xem: <?=$slider['luotxem']?></span></p>
        <p class="summary"><?=$slider['tomtat']?></p>
      </div>
    <?php endforeach; ?>
      <!-- item -->
  </div>
</div>
<!-- section 1 slider blog -->
<div class="section-2 section-image">
  <div class="row">
    <div class="col-md-4">
      <a href="#"><img src="assets/images/section-1.jpg" class="w-100"/></a>
      <h2 class="title-section-2">
        <a href="#"> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
      </h2>
      <p class="date-section-2">Ngày đăng: 14/11/2019</p>
    </div>
    <div class="col-md-4">
      <a href="#"><img src="assets/images/section-2.jpg" class="w-100"/></a>
      <h2 class="title-section-2">
        <a href="#"> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
      </h2>
      <p class="date-section-2">Ngày đăng: 14/11/2019</p>
    </div>
    <div class="col-md-4">
      <a href="#"><img src="assets/images/section-3.jpg" class="w-100"/></a>
      <h2 class="title-section-2">
        <a href="#"> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
      </h2>
      <p class="date-section-2">Ngày đăng: 14/11/2019</p>
    </div>
  </div>
</div>
<!-- section 2 section image -->
<div class="section-3">
  <h1 class="title-blog">Bài viết mới nhất</h1>
  <?php if (!empty($result)): ?>
    <?php foreach ($result as $value) : ?>
      <div class="row section-article">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 section-image-article"> 
          <a href="#"><img src="uploads/images/post/<?=$value['hinhanh']?>" alt="365x170.jpg" class="w-100"/></a> 
        </div> 
        <div class="col-lg-8 col-md-8 col-sm-4 col-xs-12 detail-article">
          <h2><a href="?page=chitiet&id=<?=$value['idbv']?>"><?=$value['tieude']?></a></h2>
          <span>Ngày đăng: <?=$value['ngaytao'];?></span>
          <p><?=$value['tomtat']?></p>
        </div>
      </div>
    <?php endforeach; ?>
  <?php else: ?>
    <div>Không có bài viết mới nào !!</div>
  <?php endif; ?>
  <!-- section article -->
</div>
<!-- section 3 -->