<?php
  session_start();


  function alert()
  {
    if( isset($_SESSION['user']))
    {
      echo "welcome: ".$_SESSION['user'];
      echo "<a href='logout.php'>Logout</a>";
    }
    else{
      echo "<p> Cần đang nhập để thực hiện chức năng này </p>";
      header('Refresh:5; url=login.php', true,303);
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
    p
    {
      color: red;
    }
  </style>
  <div class="container">
    <div class="alert"><?= alert();?></div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>