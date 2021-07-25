<?php
    session_start();
    $file_uploaded_array=$_FILES["image-up"];
    $is_file_array=isset($file_uploaded_array);

    if($is_file_array){
        include_once 'utils.php';
        print_key_value_array($file_uploaded_array);
    }
