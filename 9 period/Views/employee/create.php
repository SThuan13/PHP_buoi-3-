<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create</title>
</head>
<body>
  <form action="index.php?controller=employee&action=store" method="POST">
      <div>
          <label>Name</label>
          <input type="text" name="name" />
      </div>

      <div>
          <label>Description</label>
          <input type="text" name="description" />
      </div>

      <div>
          <label>Salary</label>
          <input type="text" name="salary" />
      </div>

      <div>
          <label>Gender</label>
          <input type="radio" name="gender" value="1" />Nam
          <input type="radio" name="gender" value="0" />Nữ
      </div>

      <div>
          <label>Birthday</label>
          <input type="date" name="birthday" />
      </div>

      <button type="submit">Create new</button>
  </form>
</body>
</html>