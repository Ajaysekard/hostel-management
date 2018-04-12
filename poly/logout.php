<?php

session_start();
    session_unset();
    session_destroy();
    header( 'Location: poly_login.php');
?>