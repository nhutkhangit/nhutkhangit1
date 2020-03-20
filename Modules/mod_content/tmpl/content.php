<content class="content">
  <div class="container">
    <?php if (isset($_GET['act'])): ?>
      <?php include_once("Modules/mod_signle_page/mod_signle_page.php"); ?>
    <?php else: ?>
      <div class="row">
        <?php if (isset($_GET['bai-viet']) && !empty($_GET['bai-viet'])) : ?>
          <?php if (!empty($chitiet)) : ?>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="detail-section">
                  <img src="uploads/images/post/<?=$chitiet[0]['hinhanh'];?>" alt="<?=$chitiet[0]['hinhanh'];?>" class="w-100" />
                  <div class="content-article">
                    <h2><?=$chitiet[0]['tieude'];?></h2>
                    <div class="info-sm">
                      <span> Người đăng: Kendy Liên </span>
                      <span> Ngày đăng: <?=$chitiet[0]['ngaytao'];?> </span>
                      <span><i class="fas fa-eye"></i><?=$chitiet[0]['luotxem'];?> lượt xem</span>
                      <span><i class="fas fa-comment"></i> 10 bình luận</span>
                      <!-- <span><i class="fas fa-heart"></i> <?=$chitiet[0]['count_like'];?> lượt thích</span> -->
                    </div>
                    <!-- info sm -->
                    <?=$chitiet[0]['noidung'];?>
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
                    <a href="?bai-viet=<?=$slider['idbv']?>"><img src="uploads/images/post/<?=$slider['hinhanh']?>" alt="slider-1.jpg" class="w-100"/></a>
                    <h2><a href="?bai-viet=<?=$slider['idbv']?>"><?=$slider['tieude']?></a></h2>
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
                      <h2><a href="?bai-viet=<?=$value['idbv']?>"><?=$value['tieude']?></a></h2>
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
          </div>
        <?php endif;?>
        <!-- col-9 left -->
        <?php include_once("Modules/mod_chuyenmuc/mod_chuyenmuc.php") ?>
        <!-- col-3 right -->
      </div>
    <?php endif; ?>
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