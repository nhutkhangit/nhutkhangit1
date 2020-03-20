<?php if (isset($_GET['bai-viet']) && !empty($_GET['bai-viet'])) : ?>
          <!-- <?php if (!empty($chitiet)) : ?> --><?php echo 'ưdnwqkdwl';?>
            <!-- <?php include_once("Modules/mod_chitiet/mod_chitiet.php"); ?> -->
          <!-- <?php else : ?>
            <meta http-equiv="refresh" content="0;url=<?=url();?>" /> -->
          <?php endif; ?>
        <?php else : ?>       
          <?php include_once("Modules/mod_bvnoibat/mod_bvnoibat.php"); ?>
        <?php endif;?>
        <!-- col-9 left -->
        <?php include_once("Modules/mod_chuyenmuc/mod_chuyenmuc.php") ?>
        <!-- col-3 right -->


<!-- <?php if (isset($_GET['act'])): ?> -->
      <!-- <?php include_once("Modules/mod_signle_page/mod_signle_page.php"); ?> -->
    <!-- <?php else: ?> -->
      <div class="row">
        <?php 
          if (isset($_GET['act']) && $_GET['act']=='chitiet') {
            echo 'ncewnclk';
            // include_once("Modules/mod_chitiet/mod_chitiet.php");
          }else{
            include_once("Modules/mod_bvnoibat/mod_bvnoibat.php");
            
          }
        ?>
        <?php include_once("Modules/mod_chuyenmuc/mod_chuyenmuc.php"); ?>
      </div>
    <!-- <?php endif; ?> -->