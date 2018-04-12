<?php

session_start();
    session_unset();
    session_destroy();
    header( 'Location: annai_login.php');
?>