<<<<<<< HEAD

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
    .error
    {
      color : red;
    }
  </style>
<div class="container">
  <div class="row">
    <div class="col-8">
      <form method="post" >
        <div class="error">
          <?php checkError();?>
        </div>
        <div class="mb-3">
            <label for="firstName" class="form-label">First name</label>
            <input type="text" name="firstName" class="form-control" id="firstName" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="lastName" class="form-label">Last name</label>
            <input type="text" name="lastName" class="form-control" id="lastName" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email name</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label >Gender</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
              <label class="form-check-label" for="inlineRadio1">Male</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
              <label class="form-check-label" for="inlineRadio2">Female</label>
            </div>
            
          </div>
          <label for="">State</label>
          <div class="mb-3">
            <select class="form-select" aria-label="Default select example">
              
              <option value="1">Johor</option>
              <option value="2">Massachusetts</option>
              <option value="3">Washington</option>
            </select>
          </div>
          <div>
            <label>Hobby</label>
            <input type="checkbox"name="hobby[]"value="badminton"/>Badminton
            <input type="checkbox"name="hobby[]"value="football"/>Football
            <input type="checkbox"name="hobby[]"value="voleyball"/>Voleyball
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    
  </div>
</div>

  <?php 
  
    function checkError()
    {
      if (isset($_POST['submit']))
      {
        $errors = [];

        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        
        
        if($name =="")
        {
          $errors['fname']="Firstname không được để trống";
        }
        if($pass =="")
        {
          $errors['lname']="Lastname không được để trống";
        }

      }
      if (count($errors) == 0 )
      {
        $email = $_POST['email'];
        echo $fname;
        echo $lname;
        
        $gender = $_POST['gender'];
        if ($gender == 1) 
        {
          echo 'Male';
        }
        else 
        {
          echo 'Female';
        }
        $checkboxArr = $_POST['checkbox']; //name of field
        foreach ($checkboxArr as $checkbox) {
        if ($checkbox == 1) 
        {
          echo 'Check1';
        }
        else if ($checkbox == 2) 
        {
          echo 'Check2';
        }
        else 
        {
          echo 'Check3';
        }
}

      }
    }
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
=======

<?php
  if (isset($_POST['submit']))
  {
    $errors = [];

    $name = $_POST['name'];
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
      if ($name == "admin" && $pass == 123456)
      {
        
        echo "Đăng nhập thành công!";
      }
      else
      {
        echo "Đăng nhập thất bại!";
      }
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
    .error
    {
      color : red;
    }
  </style>
<div class="container">
  <div class="row">
    <div class="col-8">
      <form method="post" >
        <div class="error">
          <?php checkError();?>
        </div>
        <div class="mb-3">
            <label for="firstName" class="form-label">First name</label>
            <input type="text" name="firstName" class="form-control" id="firstName" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="lastName" class="form-label">Last name</label>
            <input type="text" name="lastName" class="form-control" id="lastName" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email name</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label >Gender</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="male">
              <label class="form-check-label" for="inlineRadio1">Male</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="female">
              <label class="form-check-label" for="inlineRadio2">Female</label>
            </div>
            
          </div>
          <label for="">State</label>
          <div class="mb-3">
            <select class="form-select" aria-label="Default select example">
              
              <option value="1">Johor</option>
              <option value="2">Massachusetts</option>
              <option value="3">Washington</option>
            </select>
          </div>
          <div>
            <label>Hobby</label>
            <input type="checkbox"name="hobby[]"value="badminton"/>Badminton
            <input type="checkbox"name="hobby[]"value="football"/>Football
            <input type="checkbox"name="hobby[]"value="voleyball"/>Voleyball
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    
  </div>
</div>

  <?php 
  
    function checkError()
    {
      if (isset($_POST['submit']))
      {
        $errors = [];

        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        
        if($name =="")
        {
          $errors['fname']="Firstname không được để trống";
        }
        if($pass =="")
        {
          $errors['lname']="Lastname không được để trống";
        }
      }
    }
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
>>>>>>> c5b35b7887f42a312e6f6007f43bbdc950ab9382
</html>