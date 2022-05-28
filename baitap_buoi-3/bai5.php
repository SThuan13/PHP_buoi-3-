<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
  
  <div class="container my-5">
    <form action="" method="post">
      <div class="mb-3 row">
        <label for="firstNumber" class="col-sm-2 col-form-label">First number</label>
        <div class="col-sm-10">
        <input class="form-control form-control-lg" type="text" name="firstNumber" id="firstNumber" >
        </div>
      </div>
      <div class="mb-3 row">
        <label for="secondNumber" class="col-sm-2 col-form-label">Second number</label>
        <div class="col-sm-10">
        <input class="form-control form-control-lg" type="text" name="secondNumber" id="secondNumber" >
        </div>
      </div>
      <div class="mb-3 row">
        <div class="col-auto">
          <button type="submit" name="submit" class="btn btn-primary mb-3">a+b</button>
          <button type="button" name="submit2" class="btn btn-info  mb-3">a-b</button>
          <button type="button" name="submit3" class="btn btn-danger mb-3">a*b</button>
          <button type="button" name="submit4" class="btn btn-warning mb-3">a/b</button>
        </div>
      </div>
    <div class="output">
      <h1> <?php calculate();?></h1>
      
    </div>
    </form>
    
  </div>
  
  <?php

  function calculate()
  {
    if(isset($_POST['submit']))
    {
      $firstNum = $_POST['firstNumber'];
      $secondNum = $_POST['secondNumber'];
      echo ($firstNum + $secondNum); 
    }
    if(isset($_POST['submit2']))
    {
      
      $firstNum = $_POST['firstNumber'];
      $secondNum = $_POST['secondNumber'];
      echo ($firstNum - $secondNum); 
    }
    if(isset($_POST['submit3']))
    {
      $firstNum = $_POST['firstNumber'];
      $secondNum = $_POST['secondNumber'];
      echo ($firstNum * $secondNum); 
    }
    if(isset($_POST['submit4']))
    {
      $firstNum = $_POST['firstNumber'];
      $secondNum = $_POST['secondNumber'];
      echo ($firstNum / $secondNum); 
    }
    return false;
  }
   
    
  ?>
</body>
</html>