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
  <?php include_once("Modules/mod_lienquan/mod_lienquan.php"); ?>
  <!-- relation article -->
  <div class="comment-section">
    <h2>Bình luận bài viết</h2>
    <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="100%" data-numposts="5"></div>
  </div>
  <!-- comment section -->
</div>
 