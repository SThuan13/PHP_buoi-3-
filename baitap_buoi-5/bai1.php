
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
    h3{
      color: red;
    }
  </style>
  <div class="container">
    <form  method="post" enctype="multipart/form-data">
        <!-- nhap 1 file -->
        <input type="file" name="file" ></input>  
        <!-- nhap nhieu file -->
        <!-- <input type="file" name="file[]" multiple></input> -->

        <button type="submit" name="upload" >Upload</button>

    </form>
    <div>
      <?php main();?>
      <h3>
      <?php showError();?>
      </h3>
      
    </div>
    
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

<?php
  
  function setError ($index)
  {
    switch ($index)
    {
      case 0:
      {
        session_unset();
        break;
      }
      case 1:
      {
        $_SESSION['error'] = "Cần upload file có định dạng ảnh!";
        break;
      }
      case 2:
      {
        $_SESSION['error'] = "File upload không được > 1Mb";
        break;
      }
    }
  }

  function showError ()
  {
    if (isset($_SESSION['error']))
    {
      echo $_SESSION['error'];
      unset($_SESSION['error']);
    }
  }

  function main()
  {
    //kiem tra nhan nut upload chua 
    if (isset($_POST['upload']))
    {
      $file = $_FILES['file'];

      //debug 
      // echo "<pre>";
      // print_r($file);die(0);
      // echo "</pre>";
      //kiem tra co thu muc storage chua; chua co thi tao
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
            setError(2);
          }
          
        }
        else
        {
          setError(1);
          //continue;
        }
        
      
      if ($img != "")
      {
        echo  "Ảnh vừa upload: <img src=" .$img.">";
        echo "<br>";
        echo "Tên file: ".$file['name'];
        echo "<br>";
        echo "Địng dạng file: ".$ext;
      }
      

      
    }
  }
  
  
?>