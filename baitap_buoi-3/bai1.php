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
    .khung
    {
      border: 1px solid ;
      border-radius: 15px;
      padding: 0px;
    }
    .khung-header
    {
      text-align: center;
      background: lightgreen;
      padding: 10px;
      border-radius: 15px 15px 0px 0px;
    }
    .khung-content
    {
      padding: 25px;
    }
    .custom-btn{
      text-align: center ;
      background: lightgreen ;
    }
    .error{
      color: red;
    }
  </style>
<div class="container">
  <div class="row my-5">
  
    <div class="khung">
      <div class="khung-header ">
        <h1>Sign in</h1>
      </div>
      <div class="khung-content">
        <form method="post" >
          <div class="mb-3">
            <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Username">
          </div>

          <div class="mb-3">
            <input type="password" name="password" class="form-control " id="exampleConfirmInputPassword1" placeholder="Password">
          </div>
          <div class="d-grid gap-2 col-12 mx-auto">
            <button type="submit" name="submit" class="btn custom-btn">Login</button>
          </div>
          <?php check() ;?>
        </form>
      </div>
    
      <div class="khung-footer">

      </div>
    </div>
    
  </div>
</div>
<?php
  function check()
  {
    
  if (isset($_POST['submit']))
  {
    $errors = [];

    $name = $_POST['username'];
    $pass = $_POST['password'];
    if($name =="")
    {
      $errors['username']="Username không được để trắng";
    }
    if($pass =="")
    {
      $errors['password']="Pasword không được để trống";
    }
    if (count($errors) == 0 )
    {
      if ($name == "admin" && $pass == "admin")
      {
        
        echo "Đăng nhập thành công!";
      }
      else
      {
        echo "<h1 class=\"error\">Đăng nhập thất bại!</h1>";
      }
    }
    
  }

  }
  
?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>