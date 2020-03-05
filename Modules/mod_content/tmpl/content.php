<content class="content">
  <!-- <div><?php var_dump($result); ?></div> -->
  <div class="container">
    <div class="row">
      <?php
        if (isset($_GET['detail']) && $_GET['detail']=='tarra') {
          ?>
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
              <div class="detail-section">
                <img src="assets/images/taara.jpg" alt="tarra.jpg" class="w-100" />
                <div class="content-article">
                  <h2>HƯỚNG DẪN CƠ BẢN TƯỚNG TAARA - BÚA CUỒNG BẠO</h2>
                  <div class="info-sm">
                    <span> Người đăng: Kendy Liên </span>
                    <span> Ngày đăng: 05/03/2020 </span>
                    <span><i class="fas fa-eye"></i> 1.000.000 lượt xem</span>
                    <span><i class="fas fa-comment"></i> 10 bình luận</span>
                    <span><i class="fas fa-heart"></i> 10 lượt thích</span>
                  </div>
                  <!-- info sm -->
                  <div class="summary-article">
                    <p><img src="assets/images/skill.jpg" alt="skill.jpg" class="w-100" /></p>
                    <p><img src="assets/images/ngoc-trangbi.jpg" alt="ngoc.jpg" class="w-100" /></p>
                    <p><img src="assets/images/trangbi.jpg" alt="trang bi.jpg" class="w-100" /></p>
                    <p>
                    Một số lưu ý khi chơi Taara:
                    Mặc dù sở hữu lượng máu lớn, giáp trâu cùng bộ kĩ năng áp sát tuyệt vời song điều đó cũng không là gì nếu đối phương có nhiều kĩ năng hỗ trợ hoặc lắm tướng đỡ đòn.
                    </p>
                  </div>
                  <div class="content-article">
                    <p>
                      Chiêu thức của Đập tan của Taara có thời hồi chiêu rất lâu nên luôn phải cẩn trọng trong mỗi lần giao tranh tổng. Bởi một sai lầm trong sử dụng chiêu thức cũng đủ làm đồng đội bạn phải trả cái giá rất đắt.
                    </p>
                    <p>
                      Khi lượng máu xuống thấp, công vật lý của Taara sẽ lên tới con số vô cùng kinh dị, cho nên mấu chốt là phải sử dụng Thân thể thép ở thời điểm nào để lượng máu duy trì ở mức an toàn trong khi công vật lý đạt được là tối đa
                    </p>
                  </div>
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
          <?php
        }else {
          ?>
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <h1 class="title-blog">Bài viết nổi bật</h1>
            <div class="slider-blog">
              <div class="owl-slider owl-carousel owl-theme">
                  <div class="item">
                    <a href="#"><img src="assets/images/slider-1.jpg" alt="slider-1.jpg" class="w-100"/></a>
                    <h2><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h2>
                    <p class="date"><span>Ngày đăng: 14-11-2019</span> <span>Lượt xem: 9999</span></p>
                    <p class="summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi suscipit magna sapien, et sollicitudin ante ornare at.
                      In et lorem a tellus dictum tincidunt. In massa risus, elementum iaculis mi a, maximus lacinia erat.</p>
                  </div>
                  <!-- item -->
                  <div class="item">
                      <a href="#"><img src="assets/images/slider-2.jpg" alt="slider-2.jpg" class="w-100"/></a>
                      <h2><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h2>
                      <p class="date"><span>Ngày đăng: 14-11-2019</span> <span>Lượt xem: 9999</span></p>
                      <p class="summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi suscipit magna sapien, et sollicitudin ante ornare at.
                        In et lorem a tellus dictum tincidunt. In massa risus, elementum iaculis mi a, maximus lacinia erat.</p>
                  </div>
                  <!-- item -->
                  <div class="item">
                    <a href="#"><img src="assets/images/slider-3.jpg" alt="slider-3.jpg" class="w-100"/></a>
                    <h2><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h2>
                    <p class="date"><span>Ngày đăng: 14-11-2019</span> <span>Lượt xem: 9999</span></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi suscipit magna sapien, et sollicitudin ante ornare at.
                      In et lorem a tellus dictum tincidunt. In massa risus, elementum iaculis mi a, maximus lacinia erat.</p>
                  </div>
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
              <div class="row section-article">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 section-image-article">
                    <a href="#"><img src="assets/images/Taara.jpg" alt="365x170.jpg" class="w-100"/></a>
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-4 col-xs-12 detail-article">
                    <h2><a href="?detail=tarra">HƯỚNG DẪN CƠ BẢN TƯỚNG TAARA - BÚA CUỒNG BẠO</a></h2>
                    <span>Ngày đăng: 05/03/2020</span>
                    <p>Mặc dù sở hữu lượng máu lớn, giáp trâu cùng bộ kĩ năng áp sát tuyệt vời song điều đó cũng không là gì nếu đối phương có nhiều kĩ năng hỗ trợ hoặc lắm tướng đỡ đòn.</p>
                  </div>
              </div>
              <!-- section article -->
              <div class="row section-article">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 section-image-article">
                    <a href="#"><img src="assets/images/365x170.jpg" alt="365x170.jpg" class="w-100"/></a>
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-4 col-xs-12 detail-article">
                    <h2><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h2>
                    <span>Ngày đăng: 14/11/2019</span>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                      standard dummy text ever since the 1500s,
                      when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  </div>
              </div>
              <!-- section article -->
              <div class="row section-article">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 section-image-article">
                    <a href="#"><img src="assets/images/365x170.jpg" alt="365x170.jpg" class="w-100"/></a>
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-4 col-xs-12 detail-article">
                    <h2><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h2>
                    <span>Ngày đăng: 14/11/2019</span>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                      standard dummy text ever since the 1500s,
                      when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  </div>
              </div>
              <!-- section article -->
              <div class="row section-article">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 section-image-article">
                    <a href="#"><img src="assets/images/365x170.jpg" alt="365x170.jpg" class="w-100"/></a>
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-4 col-xs-12 detail-article">
                    <h2><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h2>
                    <span>Ngày đăng: 14/11/2019</span>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                      standard dummy text ever since the 1500s,
                      when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  </div>
              </div>
              <!-- section article -->
              <div class="row section-article">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 section-image-article">
                    <a href="#"><img src="assets/images/365x170.jpg" alt="365x170.jpg" class="w-100"/></a>
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-4 col-xs-12 detail-article">
                    <h2><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h2>
                    <span>Ngày đăng: 14/11/2019</span>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                      standard dummy text ever since the 1500s,
                      when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  </div>
              </div>
              <!-- section article -->
              <div class="row section-article">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 section-image-article">
                    <a href="#"><img src="assets/images/365x170.jpg" alt="365x170.jpg" class="w-100"/></a>
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-4 col-xs-12 detail-article">
                    <h2><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h2>
                    <span>Ngày đăng: 14/11/2019</span>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                      standard dummy text ever since the 1500s,
                      when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  </div>
              </div>
              <!-- section article -->
              <div class="row section-article">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 section-image-article">
                    <a href="#"><img src="assets/images/365x170.jpg" alt="365x170.jpg" class="w-100"/></a>
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-4 col-xs-12 detail-article">
                    <h2><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h2>
                    <span>Ngày đăng: 14/11/2019</span>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                      standard dummy text ever since the 1500s,
                      when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  </div>
              </div>
              <!-- section article -->
            </div>
            <!-- section 3 -->
          </div>
          <?php
        }
      ?>
      <!-- col-9 left -->
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="right-box">
          <h2 class="title-right-box">Chuyên mục</h2>
          <ul class="category-right">
            <li><a href="#">Mobile (100)</a></li>
            <li><a href="#">Game Online (100)</a></li>
            <li><a href="#">PC/Console (100)</a></li>
            <li><a href="#">Esport (100)</a></li>
            <li><a href="#">Review (100)</a></li>
            <li><a href="#">Game job (100)</a></li>
          </ul>
        </div>
        <!-- right box -->
        <div class="new-blog">
          <h2 class="title-right-box">Bài viết mới</h2>
          <div class="post-right">
            <div class="image-post-right">
                <a href="#"><img src="assets/images/Taara.jpg" width="80"/></a>
            </div>
            <div class="detail-post-right">
              <h2><a href="#">HƯỚNG DẪN CƠ BẢN TƯỚNG TAARA - BÚA CUỒNG BẠO</a></h2>
              <span>Ngày đăng: 05/03/2020</span>
            </div>
          </div>
          <!-- blog-right -->
          <div class="post-right">
            <div class="image-post-right">
                <a href="#"><img src="assets/images/small-blog.jpg" width="80"/></a>
            </div>
            <div class="detail-post-right">
              <h2><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h2>
              <span>Ngày đăng: 14/11/2019</span>
            </div>
          </div>
          <!-- blog-right -->
          <div class="post-right">
            <div class="image-post-right">
                <a href="#"><img src="assets/images/small-blog.jpg" width="80"/></a>
            </div>
            <div class="detail-post-right">
              <h2><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h2>
              <span>Ngày đăng: 14/11/2019</span>
            </div>
          </div>
          <!-- blog-right -->
          <div class="post-right">
            <div class="image-post-right">
                <a href="#"><img src="assets/images/small-blog.jpg" width="80"/></a>
            </div>
            <div class="detail-post-right">
              <h2><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h2>
              <span>Ngày đăng: 14/11/2019</span>
            </div>
          </div>
          <!-- blog-right -->
        </div>
        <!-- right box -->
        <div class="new-blog">
          <h2 class="title-right-box">Bài viết xem nhiều</h2>
          <div class="post-right">
            <div class="number-post">1</div>
            <div class="detail-post-right">
              <h2><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h2>
            </div>
          </div>
          <!-- post-right -->
          <div class="post-right">
            <div class="number-post"><span class="number">2</span></div>
            <div class="detail-post-right">
              <h2><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h2>
            </div>
          </div>
          <!-- post-right -->
          <div class="post-right">
            <div class="number-post"><span class="number">3</span></div>
            <div class="detail-post-right">
              <h2><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h2>
            </div>
          </div>
          <!-- post-right -->
          <div class="post-right">
            <div class="number-post"><span class="number">4</span></div>
            <div class="detail-post-right">
              <h2><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h2>
            </div>
          </div>
          <!-- post-right -->
          <div class="post-right">
            <div class="number-post"><span class="number">5</span></div>
            <div class="detail-post-right">
              <h2><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h2>
            </div>
          </div>
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
      <!-- col-3 right -->
    </div>
  </div>
</content>