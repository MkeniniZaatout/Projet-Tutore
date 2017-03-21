<?php include("../includes/header.php");
$Nom = $_SESSION['nom'];
$Prenom = $_SESSION['prenom'];
$Titre = $_POST['titreQuestionnaire'];
$Question = $_POST['Question'];
// Choix multiple
if (isset($_POST['choixMultiple']) ){
  $TypeQuestion = 'CHOIX';
  $TableauReponse = $_POST['choixMultiple'];
  $TableauVraisFaux = $_POST['radioChoix'];
}
// Vrais/Faux
if (isset($_POST['radioVraisFaux']) ){
  $TypeQuestion = 'VRAIFAUX';
  $TableauReponse = $_POST['radioVraisFaux'];
}
?>
<head>
<link rel="stylesheet" type="text/css" href="../css/parametrage.css"/>
<script>
function recupQuestionnaire(){
$(document).ready(function(){
    var nom = $( "#titre" ).text()
    var temps = $( "#secondes" ).val();
    var bonneR = $( "#BonneR" ).val();
    var mauvaiseR = $( "#MauvaiseR" ).val();
    var aucuneR = $( "#AucuneR" ).val();
    var idUser = $( "#question" ).text();
    var nomQuestion = $( "#question" ).text()
    var typeQuestion = $( "#typeQuestion" ).text()
    var Questionnaire = { "nom":nom,"temps":temps, "bonneR":bonneR, "mauvaiseR":mauvaiseR, "aucuneR":aucuneR, "clef":"zbeubzbeub", "idUtilisateur":idUser,"Questionnaire":[{"nom":nomQuestion,"obligatoire":"true","typeReponse":typeQuestion,"Reponse":[]}]}
    var arrayReponse = [];
    $("ul #reponse").each(function() { arrayReponse.push($(this).text()) });
    var arrayVraisFaux = [];
    $("ul #VraisFaux").each(function() { arrayVraisFaux.push($(this).text()) });
    if(document.getElementById('reponse')) {
      console.log("L'id exsiste");
      var jsonReponse = '"Reponse": [{';
      for (var i = 0; i < arrayVraisFaux.length; i++) {
            for (var i = 0; i < arrayReponse.length; i++) {
                jsonReponse += '"nom":' +'"' + arrayReponse[i]  + '","juste":"' + arrayVraisFaux[i] + '"},{';
                if( i == arrayVraisFaux.length || i == arrayReponse.length){
                    console.log("Taille array maximum");
                    jsonReponse += '"nom":"' + arrayReponse[i] + '","juste":"' + arrayVraisFaux[i] + '"}]';
                }
            }
        }
        alert(jsonReponse);
    }
});

}
</script>
</head>

<body>
<div id="conteneur"  class="jumbotron">

  <div style="font-size: 85%; border-width:1px; border-style:dotted;border-color:black;">
    Recapitulatif du questionnaire :<br>
    <span id='idQuestionnaire' style='display: none;'><?php echo  $id = $_SESSION['id'] ?></span>
    -Titre: <?php echo '<span id="titre">' . $Titre . '</span>'?><br>
    -Type de question : <?php echo '<span id="typeQuestion">' . $TypeQuestion . '</span></br>' ?>
    -Question :<?php echo '<span id="question">' . $Question . '</span>' ?><br>

    -Reponse :<br><ul>
        <?php
        for ($i=0; sizeof($TableauReponse) > $i; $i++) {
            if (isset($_POST['choixMultiple']) ){
                echo "<li id ='reponse'>" . $TableauReponse[$i] . "</li>   " . "<li id='VraisFaux'>" . $TableauVraisFaux[$i] . "</li>";
            } else if(isset($_POST['radioVraisFaux']) ){
               echo "<li id ='VraisFaux'>" . $TableauReponse[$i] . "</li>   ";
            }
        }?>
      </ul>
  </div>
  <h1>Paramètres: </h1>
  <h2>Points :</h2>
  <br>
  <ul class="list-group">
  	<li class="list-group-item">
  		<label for="example-number-input" class="col-2 col-form-label">Bonne réponse :</label>
  		<div class="col-10">
  			<input class="form-control" type="number" id="BonneR" name="BonneR">
  		</div>
  		<span class="badge"></span>
  	</li>
  	<li class="list-group-item">
  		<label for="example-number-input" class="col-2 col-form-label">Aucune réponse</label>
  		<div class="col-10">
  			<input class="form-control" type="number" id="AucuneR" name="AucuneR">
  		</div>
  		<span class="badge"></span>
  	</li>
  	<li class="list-group-item">
  		<label for="example-number-input" class="col-2 col-form-label">Mauvaise réponse :</label>
  		<div class="col-10">
  			<input class="form-control" type="number" id="MauvaiseR" name="MauvaiseR">
  		</div>
  		<span class="badge"></span>
  	</li>
  </ul>
  <label class="custom-control custom-checkbox">
  	<input type="checkbox" class="custom-control-input" name="">
  	<span class="custom-control-indicator">Réponses annonymes</span>
  	<span class="custom-control-description"></span>
  </label>
  <h2>Temps par Question :</h2>
  <div class="col-xs-2">
  	<label for="ex1">secondes</label>
  	<input class="form-control" id="secondes" type="text" name="secondes">
  </div>
  <div id="btn-Suivant">
  		<button class="btn btn-secondery btn-lg" onclick="recupQuestionnaire()"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></button>
  </div>
  </div>
  </body>
