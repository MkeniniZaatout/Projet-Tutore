

<?php


include("req_connect.php");

$idUser= $_SESSION["id"];

$reponse = $bdd->query("SELECT questionnaire.nom, resultat.score FROM resultat INNER JOIN questionnaire on questionnaire.id = resultat.id_questionnaire WHERE resultat.id_user = '$idUser'" );


// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{


?>
<div class="MesResultats">
  <h2>
 <div class="QuestionnaireNom"><?php echo $donnees["nom"]; ?> </div><?php
 ?><div class="Resultats">Score : <?php echo $donnees["score"]; ?></div>
 </h2></div> <?php

}
//header("location:../pages/resultat.php");

$reponse->closeCursor(); // Termine le traitement de la requête


 ?>
