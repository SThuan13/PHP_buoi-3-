<?php
  session_start();
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
      
    }
  </style>
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-6 ">
        <div class="content">
          <form method="post"  class="form p-5">
            <?php val();?>
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" name="remmember_me" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Remmember me</label>
            </div>
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
          </form>
          
        </div>
        
      </div>
      
    </div>
    
    </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

<?php
  function val()
  {
    alertShow();

    if (isset($_COOKIE['user']) || isset($_SESSION['user']))
    {
      $_SESSION['alert'] = "Bạn đã đăng nhập rồi, cần logout tài khoản nếu muốn quay trở lại màn hình login form!";
      header('location: login_success.php');
    }

    if(isset($_POST['submit']))
    {
      if( $_POST['username'] == "" || $_POST['password'] == "" )
      {
        $_SESSION['errors'] = "Không được để trống username hoặc password";
        //echo $_SESSION['errors'];
        alertShow();
        //unset( $_SESSION['errors']);
        //session_unset();
      }
      elseif ( $_POST['username'] == "admin" && $_POST['password'] == "123456")
      {
        if (isset($_POST['remmember_me']))
        {
          setcookie('user', $_POST['username'], time() + 30, '/');
        }
        else
        {
          $_SESSION['user'] = $_POST['username'];
          echo $_SESSION['user'];
          //unset( $_SESSION['errors']);
          //session_unset();
        }
        header('location: login_success.php');
      }
    }
    //session_destroy();
  }

  function alertShow()
  {
    if(isset($_SESSION['errors'])) 
    {?>
      <div class="alert alert-danger" role="alert">
        <?php echo $_SESSION['errors']; ?>
      </div>
      <?php 
      unset($_SESSION['errors']);
    }
  }
  
?>