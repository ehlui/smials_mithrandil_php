<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator3000</title>
</head>
<body>
    <h2>Make your sum</h2>
    <form action="logic.php" method="get">
        <p>Number 1: <input type="number" name="num1" placeholder="5" /></p>
        <p>Number 2: <input type="number" name="num2" placeholder="3" /></p>
        <p><input type="submit" value="Calculate!" /></p>
    </form>

    <span>
    <?php
        if(isset($_SESSION["result"])){
            echo "<span>Result: <b>".$_SESSION["result"]."</b></span>";
            unset($_SESSION);
            session_destroy();
        }
    ?>
    </span>
</body>
</html>