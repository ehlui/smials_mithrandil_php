<?php
    const NEW_LINE="</br>";
    function create_session_with_id(?string $id, $is_echo){
        $is_sid_added       =   session_id($id);
        $is_session_created =   session_start();
        if($is_echo){
            echo "SID->".session_id()." ".$is_sid_added.NEW_LINE;
            echo "Session Created->".$is_session_created.NEW_LINE;
        }
        return $is_session_created;
    }

