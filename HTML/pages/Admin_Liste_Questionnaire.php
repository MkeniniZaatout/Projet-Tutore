<head>
<link rel="stylesheet" type="text/css" href="../css/Ajouter_Questionnaire.css"/>
<script type="text/javascript" src="../js/Admin_Liste_Questionnaire.js"></script>
<?php include("../includes/header.php");?>
<?php
$Nom = $_SESSION['nom'];
$Prenom = $_SESSION['prenom'];
// $titreQuestion = $_POST['titreQuestion'];
?>
</head>
<script>
ShowQuestionnaire("nomQuestion","nom","http://localhost:8080/vvb-ws/rest/questionnaire/3");
</script>
<body>
<div id="conteneur" class="jumbotron">
    <a href="Admin_Accueil_Questionnaire.php">
      <button type="button" class="btn btn-default btn-lg">
      <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
    </button>
  </a>

</br><h2>Vos Questionnaire :</h2></br>
<!-- Si aucun questionnaire creer :
<p>Aucun questionnaire disponible</p> <p>Creer votre premier questionnaire :</p>
    <input id="question" type="text" class="form-control" name="msg" placeholder="Saisir le nom du questionnaire"> -->

<div id="nomQuestion">
</div>
    <div id=toggle>
      <br>
          <input checked data-toggle="toggle" type="checkbox">Mis en Ligne
    </div>
       <div id="icone">
          <br>
          <button id="poubelle" type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-trash"  aria-hidden="true"></span></button>
          <br>
          <button id="stylo" type="button" class="btn btn-default btn-sm" >
          <span class="glyphicon glyphicon-pencil"  aria-hidden="true"></span></button>
       </div>
</div><!-- conteneur-->

<div id="footer">
<a href="Admin_Accueil_Questionnaire.php"><button class="btn btn-secondery btn-lg">Retour</button></a>
</div>
</body>
