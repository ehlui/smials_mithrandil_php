<?php
    $whale="&#128011;";
    $whale_watering="&#128051;";
    echo
        "<h1 style='text-align:center;'>"
            . $whale
            ."Hello world from a docker container!"
            . $whale_watering
        ."</h1>";
    phpinfo();
