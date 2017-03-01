<!DOCTYPE html>
<html lang="UTF8">
<head>
  <link rel="stylesheet" type="text/css" href="../css/Ajouter_Reponses.css"/>
  <script type="text/javascript" src="../js/Ajouter_Reponses.js"></script>
<?php include("../includes/header.php");?>
<?php
$Nom = $_SESSION['nom'];
$Prenom = $_SESSION['prenom'];
// $titreQuestion = $_POST['titreQuestion'];
?>
<script>
onglet();
ongletImage();
Enable();
</script>
</head>
<body>

<div id="conteneur" class="jumbotron"  >
</a>
<div id="btn-Suivant">
<a href="Admin_Recapitulatif.php"><button class="btn btn-default btn-lg">
<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></button></a>
</div>

  <a id="btn-Retour"href="Admin_Accueil_Questionnaire.php">
    <button type="button" class="btn btn-default btn-lg">
      <span class="glyphicon glyphicon-arrow-left" aria-hidden="true">
      </span>
    </button>
  </a>

  <!-- <h1>Titre du questionnaire :</h1>
  <!-- <h1><u><?php echo "$titreQuestion"; ?></u></h1> -->

  <h2></br>Question : (Obligatoire)</h1>
  <p>Saisir une question </p>
  <form>
    <br>
    <div class="input-group">
      <span class="input-group-addon">Question :</span>
      <input id="question" type="text" class="form-control col-lg-4" name="msg" placeholder="Saisir la question" >

    </div>
  </form>
  <br>
    <div id=Image>
      <ul class="nav nav-tabs nav-justified typeImage">
      <li>
        <a href="#" role="Image">Ajouter Une Image</a></li>
        <div class="typeImage typeImageBlock">
          <p><h3>Ajouter une image :</h3>
          <input type="file" id="imageQuestion" onchange="loadimageQuestion(this)"/>
          <input type="hidden" name="imageQuestion" id="imageQuestion"/></p>
          <canvas id="vue" width="0" height="0"></canvas>
            <!-- l'input imageQuestion va contenir l'image redimensionnée sous forme d'une data url -->
            <!-- c'est cet input qui sera envoyé avec le formulaire, sous le nom imageQuestion -->
            <br>
        </div>
      </ul>
      </div>
   </div><!-- id="test" class="jumbotron" -->
</div>

<div id="conteneur" class="jumbotron">
     <div class="reponses">
      <h2>Réponses :</h2>
      <ul class="nav nav-tabs nav-justified typeReponse">
        <li>
          <a href="#" role="typeVraiFaux">Vrai/Faux</a></li>
        <li><a href="#" role="typeChoixMulti">Choix multiple</a></li>
        <li><a href="#" role="typeQuestionTroue">Question à troue</a></li>
      </ul>

      <div class="typeVraiFaux typeReponseBlock">
        <p><h3>Vrai faux :</h3></p>
        <hr>
        <button id="buttonAjoutVraiFaux" href="#" type="button" href="#aboutModal" data-toggle="modal" data-target="#myModal" class="btn btn-circle btn-success" title="Ajouter vrai/faux pour la question" onclick='ajoutReponseVraiFaux("VraiFaux")'><b>+</b></button>
        <!-- <button type="button" class="myButton" onclick="ajoutReponse()" title="Ajout une reponse">+</button> -->
        <!-- disabled  $('button').prop('disabled', true); -->
        <div id="VraiFaux">
        </div>
        <br>
              <div id="Cible"><input type="submit" name="" value="Ajouter la question" class="btn btn-success btn-block btnAjouterQuestion"></div>
      </div><!-- .typeVraiFaux -->

      <div class="typeChoixMulti typeReponseBlock">
        <p><h3>Choix multiple :</h3></p>
        <hr>
        <button id="buttonAjoutMulti" href="#" type="button" href="#aboutModal" data-toggle="modal" data-target="#myModal" class="btn btn-circle btn-success" title="Ajouter une reponse" onclick='ajoutReponse("ChoixMulti")'><b>+</b></button>
        <!-- <button type="button" class="myButton" onclick="ajoutReponse()" title="Ajout une reponse">+</button> -->
        <!-- disabled  $('button').prop('disabled', true); -->
        <div id="ChoixMulti"></div>
        <br>
              <div id="Cible"><input type="submit" name="" value="Ajouter la question" class="btn btn-success btn-block btnAjouterQuestion"></div>
      </div><!-- .typeChoixMulti -->

      <div class="typeQuestionTroue typeReponseBlock">
        <p><h3>Question à troue :</h3></p>
        <hr>
        <button href="#" type="button" href="#aboutModal" data-toggle="modal" data-target="#myModal" class="btn btn-circle btn-success" title="Ajout une reponse" onclick='ajoutReponse("QuestionTroue")'><b>+</b></button>
        <!-- <button type="button" class="myButton" onclick="ajoutReponse()" title="Ajout une reponse">+</button> -->
        <!-- disabled  $('button').prop('disabled', true); -->
        <div id="QuestionTroue"></div>
        <br>
      <div id="Cible"><input type="submit" name="" value="Ajouter la question" class="btn btn-success btn-block btnAjouterQuestion"></div>
      </div><!-- .typeQuestionTroue -->

    </div><!-- .reponses -->


</div><!-- 2e conteneur -->
<div id="btn-Retour">
<a href="Admin_Liste_Questionnaire.php"><button class="btn btn-secondery btn-lg">Retour</button></a>
</div>
<div id="btn-Suivant">
<a href="Admin_Recapitulatif.php"><button class="btn btn-secondery btn-lg">Suivant</button></a>
</div>

</body>
</html>
