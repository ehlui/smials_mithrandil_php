<?php
session_start();
include_once 'helpers.php';
$file_array = $_FILES['image-up'];
$valid_extensions = array('png', 'gif', 'jpg');


$redirect_page = 'index.php';
if (isset($file_array)) {
    $file_info = pathinfo($file_array['name']);
    $is_valid_extension = in_array(
        $file_info['extension'], $valid_extensions
    );

    if ($is_valid_extension)
        perform_upload($file_array);
    $_SESSION['file'] = array(
        'name'               => $file_array['name'],
        'extension'          => $file_info['extension'],
        'is_valid_extension' => $is_valid_extension
    );

}
header("refresh:3; url=index.php");
