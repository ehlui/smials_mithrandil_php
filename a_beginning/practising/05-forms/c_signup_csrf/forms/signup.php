<form method="post" action="sign-up.php">
    <p>Username: <input type="text" name="user-name" required/></p>
    <p>Password: <input type="password" name="password" required/></p>
    <input name="csrf_token" value="<?php echo $csrf_token ?>" hidden/>
    <input type="submit" name="submit" value="Sign-up"/>
</form>