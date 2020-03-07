<content class="content">
  <div class="container">
    <div class="row">
      <?php if (isset($_GET['bai-viet']) && !empty($_GET['bai-viet'])) : ?>
        <?php if (!empty($chitiet)) : ?>
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
              <div class="detail-section">
                <img src="assets/images/<?=$chitiet[0]['images'];?>" alt="Tarra.jpg" class="w-100" />
                <div class="content-article">
                  <h2><?=$chitiet[0]['title'];?></h2>
                  <div class="info-sm">
                    <span> Người đăng: Kendy Liên </span>
                    <span> Ngày đăng: <?=$chitiet[0]['create_at'];?> </span>
                    <span><i class="fas fa-eye"></i><?=$chitiet[0]['count_view'];?> lượt xem</span>
                    <span><i class="fas fa-comment"></i> 10 bình luận</span>
                    <span><i class="fas fa-heart"></i> <?=$chitiet[0]['count_like'];?> lượt thích</span>
                  </div>
                  <!-- info sm -->
                  <?=$chitiet[0]['content'];?>
                </div>
                <!-- content arctile -->
                <div class="relation-article">
                  <h2>Bài viết liên quan</h2>
                  <div class="relation-box">
                    <div class="owl-relation owl-carousel owl-theme">
                      <div class="item">
                        <a href="#"><img src="assets/images/slider-1.jpg" alt="slider-1.jpg" class="w-100"/></a>
                        <h2><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h2>
                        <p class="date"><span>Ngày đăng: 14-11-2019</span></p>
                        <p class="summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi suscipit magna sapien, et sollicitudin ante ornare at.</p>
                      </div>
                      <!-- item -->
                      <div class="item">
                        <a href="#"><img src="assets/images/slider-2.jpg" alt="slider-2.jpg" class="w-100"/></a>
                        <h2><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h2>
                        <p class="date"><span>Ngày đăng: 14-11-2019</span></p>
                        <p class="summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi suscipit magna sapien, et sollicitudin ante ornare at.</p>
                      </div>
                      <!-- item -->
                      <div class="item">
                        <a href="#"><img src="assets/images/slider-3.jpg" alt="slider-3.jpg" class="w-100"/></a>
                        <h2><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h2>
                        <p class="date"><span>Ngày đăng: 14-11-2019</span></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi suscipit magna sapien, et sollicitudin ante ornare at.</p>
                      </div>
                      <!-- item -->
                    </div>
                  </div>
                  <!-- relation-box -->
                </div>
                <!-- relation article -->
                <div class="comment-section">
                  <h2>Bình luận bài viết</h2>
                  <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="100%" data-numposts="5"></div>
                </div>
                <!-- comment section -->
              </div>
              <!-- detail section -->
          </div>
        <?php else : ?>
          <meta http-equiv="refresh" content="0;url=<?=url();?>" />
        <?php endif; ?>
      <?php else : ?>       
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
          <h1 class="title-blog">Bài viết nổi bật</h1>
          <div class="slider-blog">
            <div class="owl-slider owl-carousel owl-theme">
              <?php foreach ($slide as $slider) :?>
                <div class="item">
                  <a href="?bai-viet=<?=$slider['id']?>"><img src="assets/images/<?=$slider['images']?>" alt="slider-1.jpg" class="w-100"/></a>
                  <h2><a href="?bai-viet=<?=$slider['id']?>"><?=$slider['title']?></a></h2>
                  <p class="date"><span>Ngày đăng: <?=$slider['create_at']?></span> <span>Lượt xem: <?=$slider['count_view']?></span></p>
                  <p class="summary"><?=$slider['short_description']?></p>
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
            <?php foreach ($result as $value) : ?>
              <div class="row section-article">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 section-image-article"> 
                  <a href="#"><img src="assets/images/Taara.jpg" alt="365x170.jpg" class="w-100"/></a> 
                </div> 
                <div class="col-lg-8 col-md-8 col-sm-4 col-xs-12 detail-article">
                  <h2><a href="?bai-viet=<?=$value['id']?>"><?=$value['title']?></a></h2>
                  <span>Ngày đăng: <?=$value['create_at'];?></span>
                  <p><?=$value['short_description']?></p>
                </div>
              </div>
            <?php endforeach; ?>
            <!-- section article -->
          </div>
          <!-- section 3 -->
        </div>
      <?php endif;?>
      <!-- col-9 left -->
      <?php include_once("Modules/mod_chuyenmuc/mod_chuyenmuc.php") ?>
      <!-- col-3 right -->
    </div>
  </div>
</content>
<?php
  function url(){
  return sprintf(
    "%s://%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME']
    // ,$_SERVER['REQUEST_URI']
  );
}
 ?>