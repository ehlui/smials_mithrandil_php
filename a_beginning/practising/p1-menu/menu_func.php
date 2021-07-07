<?php
    function greet($msg=null){
        if ($msg == null)
             $msg = 'Hallo';
        $BOUND= 10;
        for($i=0;$i<$BOUND;$i++){
            echo $msg."</br>";
        }
    }

    function add_two($number=10){
        echo "before: ".$number.", now: ".$number+=2;
    }

    function some_superglobals(){
        echo "Server we are =".$_SERVER['SERVER_NAME']."</br>";
        echo "Server software =".$_SERVER['SERVER_SOFTWARE']."</br>";

        $timestamp=$_SERVER['REQUEST_TIME'];
        $server_req_time=date("Y-m-d :i:s", $timestamp);

        echo "Server request time (ms) =".$server_req_time."</br>";
        echo "Server protocol =".$_SERVER['SERVER_PROTOCOL']."</br>";
        echo "Server protocol =".$_SERVER['REQUEST_METHOD']."</br>";
        echo "Server ip =".$_SERVER['SERVER_ADDR']."</br>";
        echo "Server gw =".$_SERVER['GATEWAY_INTERFACE']."</br>";
    }
?>