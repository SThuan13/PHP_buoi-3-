<?php

if (isset($_REQUEST['submit'])) {
    $folder_path = 'file/';
    $file_path = $folder_path . $_FILES['file']['name'];
    $file = $_FILES['file'];
    $fileName = time() . $file['name'];
    $fileError = $file['error'];
    $fileTmpName = $file['tmp_name'];
    $fileExtensions = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowableupload = ['jpg', 'jpeg', 'png', 'gif'];
    $flag = true;
    if (!file_exists('file')) {
        mkdir('file');
    }
    if (!in_array($fileExtensions, $allowableupload)) {
        $flag = false;
        echo "Cần upload file có định dạng ảnh"."</br>";
    }
    if ($_FILES['file']['size'] > 2097152) {
        $flag = false;
        echo "File upload không được > 1Mb";
    }
    if ($flag) {
        move_uploaded_file($_FILES['file']['tmp_name'], $file_path);
        $target_file = $folder_path . basename($file_path);
        echo "<img src='" . $target_file . "' width='500'>" . "</br>";
        echo "kich co file: " . $_FILES['file']['size'] . "</br>";
        echo "dang file: " . $fileExtensions;
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
</head>

<body>

    <form action="" method="post" enctype="multipart/form-data">
        <p><b>Select a file to upload</b></p>
        <div>

            <input type="file" name="file">
            <label>No file chosen</label>
        </div>
        <p>Only jpg,jpge, and gif file with maximum size of 1 MB is allowed</p>
        <input type="submit" name="submit" value="Upload">
    </form>
</body>

</html>