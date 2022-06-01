<?php

session_start();

if (isset($_SESSION['user'])) {
  unset($_SESSION['user']);
}

  $_SESSION['alert'] = "Đăng xuất thành công";
  header('location:login.php');

  
?>

