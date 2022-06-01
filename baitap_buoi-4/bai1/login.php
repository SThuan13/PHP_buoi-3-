<?php
  session_start();
  //header('location: loggedin.php');
  if (isset($_SESSION['user']))
  {
    header('location: loggedin.php');
  }
  
    if (isset($_POST['submit']))
    {
      if ($_POST['username'] == "camnh" && $_POST['password'] == "123456")
      {
          $_SESSION['user'] = $_POST['username'];
        
        header('location: login-success.php');
      }
  
  }

  function alert()
  {
    if(isset($_SESSION['alert']))
    {
      echo $_SESSION['alert'];
      unset($_SESSION['alert']);
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
    .alert{
      color:  #1dd159;
    }
  </style>
  <div class="container my-5">
    <form method="post" >
      <div class="alert"><?= alert();?></div>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" name="remember_me" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label"  for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>