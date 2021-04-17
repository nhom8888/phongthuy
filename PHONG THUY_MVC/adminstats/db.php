<?php
$con=mysqli_connect("localhost","root","","blog_admin_db");
mysqli_set_charset($con, 'UTF8');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 ?>
