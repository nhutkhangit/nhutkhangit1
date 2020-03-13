<div><h1>Quản lý chuyên mục</h1></div>

<!-- <?php if (isset($_GET['type']) && $_GET['type']=='add_cm') : ?>
	<div>Add</div>
<?php else : ?> -->
	<div class="container nk-qlcm">
		<a href="?type=qlcm&action=add_cm" type="button" class="btn btn-primary">Thêm chuyên mục</a>
		<table class="table">
	    <thead>
	      <tr>
	        <th>STT</th>
	        <th>Tên Chuyên mục</th>
	        <th>Trạng thái</th>
	        <th>Thao tác</th>
	      </tr>
	    </thead>
	    <tbody>
	    <?php $i=0; ?>
	    <?php foreach ($chuyenmuc as $key => $nk_chuyenmuc) : ?>
	    <?php $i++;?>
	      <tr>
	        <td><?=$i?></td>
	        <td><?=$nk_chuyenmuc['name']?></td>
	        <?php if ($nk_chuyenmuc['status']==1): ?>
	        <td>Publish</td>
	        <?php elseif ($nk_chuyenmuc['status']==0) : ?>
	        <td>Unpublish</td>
	        <?php endif ; ?>
	        <td><a href="?type=qlcm&action=delete&id_post=<?=$nk_chuyenmuc['id']?>" type="button" class="btn btn-primary">Xóa</a> <a href="?type=qlcm&action=edit&id_post=<?=$nk_chuyenmuc['id']?>" type="button" class="btn btn-primary">Sửa</a></td>
	      </tr>
	    <?php endforeach; ?>
	    </tbody>
	  </table>
	</div>
<!-- <?php endif; ?> -->
<!-- Modal -->
