<?php
const UPLOAD_FOLDER = 'uploads';

function perform_upload($file_array): void
{
    $upload_path =
        $_SERVER['DOCUMENT_ROOT']
        . '/' . UPLOAD_FOLDER . '/'
        . $file_array['name'];
    $tmp_path = $file_array['tmp_name'];
    $upload_msg = "File wasn't moved to /uploads";
    if (move_uploaded_file($tmp_path, $upload_path))
        $upload_msg = "File moved to /uploads";
    echo $upload_msg;
}

function build_img_tag(array $img_properties): string
{
    return '<img src="' .
        $img_properties['path'] . '
        " width="' .
        $img_properties['width'] . '
        " />';
}