<?php
session_start();
# As I config docker-apache path __DIR__ == $_SERVER['DOCUMENT_ROOT']
$dirs = scandir(__DIR__);
$root_path = __DIR__;

foreach ($dirs as $dir) {
    $is_dot = ($dir == '.' || $dir == '..');
    $menu_path = $root_path . '/' . $dir;
    if (is_dir($dir) && !$is_dot) {
        $sub_dir_array = scandir($menu_path);
        foreach ($sub_dir_array as $subdir) {
            $is_dot = ($subdir == '.' || $subdir == '..');
            if (!$is_dot) {
                $subdirs_arr[$dir] = $sub_dir_array;
            }
        }
        ?>
        <?php
    }
    ?>
<?php
    if(isset($subdirs_arr))
        $_SESSION['subdirs'] =$subdirs_arr;
}

    if(isset($_SESSION['subdirs'])){
        ?>
        <dl>
<?php
        foreach($_SESSION['subdirs'] as $parents_dir=>$sub_dirs_arrays) {
            echo '<dt><b>' . $parents_dir . '</b></dt>';
            foreach ($sub_dirs_arrays as $subdirs)
                echo '<dd>' . $subdirs.'</dd>';
        }
    }

?>
        </dl>

