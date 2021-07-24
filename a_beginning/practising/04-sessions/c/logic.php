<?php
session_start();

function set_zero_to_nulls(&$a,&$b){
    $a = $a == null ? 0: $a;
    $b = $b == null ? 0: $b;
}


$PREVIOUS_FILE="calculator.php";

$num1=$_GET["num1"];
$num2=$_GET["num2"];

$is_numbers = isset($num1) && isset($num2);


if($is_numbers){
    set_zero_to_nulls($num1,$num2);
    $_SESSION["result"] = $_GET["num1"] + $_GET["num2"];
}

header('Location: '.$PREVIOUS_FILE);
?>