<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include_once("Modules/mod_header/mod_header.php"); ?>
  <body>
    <!-- Facebook SDK -->
    <div id="fb-root"></div>
    <!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0"></script> -->

    <div id="wrapper">
      <header class="header">
        <div class="top-header sm-hidden py-4">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-4 text-center">
                <a href="index.php"><img src="assets/images/logo.png" alt="logo.png" width="65%"></a>
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
        <?php include_once("Modules/mod_menu/mod_menu.php"); ?>
        <!-- menu header -->
      </header>
      <!-- header -->
      <?php if(isset($_GET['page']) && $_GET['page']=='lienhe'): ?>
        <?php include_once("modules/mod_lienhe/mod_lienhe.php"); ?> 
        <?php else: ?>
        <content class="content">
          <div class="container">
            <div class="row">
              <!-- col-9 left -->
              <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <?php 
                  if(isset($_GET['page'])) {
                    $page  = $_GET['page'];
                    switch($page){
                      //Details
                      case 'chitiet':
                      include_once("Modules/mod_chitiet/mod_chitiet.php");
                      break;

                      //Load Danh mục
                      case 'danhmuc':
                      include_once("Modules/mod_danhmuc/mod_danhmuc.php");
                      break;

                      //Load Video
                      case 'video':
                      include_once("Modules/mod_video/mod_video.php");
                      break;
                    }
                  }else {
                    include_once("Modules/mod_bvnoibat/mod_bvnoibat.php");
                  }
                ?>
              </div>
              <!-- col-3 right -->
              <?php include_once("Modules/mod_chuyenmuc/mod_chuyenmuc.php") ?>
            </div>
          </div>
        </content>
      <?php endif; ?>
      <?php 
      if(isset($_GET['page'])){
        $page  = $_GET['page'];
        switch($page){
          //Danh muc
          case 'lienhe':
          include('modules/mod_lienhe/mod_lienhe.php');
          break;
        }
      }else {
        ?>
          
        <?php 
      }
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
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-160718516-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-160718516-1');
</script>

</html>
