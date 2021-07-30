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
<!--When upload files we always need set POST and enctype=multipart/form-data-->
<form enctype="multipart/form-data" method="post" action="uploading.php">
    <p> Image: <input type="file" name="image-up" id="upload-image"></p>
    <p><input type="submit" value="Upload"/></p>
</form>

<?php
$file_session_arr = $_SESSION['file'];

if (isset($file_session_arr)) {
if ($file_session_arr) {
    ?>
    <p style="color:green">
        <?php $_SESSION['file']['name'] ?>
        <b>uploaded !</b>
    </p>

<?php } else { ?>
    <p style="color:red">
        <?php $_SESSION['file']['name'] ?>
        is not valid because of the extension
        <b><?php $_SESSION['file']['extension'] ?></b>
    </p>
<?php }} ?>
</body>
</html>