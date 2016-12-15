<?php

session_start();

include("connect.php");
// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('INSERT INTO guest (id) VALUES ("")');

$reponse = $bdd->query('SELECT MAX(id) AS id FROM guest');

$donnees = $reponse->fetch();

  $_SESSION['id']=  $donnees["id"];
  $_SESSION['type'] = "Guest";

   header("location:../pages/guest.php");


$reponse->closeCursor(); // Termine le traitement de la requête


 ?>
