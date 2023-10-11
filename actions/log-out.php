<?php
    session_start();
    session_unset();
    session_destroy();

    header("location: Sign-in.php");
    exit;
?>