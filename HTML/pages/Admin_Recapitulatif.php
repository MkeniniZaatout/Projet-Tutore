<head>
<link rel="stylesheet" type="text/css" href="../css/Ajouter_Questionnaire.css"/>
<?php include("../includes/header.php");?>
<?php
$Nom = $_SESSION['nom'];
$Prenom = $_SESSION['prenom'];
?>
</head>
<body>
<div id="conteneur" class="jumbotron">

  <a id="btn-Retour"href="Admin_Accueil_Questionnaire.php">
    <button type="button" class="btn btn-default btn-lg">
      <span class="glyphicon glyphicon-arrow-left" aria-hidden="true">
      </span>
    </button>
  </a>

<h2>Recapitulatif du Questionnaire :</h2><br>
<!-- Si aucun questionnaire creer :
<p>Aucun questionnaire disponible</p> <p>Creer votre premier questionnaire :</p>
 -->

    Valider le questionnaire
    <input type="submit" value="Valider">


</div><!-- conteneur-->
</body>
