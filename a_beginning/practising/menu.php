<?php
#session_start();
include_once 'helpers/menu_helps.php';

# 0. Extract all the files
$files = extract_files_path_recursivly('./');  #Revisar como que me da 7 repetidos... me esta dando dirs repetidos

# 1. Extract parent dirs into an array
$parent_dirs_array = array();
foreach ($files as $f) {
    $split_arr = explode('/', $f);
    $first_position_not_empty = 1;
    $parent_dir = $split_arr[$first_position_not_empty];
    if (is_dir($parent_dir))
        array_push($parent_dirs_array, $parent_dir);
}
# 1.5 Remove repeated parents
$parent_dirs_array = array_unique($parent_dirs_array);

# 2. If path contains the parent it will be store in the array of the parent
$sub_dir_files = array();
foreach ($files as $file) {
    foreach ($parent_dirs_array as $parent_dir) {
        $is_found = strpos($file, $parent_dir);
        if ($is_found != false) {
            array_push($sub_dir_files, $file);
        }
    }
}
# 2.5 Sort all the arrays for the menu
sort($parent_dirs_array);
sort($sub_dir_files);

# 3. Generate the menu Parent dir with its files
echo '<dl>';
foreach ($parent_dirs_array as $parent_dir) {
    echo '<dt>' . $parent_dir . ' </dt>';
    foreach ($files as $file) {
        $is_found = strpos($file, $parent_dir);
        if ($is_found != false)
            echo '<dd>'.$file.'</dd>';
    }
}
echo '</dl>';
