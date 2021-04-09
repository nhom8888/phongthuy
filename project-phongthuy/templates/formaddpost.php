<!DOCTYPE html>
<html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add Post</title>
</head>
<body>
    <h2>Thêm bài viết</h2>
    <form action="?action=doAdd" method="post">
        <label>Nhập tiêu đề </label><br>
        <input type="text" name="title" id="" ><br>
        <label>Nhập nội dung </label><br>
        <textarea name="content" id="" cols="50" rows="5"></textarea><br>
        <label>Chèn ảnh</label><br>
        <input type="text" name="img" id="" ><br>
        <input type="submit" name="ok" value="Tạo bài viết">
    </form>
</body>
</html>
