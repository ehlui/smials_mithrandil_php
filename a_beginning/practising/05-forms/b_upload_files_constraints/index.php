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
    if ($file_session_arr['is_valid_extension']) {
        include_once 'helpers.php';
        ?>
        <p style="color:green">
            <?php echo $_SESSION['file']['name'] ?>
            <b>uploaded !</b>
        </p>
        <?php
        echo build_img_tag($_SESSION['file']);
    } else { ?>
        <p style="color:red">
            <b><?php echo $_SESSION['file']['name'] ?></b>
            is not valid because of the extension
            <b><?php echo $_SESSION['file']['extension'] ?></b>
            is not valid.
        </p>
    <?php }
} ?>
</body>
</html>