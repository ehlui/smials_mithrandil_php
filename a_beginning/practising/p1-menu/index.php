<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <h1>The menu</h1>
    <div class="menu">
        <?php
            const INDEX = 'index.php';
            const URL_ITEMS=[
                'A'=>'?select=1',
                'B'=>'?select=2',
                'C'=>'?select=3',
            ];
    ?>
        <ol class="menu-items">
            <?php
                    foreach(URL_ITEMS as $key => $value){
                        echo "<li class='".$key."'><a href='".INDEX.$value."'>".$key."</a></li>";
                    }
            ?>
        </ol>
    </div>
    <section>
        <?php
           switch($_GET['select']){
                case 1:
                    echo 1;
                break;
                case 2:
                    echo 2;
                break;
                case 3:
                    echo 3;
                break;
           }
        ?>
    </section>
</body>
</html>