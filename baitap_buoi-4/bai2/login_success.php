<?php 
  session_start();
  function showInfo()
  {
    if(isset($_SESSION['alert']))
    {
      echo $_SESSION['alert']."<br>";
      unset($_SESSION['alert']);
    }
    else
    {
      echo "Đăng nhập thành công! <br>";
    }
    if (isset($_COOKIE['user']))
    {
      
      echo "Chào mừng bạn: ".$_COOKIE['user'];
      echo "<p>Thời gian đăng nhập:" .date('d/m/y H:m:s'). "</p>";
      echo "<a href='logout.php'>Logout</a>";
    }
    elseif( isset($_SESSION['user']))
    {
      
      echo "Chào mừng bạn: ".$_SESSION['user'];
      echo "<p>Thời gian đăng nhập:" .date('d/m/y H:m:s'). "</p>";
      echo "<a href='logout.php'>Logout</a>";
    }
    else{
      echo "<p> Cần đang nhập để thực hiện chức năng này </p>";
      header('Refresh:5; url=index.php', true,303);
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <style>
    .content{
      background: #7dd1f0;
      padding: 10px;
    }
  </style>
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-6 ">
        <div class="content">
            <?php showInfo();?>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
