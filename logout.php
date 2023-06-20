<?php

    session_start();
    unset($_SESSION["identifier_id"]);
    unset($_SESSION["identifier_name"]);
    session_destroy();
    
    header('Location: homepage.php');
    
?>