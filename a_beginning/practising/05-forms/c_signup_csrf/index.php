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
$is_not_logged = empty($login);
if ($is_not_logged) {
    include 'forms/signup.php';
} else {
    include 'forms/logout.php';
}
?>
</body>
</html>