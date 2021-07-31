<?php
const UPLOAD_FOLDER = 'uploads';

function perform_upload($file_array): bool
{
    $is_uploaded = false;
    $upload_path =
        $_SERVER['DOCUMENT_ROOT']
        . '/' . UPLOAD_FOLDER . '/'
        . $file_array['name'];
    $tmp_path = $file_array['tmp_name'];
    if (move_uploaded_file($tmp_path, $upload_path))
        $is_uploaded = true;
    return $is_uploaded;
}

function build_img_tag(array $img_properties): string
{
    return '<img src="' . $img_properties['path'] . '" width="' . $img_properties['width'] . '" />';
}

function show_when_wrong_extension()
{
    session_destroy();
    $_SESSION = null;
}