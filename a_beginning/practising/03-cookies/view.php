<?php
    $msg="No cookies were created :(";
    if (isset($_COOKIE['cookiename'])){
        $msg="Cookie created!";
    }
    echo $msg . '<br>';
?>