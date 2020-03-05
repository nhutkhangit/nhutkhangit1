<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include_once("Modules/mod_header/mod_header.php"); ?>
  <body>
    <!-- Facebook SDK -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0"></script>

    <div id="wrapper">
      <header class="header">
        <div class="top-header sm-hidden py-4">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-4 text-center">
                <a href="index.html"><img src="assets/images/logo.png" alt="logo.png" width="65%"></a>
              </div>
              <div class="col-lg-8 col-md-8">
                <div class="header-banner">
                  <a href="#"><img src="assets/images/header-banner.jpg" width="100%"/></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- top header -->
        <div class="menu-header">
          <div class="container">
            <div class="row">
              <div class="col-md-12 nav-sm-fuild">
                <nav class="navbar navbar-expand-lg navbar-light">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="#">TRANG CHỦ<span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">GIỚI THIỆU</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">TIN TỨC</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">VIDEO LIVE STREAM</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">REVIEW</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">TRAILER</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">LIÊN HỆ</a>
                      </li>
                      <!--
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                      </li>
                      -->
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- menu header -->
      </header>
      <!-- header -->
      <?php 
        include_once("Modules/mod_content/mod_content.php"); 
      ?>
      <!-- content -->
      <?php include_once("Modules/mod_footer/mod_footer.php"); ?>
      <!-- footer -->
    </div>
  </body>
<!-- Jquery -->
<script src="assets/owlcarousel/jquery.min.js"></script>
<script src="assets/js/jquery-3.3.1.slim.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/owlcarousel/owl.carousel.min.js"></script>
  <script>
    $('.owl-slider').owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      dots:false,
      autoplay:true,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:1
        },
        1000:{
          items:1
        }
      }
    })

    $('.owl-relation').owlCarousel({
      loop:false,
      margin:10,
      nav:false,
      dots:false,
      autoplay:true,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:1
        },
        1000:{
          items:3
        }
      }
    })

  </script>
</html>
