<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a href="index.php?controller=employee&action=create">Create new</a>
  <table>
    <thead>
      <tr>
        <td>Id</td>
        <td>Name</td>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($employees as $employee) 
        { ?>
          <tr>
            <td>
              <?php echo $employee['id']?>
            </td>
            <td>
              <?php echo $employee['name']?>
            </td>
            <td><a href="index.php?controller=employee&action=edit&id= <?php echo  $employee['id']?>">Edit</a></td>
            <td><a href="index.php?controller=employee&action=delete&id= <?php echo  $employee['id']?>">Delete</a></td>
          </tr>
          
        <?php }
      ?>
    </tbody>
    
  </table>
  
</body>
</html>