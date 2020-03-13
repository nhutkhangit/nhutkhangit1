<!-- <meta http-equiv="refresh" content="0;url=<?=sprintf("%s://%s%s", isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http', $_SERVER['SERVER_NAME'],$_SERVER['REQUEST_URI'])?>" /> -->
<script type="text/javascript">
$(document).ready(function(){
        $("#add_cm").modal('show');
    });
</script>
<div class="modal fade" id="add_cm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Thêm chuyên mục</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form method="post">
      		<label>Tên chuyên mục</label>
      		<input type="text" class="form-control" placeholder="Nhập tên chuyên mục" name="name-chuyenmuc"><br>
      		<select name="status_cm" class="form-control">
      			<option value="1">Publish</option>
      			<option value="0">Unpublish</option>
      		</select><br>
      		<div class="modal-footer custom-padding">
      			<button type="submit" class="btn btn-primary" name="add_cm">Lưu</button>
      		</div>
      	</form>    
      </div>
    </div>
  </div>
</div>
<?php if (isset($_POST['add_cm'])): ?>
	<?php 
		include_once("qlcm_redirect.php");
		$insert = $db->add_chuyenmuc($_POST['name-chuyenmuc'], $_POST['status_cm'], date('Y-m-d H:i:s', time())); 
	?>
<?php endif; ?>