<?php
       $is_created=setcookie("cookiename2","value",time() + 1,'/');
        $msg="No cookies were created :(";
        if ( $is_created){
            $msg="Cookie created!";
        }
            echo $msg . '<br>';
        echo var_dump($_COOKIE['cookiename']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Cookie</title>
</head>
<body>

</body>
</html>