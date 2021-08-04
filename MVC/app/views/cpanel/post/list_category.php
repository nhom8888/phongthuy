<h3 style="text-align: center;">Liệt kê danh mục bài viết</h3>
<?php
if (!empty($_GET['msg'])) {
  $msg = unserialize(urldecode($_GET['msg']));
  foreach ($msg as $key => $value) {
    echo '<span style="color:blue;font-weight:bold">' . $value . '</span>';
  }
}
?>
<table class="table table-striped">
  <thead>
    <tr style="font-size: 23px;">
      <th>Id</th>
      <th>Tên danh mục</th>
      <th>Mô tả</th>
      <th>Quản lý</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 0;
    foreach ($category as $key => $cate) {
      $i++;
    ?>
      <tr style="font-size: 23px;">
        <td><?php echo $i ?></td>
        <td><?php echo $cate['title_category_post'] ?></td>
        <td><?php echo $cate['desc_category_post'] ?></td>
        <td><a href="<?php echo BASE_URL ?>/post/delete_category/<?php echo $cate['id_category_post'] ?>">Xóa</a> || <a href="<?php echo BASE_URL ?>/post/edit_category/<?php echo $cate['id_category_post'] ?>">Cập nhật</a></td>
      </tr>
    <?php
    }
    ?>

  </tbody>
</table>