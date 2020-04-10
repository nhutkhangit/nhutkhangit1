<?php
/*
 Template Name: Giỏ hàng
 */

get_header(); ?>

	<div id="primary" class="site-content k-has-sidebar">
		<div class="content-right">
			<h1 class="kang-title"><?php the_title();?></h1>
			<div class="thong_tin_gio_hang"></div>
<div class="gio_hang">
<?php
 global $product_prefix;
 $action = get_query_var('action'); //thêm|xóa
 $pro_id = get_query_var('pro_id'); //id sản phẩm
 if($action){ //nếu có thao tác (thêm hoặc xóa)
  switch($action){
   case 'them':
    if (isset( $_SESSION['cart'][$pro_id])) //nếu đã có thì cập nhật số lượng thêm 1
     $quantity = $_SESSION['cart'][$pro_id] + 1;
    else
     $quantity = 1; //ngược lại tạo 1 item mới với số lượng là 1
    $_SESSION['cart'][$pro_id] = $quantity; //cập nhật lại
    wp_redirect(get_bloginfo('url').'/gio-hang'); exit(); //trả về trang hiển thị giỏ hàng
    break;
   case 'xoa':
    if(isset( $_SESSION['cart'] ) && count( $_SESSION['cart'] ) > 0 ){ //kiểm tra và xóa sản phẩm dựa vào id
     unset($_SESSION['cart'][$pro_id]);
     wp_redirect(get_bloginfo('url').'/gio-hang'); exit();
    }
    else{
     unset($_SESSION['cart']);
     echo "<h3>Hiện chưa có sản phẩm nào trong giỏ hàng! <a href='".get_bloginfo('url')."'>Bấm vào đây</a> để xem và mua hàng.</h3>";
    }
   break;
 }
 }else{ //không có thao tác thêm hoặc xóa thì sẽ hiển thị sản phẩm trong giỏ hàng
 ?>
 <?php
 if ( isset( $_SESSION['cart'] ) && count( $_SESSION['cart'] ) > 0 ) { //kiểm tra số lượng sản phẩm trước khi hiển thị
 ?>
  <form action="" method="post">
   <table id="cart">
    <tr>
     <td style="width:50px;"></td>
     <td>Tên sản phẩm</td>
     <td>Giá</td>
     <td>Số lượng</td>
     <td>Thành tiền</td>
     <td><input type="submit" name="cart_update" value="Cập nhật" style="border: 1px solid olive; cursor: pointer;"
 title="Cập nhật giỏ hàng"/></td>
    </tr>
 <?php
 $total = 0;
 foreach ( $_SESSION['cart'] as $pro_id => $quantity ){ //lặp qua mảng cart session lấy ra id và show thông tin sản phẩm theo id đó
  $product = get_post((int)$pro_id );
  $price = (float)get_post_meta($pro_id, $product_prefix."price",true);
 ?>
  <tr>
  <td style="width:50px;"><?php if ( has_post_thumbnail( $pro_id ) ) echo get_the_post_thumbnail( $pro_id, array( 50, 50 ) ); else echo "<img src='".get_bloginfo('template_url')."/images/no_img.png' style='width:50px;height:50px;' />"; ?></td>
  <td><?php echo $product->post_title; ?></td>
  <td><?php echo number_format($price). ' VND'; ?></td>
  <td><input autocomplete="off" type="text" value="<?php echo $quantity; ?>" name="quantity[<?php echo $pro_id; ?>]" /></td>
  <td><?php echo number_format( $price * $quantity) . ' VND'; ?></td>
  <?php $total += $price * $quantity; ?>
  <td><a href="<?php echo get_bloginfo( 'url' ) . '/gio-hang/xoa/' . $pro_id; //link xóa sản phẩm trong giỏ ?>">Xóa</a>
 </td>
 </tr>
 <?php
 }
 ?>
 <tr>
 <td colspan="2">
 <a title="Mua tiếp" class="btn" href="<?php echo get_bloginfo( 'url' ); ?>">Mua tiếp</a>
 <a title="Đặt hàng" class="btn" href="#">Đặt hàng</a>
 </td>
 <td>Tổng tiền</td>
 <td colspan="3"><?php echo number_format($total) . ' VND'; ?></td>
 </tr>
 </table>
 </form>
 <?php
 } else {
 echo "<h2>Hiện chưa có sản phẩm nào trong giỏ hàng! <a href='" . get_bloginfo( 'url' ) . "'>Bấm vào đây</a> để xem và mua hàng.</h2>";
 }
 ?>
 <?php
 if(isset($_POST['cart_update'])){ //xử lý cập nhật giỏ hàng
  if(isset($_POST['quantity'])){
   if(count($_SESSION['cart']) == 0) unset($_SESSION['cart']); //nếu không còn sản phẩm trong giỏ thì xóa giỏ hàng
   foreach($_POST['quantity'] as $pro_id => $quantity){ //lặp mảng số lượng mới và cập nhật mới cho giỏ hàng
     if($quantity == 0) unset($_SESSION['cart'][$pro_id]);
     else $_SESSION['cart'][$pro_id] = $quantity;
   }
   wp_redirect(get_bloginfo( 'url' ).'/gio-hang'); //cập nhật xong trả về trang hiển thị sản phẩm trong giỏ
  }
 }
 }
 ?>
<h3 class="cart"><a href="<?php bloginfo('url'); ?>/gio-hang" >Giỏ hàng </a><?php if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) echo "(".count($_SESSION['cart']).")"; ?></h3>
 <?php if(!isset($_SESSION['cart']) || (isset($_SESSION['cart']) && count($_SESSION['cart']) == 0)) : ?>
 <p>Hiện chưa có sản phẩm nào trong giỏ hàng.</p>
 <?php else : ?>
 <?php
 global $product_prefix; $price_total = 0;
 foreach($_SESSION['cart'] as $pro_id => $quantity){ //lặp và hiển thị thông tin sản phẩm trong giỏ
 $product = get_post($pro_id);
 ?>
 <li><a title="<?php echo $product->post_title; ?>" href="<?php echo get_permalink($pro_id); ?>"><?php echo substr($product->post_title, 15); ?></a> x <?php echo $quantity; ?><br/>
 <?php $price = get_post_meta($pro_id, $product_prefix."price", true);
 if($price && $price != "") {
 echo ' => '.number_format((float)$price * $quantity) .' VND'; $price_total += ((float)$price * $quantity);
 }
 else echo " => 0 VND";
 ?>
 </li>
 <?php
 }
 echo "<hr/>"; echo "Tổng tiền: ".number_format($price_total)." VND";
 ?>
 <?php endif; ?>

</div>
		</div>
		<div class="content-left">
			<?php get_sidebar(); ?>
		</div>
	</div><!-- #primary -->
	
<?php get_footer(); ?>