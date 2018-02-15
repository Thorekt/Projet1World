<?php
session_start();
require_once './manager-db.php';
require_once './fct_affichage.php';
session_unset();
session_destroy();
header('location: ../connect.php?code=3');