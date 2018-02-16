<?php
session_start();
require_once './manager-db.php';
$_SESSION['mail'] = $mail;
$_SESSION['pswd'] = $pswd;
$data = getAUTH($mail, $pswd);

if (empty ($_POST['mail']))
    $mail = $data['Mail'];
else
    $mail = $_POST['mail'];

if (empty ($_POST['pswd']))
    $pswd = $data['PSWD'];
else
    $pswd = md5($_POST['pswd']);

if (empty ($_POST['nom']))
    $nom = $data['Nom'];
else
    $nom = $_POST['nom'];

if (empty ($_POST['pren']))
    $pren = $data['Prenom'];
else
    $pren = $_POST['pren'];

if (!empty($mail) and !empty($pswd) and !empty($nom) and !empty($pren)) {
    updAcc($data['ID_u'], $mail, $pswd, $nom, $pren);
    $data = getAUTH($mail, $pswd);
    $_SESSION['mail'] = $data['Mail'];
    $_SESSION['pswd'] = $data['PSWD'];
    header('location: ../Gestion_acc.php?code=0');
} else {
    header('location: ../Gestion_acc.php?code=1');
}