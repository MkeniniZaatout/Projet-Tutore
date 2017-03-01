<?php

session_start();

include("req_connect.php");

$email = $_POST['Email'];
$pseudo = $_POST['Pseudo'];
$idUser= $_SESSION["id"];


  if ( $email != null && $pseudo != null )
  $bdd->exec("UPDATE user SET pseudo='$pseudo',email='$email' WHERE id='$idUser'");

  if ( $email != null && $pseudo == null)
  $bdd->exec("UPDATE user SET email='$email' WHERE id='$idUser'");

  if ( $email == null && $pseudo != null )
  $bdd->exec("UPDATE user SET pseudo='$pseudo' WHERE id='$idUser'");


$reponse = $bdd->query("SELECT * FROM user WHERE id='$idUser'");
while ($donnees = $reponse->fetch())
{
    $_SESSION['email']= $donnees["email"];
    $_SESSION['pseudo']= $donnees["pseudo"];
}


header("location:../pages/compte.php");

$reponse->closeCursor(); // Termine le traitement de la requête


 ?>
