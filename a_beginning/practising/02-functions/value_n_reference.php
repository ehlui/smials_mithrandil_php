<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Value & Rerefence</title>
</head>
<body>
    <?php   
        # testing how these functions works
        include 'utils_functions.php';
        echo '<h2>Using a function that treats its params as references</h2>';
        $n = 1;
        echo '<p>Before function -> '.$n.'</p>';
        add_one($n);
        echo '<p>After function -> '.$n.'</p>';

        echo '<h2>Using a function that treats its params as values</h2>';
        $k = 1;
        echo '<p>Before function -> '. $k.'</p>';
        add_two($k);
        echo '<p>After function -> '.$k.'</p>';
    ?>
</body>
</html>