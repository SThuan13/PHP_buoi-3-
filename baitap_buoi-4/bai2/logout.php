<?php

  session_start();

  if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
  }
  if (isset($_COOKIE['user'])) {
    setcookie('user', '', time() - 1, '/');
  }
  $_SESSION['errors'] = "Đăng xuất thành công";
  header('location:index.php');

?>

