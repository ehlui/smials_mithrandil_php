<?php
# As in C and C++ we can treat params
# with '&' as memory references
function add_one(&$number){
    $number++;
}

function add_two($number){
    $number+=2;
}

?>