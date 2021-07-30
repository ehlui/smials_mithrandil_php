<?php
session_start();

include_once 'helpers.php';
$file_array = $_FILES['image-up'];
$valid_extensions = array('png', 'gif', 'jpg');

function load_file_info($file_info, $is_valid_extension, $is_uploaded = false): void
{
    global $file_array;
    global $valid_extensions;
    $file_info_arr = array(
        'name' => $file_array['name'],
        'extension' => $file_info['extension'],
        'is_valid_extension' => $is_valid_extension,
        'valid_extensions' => $valid_extensions,
        'is_uploaded' => $is_uploaded
    );
    $_SESSION['file'] = array_merge($_SESSION['file'], $file_info_arr);

}

function load_img_properties(): void
{
    global $file_array;
    $parent_dir = '/' . UPLOAD_FOLDER;
    $file_path = $parent_dir . '/' . $file_array["name"];
    $_SESSION['file']['path'] = $file_path;
    $_SESSION['file']['width'] = '100';
}

if (isset($file_array)) {
    $file_info = pathinfo($file_array['name']);
    $is_valid_extension = in_array($file_info['extension'], $valid_extensions);
    $is_uploaded = false;

    if ($is_valid_extension) {
        load_img_properties();
        $is_uploaded = perform_upload($file_array);
    }
    load_file_info($file_info, $is_valid_extension, $is_uploaded);
}
header("Location: index.php");
