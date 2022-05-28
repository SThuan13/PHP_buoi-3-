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
<div class="container">
  <div class="row">
    <form method="post" >
      <div class="mb-3">
        <label for="firstName" class="form-label">First name </label>
        <input type="text" name="firstName" class="form-control" id="firstName" >
      </div>
      <div class="mb-3">
        <label for="lastName" class="form-label">Last name</label>
        <input type="text" name="lastName" class="form-control" id="lastName" >
      </div>
      <div class="mb-3">
        <label for="birthday" class="form-label">Birth day</label>
        <input type="date" name="birthday" class="form-control" id="birthday" >
      </div>
      <div class="mb-3">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label" for="inlineRadio1">Male</label>
        </div>
      </div>
      <div class="mb-3">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
          <label class="form-check-label" for="inlineRadio2">Female</label>
        </div>
      </div>
      <div class="mb-3">
        <select class="form-select" aria-label="Default select example">
          <option selected>Country</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
      <div class="mb-3">
      <label for="email" class="form-label">Email </label>
        <input type="email" name="email" class="form-control" id="email" >
      </div>

      <div class="mb-3">
        <label for="phone" class="form-label">Phone </label>
        <input type="text" name="phone" class="form-control" id="phone" >
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3">
        <label for="exampleConfirmInputPassword1" class="form-label">Confirm Password</label>
        <input type="password" name="cpassword" class="form-control" id="exampleConfirmInputPassword1">
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <div class="result" name="result"></div>
</div>
<?php
  if (isset($_POST['submit']))
  {
    if ($_POST['password'] == $_POST['cpassword'])
    {
      echo $_POST['firstName']." ".$_POST['lastName'];
      
    }
  }
  return false;
?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>