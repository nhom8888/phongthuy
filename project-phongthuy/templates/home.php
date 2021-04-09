<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhongThuyViet</title>
    <link rel="stylesheet" href="./css/style.css">
    
</head>
<body>
    <?php foreach ($posts as $post) : ?>
        <div class="item_post">
            <a href="#" ><img class="img" src="<?php echo $post["img"] ?>" alt=""></a>
            <a href=""><h2  class="title"><?php echo $post["title"] ?></h2></a>
            <p class="content"><?php echo $post["content"] ?></p>
        </div>


    <?php endforeach; ?>
</body>
</html>