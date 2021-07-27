<?php
include_once 'helpers/menu_helps.php';

# 0. Extract all the files
$files = extract_files_path_recursively('./');

# 1. Extract parent dirs into an array
$parent_dirs_array = extract_parent_dirs($files,true);

# 2. If path contains the parent it will be store in the array of the parent
$sub_dir_files = extract_sub_dir_files($parent_dirs_array,$files,true);

# 3. Generate the menu Parent dir with its files
make_menu($parent_dirs_array,$sub_dir_files);
