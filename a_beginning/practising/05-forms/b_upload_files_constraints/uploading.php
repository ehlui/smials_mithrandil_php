<?php
session_start();

include_once 'helpers.php';
$file_array = $_FILES['image-up'];
$valid_extensions = array('png', 'gif', 'jpg');

function load_file_info($file_array, $file_info, $is_valid_extension): void
{
    $_SESSION['file'] = array(
        'name' => $file_array['name'],
        'extension' => $file_info['extension'],
        'is_valid_extension' => $is_valid_extension
    );
}

function load_img_properties(): void
{
    global $file_array;
    $parent_dir = '/' . UPLOAD_FOLDER;
    $file_path = $parent_dir . '/' . $file_array["name"];
    $file_properties = array(
        'width' => '100',
        'path' => $file_path
    );
    $_SESSION['file'] = array_merge($_SESSION['file'], $file_properties);
}


if (isset($file_array)) {
    $file_info = pathinfo($file_array['name']);
    $is_valid_extension = in_array($file_info['extension'], $valid_extensions);

    load_file_info($file_array, $file_array, $is_valid_extension);
    if ($is_valid_extension) {
        perform_upload($file_array);
        load_img_properties();
    }
}
header("Location: index.php");