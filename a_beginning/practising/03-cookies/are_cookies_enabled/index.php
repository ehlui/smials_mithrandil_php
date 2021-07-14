<?php
    # Adding a cookie for testing whether the browser has it enabled
       setcookie('example','value',time() + 10, '/');
       $are_cookies_enabled = false;
       $cookies_count=count($_COOKIE);
    # I need to refresh after setcookie for test the creation below
       if( $cookies_count > 0)
        $are_cookies_enabled = true;       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies enabled or disabled</title>
    <style>
        .c-enabled{
            color:green;
        }
        .c-disabled{
            color:red;
        }
    </style>
</head>
<body>
    <h2>This browser has cookies enabled?</h2>
<?php if($are_cookies_enabled){?>
    <h3 class="c-enabled">Cookies enabled!</h3>
<?php }else{ ?>
    <h3 class="c-disabled">Cookies disabled!</h3>
<?php }?>
    <p>You can disable cookies from the settings of your browser (not recomended option)</p>
</body>
</html>