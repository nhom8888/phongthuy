<?php
session_start();
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
    if ($username == '' && $password == '') {
        $_SESSION['user'] = $username;
        header("location:mainpage.php");
    } else {
        echo "incorrect username and password";
        require "login.html";
    }
 
?>