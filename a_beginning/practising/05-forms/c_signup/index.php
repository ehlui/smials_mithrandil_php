<?php session_start() ?>
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
$login = $_SESSION['log-in'];
$is_not_logged = !isset($login) || empty($login);
if ($is_not_logged) {
    ?>
    <form method="post" action="sign-up.php">
        <p>Username: <input type="text" name="user-name" required/></p>
        <p>Password: <input type="password" name="password" required/></p>
        <input type="submit" name="submit" value="Sign-up"/>
    </form>
    <?php
} else {
    echo '<h2> Hey ' . $_SESSION['user'] . '</h2>';
    ?>
    <div style="padding: 20px">
        <form method="post" action="logout.php">
            <input type="submit" name="submit" value="logout"/>
        </form>
    </div>
<?php } ?>
</body>
</html>