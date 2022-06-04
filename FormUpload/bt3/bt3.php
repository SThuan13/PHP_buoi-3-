<?php
function uploadFiles($fileName, $tmpName)
{
    $name = $fileName;
    $tmpname = $tmpName;
    
    if (file_exists($tmpName)) {
        move_uploaded_file($tmpname, 'uploads/' . $name);
    }
}
if (isset($_POST['submit'])):
    $error = [];
    $text = $_POST['text'];
    $checkbox = isset($_POST['checkbox']) ? $_POST['checkbox'] : [];
    $textarea = $_POST['textarea'];
    $radio = isset($_POST['radio-button']) ? $_POST['radio-button'] : null;
    $select = $_POST['select'];

    $allowExtention = ['jpg', 'jpeg', 'png', 'gif'];

    if ($text === '') {
        $error[] = "Trường text không được để trống";
    }
    if (count($checkbox) === 0) {
        $error[] = "Cần check ít nhất 1 trường checkbox";
    }
    if ($textarea === "") {
        $error[] = "Trường textarea không được để trống";
    }
    if ($radio === null) {
        $error[] = "Trường raido không được để trống";
    }


    $files = $_FILES['file'];
    foreach ($files['name'] as $key => $file) {
        uploadFiles($files['name'][$key], $files['tmp_name'][$key]);
    }

endif;

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bt3.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="form">
            <form action="" method="post" enctype="multipart/form-data">
                <label>Text</label>
                <div style="margin-bottom: 10px;">
                    <input class="style" type="text" name="text" placeholder="Placeholder">
                </div>
    
                <label>Checkbox</label>
                <div>
                    <input type="checkbox" name="checkbox[]" value="1"> Checkbox1
                </div>
                <div>
                    <input type="checkbox" name="checkbox[]" value="2"> Checkbox2
                </div>
                <div style="margin-bottom: 10px;">
                    <input type="checkbox" name="checkbox[]" value="3"> Checkbox3
                </div>
    
                <label>Textarea</label>
    
                <div style="margin-bottom: 10px;">   
                    <textarea name="textarea" class="style"></textarea>
                </div>
    
                <div style="margin-bottom: 10px;">
                    <label>Radio button</label>
                    <input type="radio" name="radio-button" value="yep"> yep
                    <input type="radio" name="radio-button" value="nope"> nope
                    <input type="radio" name="radio-button" value="none"> none            
                </div>
    
                <label>Select</label>
                <select style="margin-bottom: 10px; width: 1012px;" class="style" name="select" id="select">
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>
    
                <label>Upload files</label>
                <div style="margin-bottom: 10px;">
                    <input type="file" name="file[]" multiple>
                </div>
    
                <button name="submit" type="submit">Submit</button>

            </form>
        </div>
    </div>
</body>
</html>