



    
<?php 
	// gọi file adminlogin
	include '../classes/adminlogin.php';
 ?>
 <?php
 	// gọi class adminlogin
 	$class = new adminlogin(); 
 	if($_SERVER['REQUEST_METHOD'] == 'POST'){
 		// LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
 		$adminUser = $_POST['adminUser'];
 		$adminPass = md5($_POST['adminPass']);

 		$login_check = $class -> login_admin($adminUser,$adminPass); // hàm check User and Pass khi submit lên

 	}
  ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
  
    <link rel="stylesheet" href="../admin/css/login.css">
    
</head>
<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

<body>
  <div class="container h-30">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Admin </h5> 
			<span style="color:red;" >
                 <?php 
				if(isset($login_check)){
					echo $login_check;
				}
			    ?>  
			<hr class="my-4">
			
            <form class="form-signin" action="login.php" method="post">
              <div class="form-label-group">
                <input type="text" id="inputEmail" name="adminUser" class="form-control" placeholder="Tài Khoản" >
                <label for="inputEmail">Tài Khoản</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword"  name="adminPass" class="form-control" placeholder="Mật Khẩu">
                <label for="inputPassword">Mật Khẩu</label>
              </div>

              
              <input  class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="Đăng nhập">
              
             
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>



    

</body>
</html>