<?php
    # To debug with some format
    function print_key_value_array($arr){
        echo '<ul>';
        foreach ($arr as $k=>$v)
            echo
                '<li style="color: cadetblue">
                    ['.$k.']=
                    <i style="color: black">'.$v.'</i>'.
                '</li>';
        echo '</ul>';
    }


 function get_upload_file_error($err_code){
     $php_file_upload_errors = array(
         0 => 'There is no error, the file uploaded with success. code = [UPLOAD_ERR_OK]',
         1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini .   code =  [UPLOAD_ERR_INI_SIZE]',
         2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form. code = [UPLOAD_ERR_FORM_SIZE]',
         3 => 'The uploaded file was only partially uploaded. code = [UPLOAD_ERR_PARTIAL]',
         4 => 'No file was uploaded. code = [UPLOAD_ERR_NO_FILE]',
         6 => 'Missing a temporary folder. code = [UPLOAD_ERR_NO_TMP_DIR]',
         7 => 'Failed to write file to disk. code = [UPLOAD_ERR_CANT_WRITE]',
         8 => 'A PHP extension stopped the file upload. code = UPLOAD_ERR_EXTENSION',
     );
     echo '<p style="color: darkred">'. $php_file_upload_errors[$err_code].'</p>';
     # https://www.php.net/manual/en/features.file-upload.errors.php
 }