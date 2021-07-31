<?php
session_start();

include_once 'helpers.php';
$file_array = $_FILES['image-up'];
$valid_extensions = array('png', 'gif', 'jpg');

function load_file_info($file_info, $is_valid_extension, $is_uploaded = false): void
{
    global $file_array;
    global $valid_extensions;
    $_SESSION['file']['name'] = $file_array['name'];
    $_SESSION['file']['extension'] = $file_info['extension'];
    $_SESSION['file']['is_valid_extension'] = $is_valid_extension;
    $_SESSION['file']['valid_extensions'] = $valid_extensions;
    $_SESSION['file']['is_uploaded'] = $is_uploaded;
}

function load_img_properties(): void
{
    global $file_array;
    $parent_dir = '/' . UPLOAD_FOLDER;
    $file_path = $parent_dir . '/' . $file_array["name"];
    $_SESSION['file']['path'] = $file_path;
    $_SESSION['file']['width'] = '100';
}

function perform_upload_operations(): void
{
    global $file_array;
    global $valid_extensions;
    $file_info = pathinfo($file_array['name']);
    $is_valid_extension = in_array($file_info['extension'], $valid_extensions);
    $is_uploaded = false;

    if ($is_valid_extension) {
        load_img_properties();
        $is_uploaded = perform_upload($file_array);
    }
    load_file_info($file_info, $is_valid_extension, $is_uploaded);
}

if (isset($file_array)) {
    $has_not_error = $file_array['error'] == 0;
    echo $file_array['error'];
    if ($has_not_error) {
        perform_upload_operations();
    } else {
        $_SESSION['not-file'] = true;
    }
}
header("Location: index.php");
