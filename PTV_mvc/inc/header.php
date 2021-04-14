<?php
    include 'lib/session.php';
    Session::init();
?>
<?php
  
  include 'lib/database.php';
  include 'helpers/format.php';

  spl_autoload_register(function($class){
    include_once "classes/".$class.".php";
  });
    

  $db = new Database();
  $fm = new Format();
  $ct = new cart();
  $us = new user();
  $br = new brand();
  $cat = new category();
  $cs = new customer();
  $product = new product();
    
            
?>
<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
?>
<!DOCTYPE html>

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>

<body>
  <div class="wrapper">

    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
        <div class="logo">
          <a href="#"><h3>Phong<span>THủy</span>Việt</h3></a>
         
        </div>
          <ul class="links">
            <li><a href="index.php">Trang chủ</a></li>
            <li>
              <a href="#" class="desktop-link">Tử vi</a>
              <input type="checkbox" id="show-TV">
              <label for="show-TV">Tử vi</label>
              <ul>
         
                    <?php
            $cate = $cat->show_category();
            if($cate){
              while($result_new = $cate->fetch_assoc()){

            ?>
            
            <li>

              <a href="productbycat.php?catid=<?php echo $result_new['catId'] ?>"><?php echo $result_new['catName'] ?></a>
            </li><div class="hr"></div>
            <?php
              }
            } 
            ?>
              
              </ul>
            </li>
            <li>
              <a href="#" class="desktop-link">Cung hoàng đạo</a>
              <input type="checkbox" id="show-CHD">
              <label for="show-CHD">Cung hoàng đạo</label>
              <ul>
                  <?php
            $brand = $br->show_brand_home();
            if($brand){
              while($result_new = $brand->fetch_assoc()){

            ?>
            
            <li><div class="hr"></div>

              <a href="topbrands.php?brandid=<?php echo $result_new['brandId'] ?>"><?php echo $result_new['brandName'] ?></a>
            </li>
            <?php
              }
            } 
            ?>


              </ul>
            </li>
            <li>
              <a href="#" class="desktop-link">Phong thủy</a>
              <input type="checkbox" id="show-PT">
              <label for="show-PT">Phong thủy</label>
              <ul>
                <li><a href="#">Xem hướng nhà</a></li><div class="hr"></div>
                <li><a href="#">Cầu tài lộc</a></li><div class="hr"></div>
                <li><a href="#">Vật phẩm phong thủy</a></li><div class="hr"></div>
                <li><a href="#">Doanh nhân cần biết</a></li><div class="hr"></div>
              </ul>
            </li>
            <li>
              <a href="#" class="desktop-link">Tâm linh</a>
              <input type="checkbox" id="show-TL">
              <label for="show-TL">Tâm linh</label>
              <ul>
                <li><a href="#">Luật nhân quả</a></li><div class="hr"></div>
                <li><a href="#">Chú đại bi</a></li><div class="hr"></div>
                <li><a href="#">lời phật dạy</a></li><div class="hr"></div>
                <li><a href="#">Chuyện tâm linh</a></li><div class="hr"></div>
              </ul>
            </li>
            <li>
              <a href="#" class="desktop-link">Giấc mơ</a>
              <input type="checkbox" id="show-GM">
              <label for="show-GM">Giấc mơ</label>
              <ul>
                <li><a href="#">Cơ thể</a></li><div class="hr"></div>
                <li><a href="#">Phật-Quỷ</a></li><div class="hr"></div>
                <li><a href="#">Sống chết</a></li><div class="hr"></div>
                <li><a href="#">Địa điểm</a></li><div class="hr"></div>
              </ul>
            </li>
            <li>
              <a href="#" class="desktop-link">Khác</a>
              <input type="checkbox" id="show-K">
              <label for="show-K">Khác</label>
              <ul>
            
                
                <li><a href="./vankhan/vankhan.html">Văn khấn</a></li><div class="hr"></div>
              </ul>
            </li>


          
          </ul>
        </div>
      <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
      <form action="search.php"  method="post" class="search-box">
        <input type="text" placeholder="Nhập từ cần tìm kiếm..." required name="tukhoa">
        <button type="submit" name="search_product" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
      </form>
    </nav>
  </div>
