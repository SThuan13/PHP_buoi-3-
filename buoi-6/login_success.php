<?php 
  session_start();

  $error = []; 
  //echo $_SESSION['success'];
  //session_unset();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
        </ul>
        <span class="navbar-text">
          <?php echo $_SESSION['username'];?>
        </span>
        <div class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </div>
        
      </div>
    </div>
  </nav>
  </header>

  <section>
    <div class="container my-5">
      <div class="row justify-content-center">
        <div class="col-6 ">
          <div class="content">
            <div class="col-11">
              <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Text</label>
                  <input type="text" name="text" class="form-control" id="exampleFormControlInput1" placeholder="placeholder">
                </div>
                <div class="form-check">
                  <input class="form-check-input" name="checkbox[]" type="checkbox" value="" id="flexCheckDefault1">
                  <label class="form-check-label" for="flexCheckDefault1">
                    Checkbox 1
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" name="checkbox[]" type="checkbox" value="" id="flexCheckDefault2">
                  <label class="form-check-label" for="flexCheckDefault2">
                    Checkbox 2
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" name="checkbox[]" type="checkbox" value="" id="flexCheckDefault3">
                  <label class="form-check-label" for="flexCheckDefault3">
                    Checkbox 3
                  </label>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Textarea</label>
                  <textarea class="form-control" name="textArea" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <label for="">Radio button</label>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" name="radio" type="checkbox" id="inlineCheckbox1" value="option1">
                  <label class="form-check-label"  for="inlineCheckbox1">yep</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" name="radio" type="checkbox" id="inlineCheckbox2" value="option2">
                  <label class="form-check-label"  for="inlineCheckbox2">nope</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" name="radio" type="checkbox" id="inlineCheckbox3" value="option3">
                  <label class="form-check-label"  for="inlineCheckbox3">none</label>
                </div>
                <select class="form-select" name="select" aria-label="Default select example">
                  <option value="1">option 1</option>
                  <option value="2">option 2</option>
                  <option value="3">option 3</option>
                </select>
                <div class="mb-3">
                  <label for="formFile" name="img" class="form-label">Default file input example</label>
                  <input class="form-control" type="file" id="formFile">
                </div>
                <div class="d-grid gap-2">
                  <button class="btn btn-primary" name="submit" type="submit">Button</button>
                </div>
              </form>
            </div>
            <div class="output">
              <?php main();?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>

<?php 
  
  // function showError($index)
  // {
  //   print_r( $error );
  // }

  function setError($index)
  {
    
    switch ($index)
    {
      case 0:
      {
        unset($error);
        break;
      }
      case 1:
      {
        $error[] = "Trường text không được để trống";
        break;
      }
      case 2:
      {
        $error[] = "Cần check ít nhất 1 trường checkbox";
        break;
      }
      case 3:
      {
        $error[] = "Trường textarea không được để trống";
        break;
      }
      case 4:
      {
        $error[] = "Cần check ít nhất 1 trường radio";
        break;
      }
      case 5:
      {
        $error[] = "Cần upload ảnh";
        break;
      }
    }
  }

  function main()
  {
    if(isset($_POST['submit']))
    {
      $count_error = 0;
      $countCheckedBox = 0;

      $text = $_POST['text'];

      $checkBox[] = isset($_POST['checkbox']) ? $_POST['checkbox'] : null;
      $checBoxValue = "";

      $textArea[] = $_POST['textArea'];

      $radio = isset($_POST['radio']) ? $_POST['radio'] : null;
      
      $select = $_POST['select'];
      $img = [];

      //kiem tra text
      if (isEmpty($text))
      {
        setError(1);
        $count_error += 1;
        echo 1;
      }

      //kiem tra checkbox
      foreach ($checkBox as $item) 
      {
        if ($item == "")
        {
          $countCheckedBox += 1;
        }
        else
        {
          $checBoxValue += $item.", ";
        }
      }
      if ($countCheckedBox == count($checkBox))
      {
        setError(2);
        $count_error += 1;
        echo 2;
      }
      
      //kiem tra text area
      if (isEmpty($textArea))
      {
        setError(3);
        $count_error += 1;
        echo $textArea;
        echo 3;
      }

      //kiem tra radio
      if (isEmpty($radio))
      {
        setError(4);
        $count_error += 1;
        echo 4;
      }

      //kiem tra select
      if (isEmpty($select))
      {
        setError(5);
        $count_error += 1;
        echo 5;
      }

      echo $count_error;
      // showError(1);
      // return false;
      // die(0);


      if( $count_error == 0 )
      {
        echo "Text: " .$text."<br>";
        echo "Checkbox: " .$checBoxValue."<br>";
        echo "Textarea: " .$textArea."<br>";
        echo "Radio: " .$radio."<br>";
        echo "Select: " .$select."<br>";
        //echo "Upload files: " .<hiển-thị-ảnh>."<br>";
      }
      else
      {
        //showError();
      }
    //   if(!file_exists('storage'))
    //     {
    //       mkdir('storage');
    //     }

    //     $allowableExtensions = ['jpg', 'jpeg', 'png', 'gif'];

    //     //vong lap 
        
    //     $filePath = 'storage/'.$file['name'];
    //     $ext = pathinfo($filePath, PATHINFO_EXTENSION);
    //     //print_r($ext);
    //     if (in_array($ext, $allowableExtensions))
    //     {
    //       if ($file['size'] <= 2097152)
    //       {
    //         $img = $filePath;
    //         move_uploaded_file($file['tmp_name'], $filePath);
    //       }
    //       else
    //       {
    //         setError(5);
    //       }
          
    //     }
      
    }
  }

  function isEmpty($text)
  {
    if ($text == "")
    {
      return true;
    }
    return false;
  }
?>