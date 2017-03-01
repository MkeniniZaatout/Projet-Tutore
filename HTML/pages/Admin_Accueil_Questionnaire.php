<!DOCTYPE html>
<html lang="UTF8">
<head>
  <script type="text/javascript" src="../js/Ajouter_Reponses.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/accueilQuestionnaire.css"></style>
<?php
include("../includes/header.php");
$Nom = $_SESSION['nom'];
$Prenom = $_SESSION['prenom'];
?>
<script>
</script>
</head>
<body>


      <div id="conteneur" class="jumbotron">
        <div class="btn-group-vertical">

          <a id="vosQuestionnaire" type="button" class="btn btn-primary btn-lg btn-block"  href="Admin_Liste_Questionnaire.php">Vos Questionnaires</a>
          <br>
          <?php if ($Admin) {?>
          <a id="creerQuestionnaire" type="button" class="btn btn-primary btn-lg btn-block" href="Admin_Ajouter_Titre_Questionnaire.php">Créer Questionnaire</a>
          <?php } else {?>
               <a href="#">Créer Questionnaire
          <?php } ?>
          <br>
          <a id="statistique" type="button" class="btn btn-primary btn-lg btn-block">Statistique</a>
          <br>
          <a id="groupes" type="button" class="btn btn-primary btn-lg btn-block" href="creation_groupes.php">Groupes</a>

      </div><!-- jumbotron -->
    </div><!-- conteneur -->


</body>
</html>
