<?php
    include "helpers.php";

    const SID     = "123abc";
    const IS_ECHO = true;

    create_session_with_id(SID,IS_ECHO);

    $_SESSION['started'] = true;
    $_SESSION['user']    = 'xyz987';

    echo NEW_LINE."Variable session:".NEW_LINE;
    foreach ($_SESSION as $e)
            echo NEW_LINE.$e;

    echo NEW_LINE."Closing session...".NEW_LINE;

    $is_destroyed=session_destroy();
    echo "Session destroyed-> ".($is_destroyed?"YES":"NO").NEW_LINE;

    echo NEW_LINE."Variable session after closing it:".NEW_LINE;

    foreach ($_SESSION as $e)
        # We can see the variables created during session remind alive...
        echo NEW_LINE.$e;

    # Removing session variables... (after destroying session is "mandatory")
    unset($_SESSION['user']);
    unset($_SESSION['started']);

    echo NEW_LINE."Variable session after unsetting it:".NEW_LINE;
    if (! isset($_SESSION['user']))
        echo "No 'user' session variable detected. Not found-> \$_SESSION['user']".NEW_LINE;
    if (! isset($_SESSION['started']))
        echo "No 'started' session variable detected. Not found-> \$_SESSION['started']".NEW_LINE;
