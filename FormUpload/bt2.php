<?php
if (isset($_REQUEST['submit'])) {
    $flag = true;
    $errors = [];
    $usernameF = "";
    $emailF = "";

    if (strlen(trim($_POST['username'])) === 0) {
        $errors['username'] = "First name must not be null";
        $usernameF = "khong dc de trong";
        $flag = false;
    }

    if (strlen(trim($_POST['email'])) === 0) {
        $errors['email'] = "email must not be null";
        $flag = false;
    } else {
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email must be in correct format';
            $flag = false;
        }
    }
    if (strlen(trim($_POST['password'])) === 0) {
        $errors['password'] = "password name must not be null";
        $flag = false;
    }
    if (strlen(trim($_POST['confirm_password'])) === 0) {
        $errors['confirm_password'] = "confirm password name must not be null";
        $flag = false;
    }
    if ($_POST['confirm_password'] != $_POST['password']) {
        $error['confirm_password'] = "Trường confirm password phải giống trường Password";
        $flag = false;
    }
    $folder_path = 'file/';
    $file_path = $folder_path . $_FILES['file']['name'];
    $file = $_FILES['file'];
    $fileName = $file['name'];
    $fileError = $file['error'];
    $fileTmpName = $file['tmp_name'];
    $fileExtensions = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowableupload = ['jpg', 'jpeg', 'png', 'gif'];

    if (!in_array($fileExtensions, $allowableupload)) {
        $flag = false;
        $error['file'] = "phai la anh";
    }
    if ($flag) {
        move_uploaded_file($_FILES['file']['tmp_name'], $file_path);
        $target_file = $folder_path . basename($file_path);
        echo $_POST['username'] . "<br>";
        echo $_POST['email'] . "<br>";
        echo "<img src='" . $target_file . "' width='500'>" . "<br>";;
        echo $fileName . "<br>";
        echo $fileExtensions . "<br>";
        echo $target_file;
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    .container {
        max-width: 600px;
        margin: auto;
        background-color: greenyellow;
    }

    .container h2 {
        text-align: center;
    }
</style>

<body>

    <div class="container">
        <h2>Create an account</h2>
        <form action="file2.php" method="post" enctype="multipart/form-data">
            <div class="form-group">

                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" name='username'>
                <?php if (isset($errors) && isset($errors['username'])) { ?>
                    <?php echo $errors['username']; ?>
                <?php
                } ?>

            </div>
            <div class="form-group">

                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email">
                <?php if (isset($errors) && isset($errors['email'])) { ?>
                    <?php echo $errors['email']; ?>
                <?php
                } ?>
            </div>
            <div class="form-group">

                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name='password'>
                <?php if (isset($errors) && isset($errors['password'])) { ?>
                    <?php echo $errors['password']; ?>
                <?php
                } ?>
            </div>
            <div class="form-group">

                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" name='confirm_password'>
                <?php if (isset($errors) && isset($errors['confirm_password'])) { ?>
                    <?php echo $errors['confirm_password']; ?>
                <?php
                } ?>
            </div>
            <p?>Select your avatar:
                <input type="file" name='file'><br>
                <?php if (isset($errors) && isset($errors['file'])) { ?>
                    <?php echo $errors['file']; ?>
                <?php
                } ?>
            </p>

                <button type="submit" class="btn btn-primary" name="submit">Register</button>
            </div>
        </form>
    </div>
</body>

</html>