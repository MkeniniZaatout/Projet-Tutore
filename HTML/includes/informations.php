<?php

session_start();

include("connect.php");

$email = $_POST['Email'];
$pseudo = $_POST['Pseudo'];
$password = $_POST['Password'];

$idUser= $_SESSION["id"];


$bdd->exec("UPDATE user SET pseudo='$pseudo',password='$password',email='$email' WHERE id='$idUser'");


$reponse = $bdd->query("SELECT * FROM user WHERE id='$idUser'");
while ($donnees = $reponse->fetch())
{
    $_SESSION['email']= $donnees["email"];
    $_SESSION['pseudo']= $donnees["pseudo"];
}


header("location:../pages/compte.php");

$bdd->closeCursor(); // Termine le traitement de la requête


 ?>
