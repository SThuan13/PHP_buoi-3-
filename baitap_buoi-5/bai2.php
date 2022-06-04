
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
  <div class="container my-5 p-5">
    <div class="content">
      <form  method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" class="form-control" id="username" >
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email" >
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password" >
      </div>
      <div class="mb-3">
        <label for="cpassword" class="form-label">Confirm password</label>
        <input type="password" name="cPassword"  class="form-control" id="cpassword" >
      </div>
      <div class="mb-3">
        <label for="formFile" class="form-label">Select your avatar</label>
        <input class="form-control" name="img" type="file" id="formFile">
      </div>
      <div class="d-grid gap-2">
        <button type="submit" name="submit" class="btn btn-primary mb-3">Registration</button>
      </div>
      </form>
      <div>
        <?php main();?>
        <h3>
          <?php showError();?>
        </h3>
      </div>
    </div>
    
    
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

<?php
  
  function setError ($index)
  {
    $_SESSION['error'] = "có";
    switch ($index)
    {
      case 0:
      {
        session_unset();
        break;
      }
      case 1:
      {
        $_SESSION['username'] = "Username không được để trống";
        break;
      }
      case 2:
      {
        $_SESSION['email'] = "Email không được để trống";
        break;
      }
      case 3:
      {
        $_SESSION['password'] = "Password không được để trống";
        break;
      }
      case 4:
      {
        $_SESSION['confirmPassword'] = "Confirm password phải giống password";
        break;
      }
      case 5:
      {
        $_SESSION['upload'] = "Cần upload ảnh";
        break;
      }
    }
  }

  function showError ()
  {
    if (isset($_SESSION['error']))
    {
      echo $_SESSION['username']."<br>";
      echo $_SESSION['email']."<br>";
      echo $_SESSION['password']."<br>";
      echo $_SESSION['confirmPassword']."<br>";
      echo $_SESSION['upload']."<br>";
      setError(0);
    }
  }

  function main()
  {
    //kiem tra nhan nut upload chua 
    if (isset($_POST['submit']))
    {
      $file = $_FILES['img'];

      $error_count = 0;
      if ($_POST['username'] == "")
      {
        setError(1); $error_count += 1;
      }
      if ($_POST['email'] == "")
      {
        setError(2); $error_count += 1;
      }
      if ($_POST['password'] == "") 
      {
        setError(3); $error_count += 1;
      }
      if ($_POST['cPassword'] != $_POST['password']) 
      {
        setError(4); $error_count += 1;
      }
      // if ($_POST['img'] == "" )
      // {
      //   setError(5); $error_count += 1;
      // }
      if ($error_count == 0)
      {
        if(!file_exists('storage'))
        {
          mkdir('storage');
        }

        $allowableExtensions = ['jpg', 'jpeg', 'png', 'gif'];

        //vong lap 
        $img = "";
        $filePath = 'storage/'.$file['name'];
        $ext = pathinfo($filePath, PATHINFO_EXTENSION);
        //print_r($ext);
        if (in_array($ext, $allowableExtensions))
        {
          if ($file['size'] <= 2097152)
          {
            $img = $filePath;
            move_uploaded_file($file['tmp_name'], $filePath);
          }
          else
          {
            setError(5);
          }
          
        }
        if ($img != "")
        {
          echo "Username: ".$_POST['username']; echo "<br>";
          echo "Email: ".$_POST['email']; echo "<br>";
          echo  "Avatar: <img src=" .$img.">"; echo "<br>";
          echo "Tên file: ".$file['name']; echo "<br>";
          echo "Địng dạng file: ".$ext; echo "<br>";
          echo "Đường dẫn file trên project của bạn:" .$filePath; echo "<br>";
          echo "Kích thước file (Tính bằng Mb: ".($file['size']/1000000); echo "<br>";
          
        }
      }
    

      //debug 
      // echo "<pre>";
      // print_r($file);die(0);
      // echo "</pre>";
      //kiem tra co thu muc storage chua; chua co thi tao
      
      
        
      
      // if ($img != "")
      // {
      //   echo  "Ảnh vừa upload: <img src=" .$img.">";
      //   echo "<br>";
      //   echo "Tên file: ".$file['name'];
      //   echo "<br>";
      //   echo "Địng dạng file: ".$ext;
      // }
      

      
    }
  }
  
  
?>