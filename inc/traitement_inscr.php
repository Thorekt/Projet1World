<?php
require_once './inc/manager-db.php';
$mail = $_POST['mail'];
$pswd = md5($_POST['pswd']);
$nom = $_POST['nom'];
$pren = $_POST['pren'];
if (!empty($mail) and !empty($pswd) and !empty($nom) and !empty($pren) and getID_U($mail, $pswd) == false) {
    inscr($mail, $pswd, $nom, $pren);
    $getId = getAUTH($mail, $pswd);
    $ID_user = $getId[0]->ID_u;
    setGrade($ID_user, 1);
    header('location: connect.php?code=0');
} else {
    header('location: connect.php?code=1');
}