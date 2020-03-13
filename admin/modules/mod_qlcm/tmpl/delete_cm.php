<script type="text/javascript">
$(document).ready(function(){
        $("#delete-chuyenmuc").modal('show');
    });
</script>
<div class="modal fade" id="delete-chuyenmuc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Xóa chuyên mục</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form method="post">
      		<label>Bạn có chắc muốn xóa không?</label>
      		<div class="modal-footer">
      			<button type="submit" class="btn btn-primary" name="delete_cm">Xóa</button>
      		</div>
      	</form>
      </div>
    </div>
  </div>
</div>
<?php if (isset($_POST['delete_cm'])): ?>
	<?php 
		include_once("qlcm_redirect.php");
		$delete = $db->delete_chuyenmuc($_GET['id_post']);
	?>
<?php endif; ?>