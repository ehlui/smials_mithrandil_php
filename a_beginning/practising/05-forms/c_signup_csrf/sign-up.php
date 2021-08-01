<?php
session_start();
$redirect_at = 'index.php';

function validate_csrf($csrf_to_check, $key_hash): bool

{
    include_once 'helper.php';
    $csrf_created = create_csrf_token('index.php', $key_hash);
    echo '<br>' . $csrf_created . '<br>';
    return hash_equals($csrf_created, $csrf_to_check);
}


if (!empty($_POST['csrf_token'])) {

    $is_valid = validate_csrf(
        $_POST['csrf_token'], $_SESSION['key_hash']
    );

    #echo $is_valid ? 'VALID' : 'NOT-VALID';

    if (!$is_valid) {
        $redirect_at = 'bad-request.php';
        session_destroy();
        session_unset();
    } else {
        $user = $_POST['user-name'];
        $psw = $_POST['password'];
        $psw_hash = password_hash($psw, PASSWORD_DEFAULT);
        # Do some stuff for storing it to a DB
        # All goes fine then
        $_SESSION['log-in'] = true;
        $_SESSION['user'] = $user;
    }
}

header('Location: ' . $redirect_at);