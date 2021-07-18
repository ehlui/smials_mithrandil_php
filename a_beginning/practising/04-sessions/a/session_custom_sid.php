<?php
    const NEW_LINE="</br>";

    # Adding a custom SID
    const CUSTOM_SID="123";
    session_id(CUSTOM_SID);

    $is_session=session_start();
    if ($is_session)
        echo "Session created ->" . "session_id=".session_id();
        echo NEW_LINE;
        var_dump(session_get_cookie_params());

    $is_deleted=session_destroy();

    if($is_deleted)
        echo NEW_LINE."Session deleted ".NEW_LINE ;
