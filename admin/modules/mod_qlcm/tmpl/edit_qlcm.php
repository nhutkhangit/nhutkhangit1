<script type="text/javascript">
$(document).ready(function(){
        $("#edit-chuyenmuc").modal('show');
    });
</script>
<div class="modal fade" id="edit-chuyenmuc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Sửa chuyên mục</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form method="post">
      		<?php $result = $db->load_data_edit($_GET['id_post']);?>
      		<?php foreach ($result as $key => $data_edit): ?>
	      		<label>Tên chuyên mục</label>
	      		<input type="text" class="form-control" placeholder="Nhập tên chuyên mục" name="name-chuyenmuc" value="<?=$data_edit['name']?>"><br>
	      		<select name="status_cm" class="form-control">
	      			<option value="<?=$data_edit['status']?>">
	      				<?php if ($data_edit['status']==1): ?>
	      					<?php echo 'Publish'?>
	      				<?php else: ?>
	      					<?php echo 'Unpublish'?>
	      				<?php endif; ?>	
	      			</option>
	      			<?php if ($data_edit['status']==1):?>
		      			<option value="0">Unpublish</option>
	      			<?php else: ?>
	      				<option value="1">Publish</option>
	      			<?php endif; ?>
	      		</select><br>
      		<?php endforeach; ?>
      		<div class="modal-footer custom-padding">
      			<button type="submit" class="btn btn-primary" name="edit_cm">Lưu</button>
      		</div>
      	</form>
      </div>
    </div>
  </div>
</div>
<?php if (isset($_POST['edit_cm'])): ?>
	
	<?php 
		include_once("qlcm_redirect.php");
		$update = $db->update_qlcm($_POST['name-chuyenmuc'], $_POST['status_cm'], $_GET['id_post']); 
		?>
<?php endif; ?>