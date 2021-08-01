<?php
session_start();

$is_unset = session_unset();
$is_destroyed = session_destroy();

if($is_destroyed && $is_unset)
    header('Location: index.php');
else{
    echo 'Something went wrong';
}