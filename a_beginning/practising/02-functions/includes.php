<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Includes</title>
</head>
<body>

    <?php
    include 'example.php';

    echo 'included variable -> <b>'.$var_example.'</b>';


    include_once 'a/example2.php';

    echo 'included once variable -> <b>'.$hallo.'</b> <br>';


    echo '<h4>included once array of food:</h4>';
    foreach($food as $f){
        echo $f.'<br>';
    }
    ?>
</body>
</html>