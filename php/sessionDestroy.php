<?php
    // Check if the session is set and destroy it
    session_start ();
    session_destroy ();
    unset ($_SESSION);
    header ("Location: formCreate.php");
    exit ();
?>