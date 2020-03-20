<content class="content">
  <div class="container">
    <div class="row">
      <!-- col-9 left -->
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <?php 
          if(isset($_GET['page'])){
            echo 'cc';
            // $page  = $_GET['page'];
            // switch($page){
            //   //Danh muc
            //   case 'chitiet':
            //   include_once("Modules/mod_chitiet/mod_chitiet.php");
            //   break;
            // }
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