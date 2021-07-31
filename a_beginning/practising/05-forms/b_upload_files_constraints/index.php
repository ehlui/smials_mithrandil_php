<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>&#128194;|UploadFiles+Constrains</title>
</head>
<body>
<form enctype="multipart/form-data" method="post" action="uploading.php">
    <p> Image: <input type="file" name="image-up" id="upload-image"></p>
    <p><input type="submit" value="Upload"/></p>
</form>
<?php
if (isset($_SESSION['file'])) {
    if ($_SESSION['file']['is_uploaded']) {
        include_once 'after_button/file_uploaded.php';
    } else {
        include_once 'after_button/wrong_extension.php';
    }
    session_destroy();
}
if (isset($_SESSION['not-file'])) {
    include_once 'after_button/not_uploaded.php';
    unset($_SESSION['not-file']);
}
?>
</body>
</html>