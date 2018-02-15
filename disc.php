<?php
    session_start();
    require_once 'inc/manager-db.php';
    require_once 'inc/fct_affichage.php';
    session_unset();
    session_destroy();
    header('location: connect.php?code=3');