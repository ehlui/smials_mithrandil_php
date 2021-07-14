<?php 
    $ACCEPTED_SYM="accepted_cookies";
    $is_accepted                    =   isset($_GET["accept"]);
    $is_not_accepted_cookies        = ! $is_accepted;
    $is_cookie_not_created          = ! isset($_COOKIE['supercookie']);
    if($is_accepted){
        $expires = time() + 20;
        $cookie_name="supercookie";
        $cookie_value="123";
        $allowed_path="/";
        setcookie($cookie_name, $cookie_value, $expires, $allowed_path);
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accept Cookie Please</title>
</head>
<body>
    <?php

        $is_cookie_accepted_and_created = $is_not_accepted_cookies && $is_cookie_not_created;

        if($is_cookie_accepted_and_created){
    ?>
    <h2>We need Cookies!</h2>
    <p>You have to accept cookies to keep surfing this site or cookiemonster will eat you</p>
    <a href="?accept=accepted_cookies">Accept</a>
    <?php }else{ ?>
    <h2>Content after cookies accepted!</h2>
    <img  src="	https://pbs.twimg.com/profile_banners/2372164754/1579878766/1500x500" alt="cookie-monster">
    <?php } ?>
</body>
</html>