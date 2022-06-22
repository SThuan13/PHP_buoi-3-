<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body> 
  <style>
    .bg-custom{
      background-color: #36393f;
      color: rgb(143,146,150);
      border-radius: 9px;
    }

    .createAccount {
      padding: 10%;
    }

    .select-custom{
      padding: 6px 12px;
      
    }

    .btn-custom{
      background-color: #7289da;
    }

    .btn-custom:hover{
      background-color: #4565d6;
      color: white;
      border: 1px solid #36393f;
    }
  </style>
  <div class="container ">
    
    <div class="row justify-content-md-center p">
      <div class="col-md-6 my-5">
      <div class="createAccount bg-custom ">
      <div class="card border-0 bg-custom" >
        <form method='post'>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">EMAIL</label>
            <input type="email" name="email" class="form-control bg-custom" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="username" class="form-label">USERNAME</label>
            <input type="text" name="username" class="form-control bg-custom" id="username">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">PASSWORD</label>
            <input type="password" class="form-control bg-custom" id="exampleInputPassword1">
          </div>
          <div class="mb-10 ">
            <label for="exampleInputPassword1" class="d-block form-label">DATE OF BIRTH</label>
            <div class="row justify-content-center">
              <div class="col-3 d-inline">
                <select class="select-custom  bg-custom" >
                  <option selected>Select</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-3 d-inline">
                <select class="select-custom  bg-custom" >
                  <option selected>Select</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-3 d-inline">
                <select class="select-custom  bg-custom" >
                  <option selected>Select</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>
            
            
          </div>
          
          <div class="d-grid gap-2 mt-4">
            <button class="btn btn-custom" type="submit">Button</button>
            
          </div>
        </form>
      </div>
      
      </div>
      
      </div>
  </div>
</body>
</html>