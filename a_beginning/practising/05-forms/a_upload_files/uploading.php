<?php
$file_uploaded_array = $_FILES["image-up"];
$is_file_array = isset($file_uploaded_array);

if ($is_file_array) {
    include_once 'utils.php';
    $err_code = $file_uploaded_array['error'];
    if ($err_code == 0) {

        print_key_value_array($file_uploaded_array);

        $file_name = $file_uploaded_array['name'];
        $upload_path=$_SERVER['DOCUMENT_ROOT'].'/uploads/'.$file_uploaded_array['name'];
        $tmp_path = $file_uploaded_array['tmp_name'];

        $upload_msg="File wasn't moved to /uploads";
        if(move_uploaded_file($tmp_path ,$upload_path))
            $upload_msg ="File moved to /uploads";

        echo $upload_msg;

    } else
        show_upload_file_error($err_code);
} else {
    echo "It happened an error... Redirecting to try again!";
    # https://www.php.net/manual/en/function.header.php
    header("refresh:3; url=index.php");
}
