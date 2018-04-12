<?php

session_start();
    session_unset();
    session_destroy();
    header( 'Location: auro_login.php');
?>