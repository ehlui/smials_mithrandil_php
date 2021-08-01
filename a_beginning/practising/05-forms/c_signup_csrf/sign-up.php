<?php
session_start();
if (!isset($_POST)) {
    session_destroy();
    $_SESSION = null;
} else {
    $user = $_POST['user-name'];
    $psw = $_POST['password'];

    $psw_hash = password_hash($psw, PASSWORD_DEFAULT);
    # Do some stuff for storing it to a DB
    # All goes fine then
    $_SESSION['log-in'] = true;
    $_SESSION['user']= $user;
}
header('Location: index.php');