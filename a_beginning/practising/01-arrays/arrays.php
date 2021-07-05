<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
    $names=['Pepa','Lucia','Mariano','Harry'];

    echo "Array of names: (in var_dump)";
    echo "<br>";
    var_dump($names);

    echo "<br>";
    echo "Array of names: (in foreach)";
    echo "<br>";
    foreach($names as $name){
        echo $name .', ';
    }

    # Well formated with html
    $colors = array('red','blue','black');
    echo '<div>';
    echo '<h3>Well formated colors</h3>';
    
    echo '<ol>';
    foreach($colors as $color){
        echo '<li>'.$color .'</li>';
    }
    echo '</ol>';

    echo "Ich mag die Farbe Schwarz <b>($colors[2])</b>"

    ?>
</body>
</html>