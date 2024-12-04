<?php
    session_start(); // start session
    $_SESSION = array(); // clear session array
    session_destroy(); // destroy session

    // redirect to login
    header('location:index.php'); 
?>