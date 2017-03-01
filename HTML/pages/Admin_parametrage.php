<head>
<link rel="stylesheet" type="text/css" href="../css/parametrage.css"/>
<?php include("../includes/header.php");?>
<?php
$Nom = $_SESSION['nom'];
$Prenom = $_SESSION['prenom'];
?>
</head>

<body>

<div id="conteneur"  class="jumbotron">
<h1>Paramètres: </h1>
<h2>Points :</h2>
<br>
<ul class="list-group">
 <li class="list-group-item">
   <label for="example-number-input" class="col-2 col-form-label">Bonne réponse :</label>
   <div class="col-10">
     <input class="form-control" type="number" id="example-number-input">
   </div>
   <span class="badge"></span></li>
   <li class="list-group-item">
     <label for="example-number-input" class="col-2 col-form-label">Aucune réponse</label>
     <div class="col-10">
       <input class="form-control" type="number" id="example-number-input">
     </div>
    <span class="badge"></span></li>
    <li class="list-group-item">
      <label for="example-number-input" class="col-2 col-form-label">Mauvaise réponse :</label>
      <div class="col-10">
        <input class="form-control" type="number" id="example-number-input">
      </div>
      <span class="badge"></span></li>
</ul>
<label class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input">
  <span class="custom-control-indicator">Réponses annonymes</span>
  <span class="custom-control-description"></span>
</label>
<h2>Temps par Question :</h2>
<div class="col-xs-2">
  <label for="ex1">secondes</label>
  <input class="form-control" id="ex1" type="text">
</div>
<div id="btn-Suivant">
<a href="Admin_Ajouter_Reponse.php"><button class="btn btn-secondery btn-lg">
<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></button></a>
</div>
</div>


</body>
