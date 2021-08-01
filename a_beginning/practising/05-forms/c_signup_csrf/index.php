<?php session_start();
include_once 'helper.php';

# 1. Creating a key for hash function
if (empty($_SESSION['key_hash'])) {
    try {
        $_SESSION['key_hash'] = bin2hex(random_bytes(32));
    } catch (Exception $e) {
        echo 'Something went wrong: ' . $e->getMessage();
        # Log this error
    }
}

# 2. Create the CSRF token
$current_file_page = basename($_SERVER['PHP_SELF']);
$csrf_token = create_csrf_token($current_file_page, $_SESSION['key_hash']);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign-up</title>
</head>
<body>
<?php

if (isset($_POST))
    $login = $_SESSION['log-in'];
$is_not_logged = empty($login);
if ($is_not_logged) {
    $_SESSION['csrf_token'] = $csrf_token;
    ?>
    <form method="post" action="sign-up.php">
        <p>Username: <input type="text" name="user-name" required/></p>
        <p>Password: <input type="password" name="password" required/></p>
        <input name="csrf_token" value="<?php echo $csrf_token ?>" hidden/>
        <input type="submit" name="submit" value="Sign-up"/>
    </form>
    <?php
} else {
    include 'forms/logout.php';
}
?>
</body>
</html>