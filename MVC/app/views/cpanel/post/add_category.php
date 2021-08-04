<?php
if (!empty($_GET['msg'])) {
	$msg = unserialize(urldecode($_GET['msg']));
	foreach ($msg as $key => $value) {
		echo '<span style="color:blue;font-weight:bold">' . $value . '</span>';
	}
}
?>
<h3 style="text-align: center;">Thêm danh mục bài viết</h3>

<div class="col-md-6">
	<form action="<?php echo BASE_URL ?>/post/insert_category" method="POST">
		<div class="form-group">
			<label for="email" style="font-size: 26px;">Tên danh mục</label>
			<input type="text" name="title_category_post" class="form-control">
		</div>
		<div class="form-group">
			<label for="pwd" style="font-size: 26px;">Miêu tả danh mục</label>
			<input type="text" name="desc_category_post" class="form-control">
		</div>

		<button type="submit" class="btn btn-default">Thêm danh mục</button>
	</form>
</div>