<?php
 # echo "Creating a session";
 #   -> Like cookie creation we cannot make an OUTPUT before these methods (or any html)
    $is_session=session_start();
    if ($is_session)
        echo "Session created ->" . "  (default) session_id=".session_id();

    $is_deleted=session_destroy();

    if($is_deleted)
        echo NEW_LINE."Session deleted ".NEW_LINE ;
