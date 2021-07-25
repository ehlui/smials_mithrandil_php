<?php
session_start();
$file_uploaded_array = $_FILES["image-up"];
$is_file_array = isset($file_uploaded_array);

if ($is_file_array) {
    include_once 'utils.php';
    $err_code = $file_uploaded_array['error'];
    if ($err_code == 0) {
        $dir_tmp_files = ini_get('upload_tmp_dir');
        echo $dir_tmp_files;
        print_key_value_array($file_uploaded_array);
    } else
        get_upload_file_error($err_code);

} else {
    echo "File" . $_FILES["image-up"];
}
