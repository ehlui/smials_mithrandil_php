<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bad Behaviour</title>
</head>
<body>
<h2> We noticed malicious behaviour from your requests</h2>
<p> You're a bad boy! </p>

<p> IP: <?php echo $_SERVER['REMOTE_ADDR'] ?> </p>
<p> Forwarded-IP: <?php echo $_SERVER['HTTP_X_FORWARDED_FOR'] ?>  </p>

<blockquote> Try it later...</blockquote>
</body>
</html>