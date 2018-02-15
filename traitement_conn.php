<?php
session_start();
require_once 'inc/manager-db.php';
$mail=$_POST['mail'];
$pswd=md5($_POST['pswd']);
$result=getAUTH($mail,$pswd);
if ($result != false){
    $_SESSION['mail']=$mail;
    $_SESSION['pswd']=$pswd;
    $_SESSION['nom']=$result[0]->Nom;
    $_SESSION['prenom']=$result[0]->Prenom;
    header('location: ./index.php');
}
else{
    header('location: ./connect.php?code=2');
}