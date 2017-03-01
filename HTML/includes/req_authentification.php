<?php

session_start();

  $username = $_POST['Username'];
  $password = $_POST['Password'];

include("req_connect.php");
// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table user
$reponse = $bdd->query('SELECT * FROM user');
// SELECT nom FROM user WHERE nom != rey; 
// $reponse2 = $bdd2->query('SELECT * FROM UTILISATEUR');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{

  if ($password == $donnees["password"] && $username == $donnees["nom"] )
  {
    $_SESSION['id']=  $donnees["id"];
    $_SESSION['nom']=  $donnees["nom"];
    $_SESSION['prenom']= $donnees["prenom"];
    $_SESSION['email']= $donnees["email"];
    $_SESSION['pseudo']= $donnees["pseudo"];
    $_SESSION['admin']= $donnees["admin"];
    $_SESSION['type']= "user";
     header("location:../pages/main.php");
  }
  else {
    echo "mauvais identifiants";
    //header("location:../index.php");
    //echo "base connectée";
  }
}

$reponse->closeCursor(); // Termine le traitement de la requête


 ?>
