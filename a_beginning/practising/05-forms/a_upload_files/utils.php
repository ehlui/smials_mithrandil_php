<?php
    # To debug with some format
    function print_key_value_array($arr){
        echo '<ul>';
        foreach ($arr as $k=>$v)
            echo
                '<li style="color: cadetblue">
                    ['.$k.']=
                    <i style="color: black">'.$v.'</i>'.
                '</li>';
        echo '</ul>';
    }
