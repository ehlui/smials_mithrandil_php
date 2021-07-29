<?php

function clean_string($replace, $for, $str)
{
    return str_replace($replace, $for, $str);
}

function extract_files_path_recursively($path): array
{
    $recursive_iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($path)
    );
    $files = array();
    foreach ($recursive_iterator as $el) {
        if ($el->isDir())
            continue;
        $clean_path = clean_string(
            './', '/', $el->getPathname()
        );
        array_push($files, $clean_path);
    }
    return $files;
}


function extract_parent_dirs($files, $is_sorted): array
{
    $parent_dirs_array = array();
    foreach ($files as $f) {
        $split_arr = explode('/', $f);
        $first_position_not_empty = 1;
        $parent_dir = $split_arr[$first_position_not_empty];
        if (is_dir($parent_dir))
            array_push($parent_dirs_array, $parent_dir);
    }
    if ($is_sorted)
        sort($parent_dirs_array);
    return array_unique($parent_dirs_array);
}


function extract_sub_dir_files($parent_array, $files_array, $is_sorted): array
{
    $sub_dir_files = array();
    foreach ($files_array as $file) {
        foreach ($parent_array as $parent_dir) {
            $is_found = strpos($file, $parent_dir);
            if ($is_found != false) {
                array_push($sub_dir_files, $file);
            }
        }
    }
    if ($is_sorted)
        sort($sub_dir_files);
    return array_unique($sub_dir_files);
}


function make_menu($parent_dir_array, $sub_files_array): void
{
    $DIRECTORY_ICO  = '&#128451;';
    $FOLDER_ICO     = '&#128194';
    $TAB            = '&emsp;';

    echo '<dl>';
    foreach ($parent_dir_array as $parent_dir) {
        echo '<dt>('.$DIRECTORY_ICO.') ' . $parent_dir . ' </dt>';
        foreach ($sub_files_array as $file) {
            $is_found = strpos($file, $parent_dir);
            if ($is_found != false) {
                $split_arr = explode('/', $file);
                $file_name = array_pop($split_arr);
                $file_path = implode('/', $split_arr);
                $is_php_extension = strpos($file_name, 'php',);

                $file_path ='<dd><i>'.$FOLDER_ICO.'' . $file_path . '</i><br>'.$TAB  .' ';
                $file_link =' <a href="' . $file . '">' . $file_name . '<a/></dd>';
                $file_sym=">";
                if ($is_php_extension)
                    $file_sym = '<span><img src="/uploads/php_file.ico" width="15"/></span>';
                echo $file_path.$file_sym.$file_link;
            }
        }
    }
    echo '</dl>';
}