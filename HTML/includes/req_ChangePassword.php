

<?php

session_start();

include("req_connect.php");

$idUser= $_SESSION["id"];
$password = $_POST['Password'];
$confirm_password = $_POST['Confirm_Password'];

  if ( $password != null && $confirm_password != null && $password == $confirm_password )
$reponse =  $bdd->exec("UPDATE user SET password='$password' WHERE id='$idUser'");

header("location:../pages/compte.php");

$reponse->closeCursor(); // Termine le traitement de la requête


 ?>
