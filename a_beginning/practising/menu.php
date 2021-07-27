<?php
include_once 'helpers/menu_helps.php';

# 0. Extract all the files
$files = extract_files_path_recursively('./');

# 1. Extract parent dirs into an array
$parent_dirs_array = extract_parent_dirs($files, true);

# 2. If path contains the parent it will be store in the array of the parent
$sub_dir_files = extract_sub_dir_files($parent_dirs_array, $files, true);

# 3. Generate the menu Parent dir with its files
#make_menu($parent_dirs_array,$sub_dir_files);

echo '<dl>';
foreach ($parent_dirs_array as $parent_dir) {
    echo '<dt>' . $parent_dir . ' </dt>';
    foreach ($files as $file) {
        $is_found = strpos($file, $parent_dir);
        if ($is_found != false) {
            $split_arr = explode('/', $file);
            $file_name = array_pop($split_arr);
            $file_path = implode('/',$split_arr);
            echo '<dd><i>'.$file_path.'</i><br>&emsp; > <a href="'.$file.'">' . $file_name . '<a/></dd>';
        }
    }
}
echo '</dl>';