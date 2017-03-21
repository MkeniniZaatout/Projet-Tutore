<?php include("../includes/header.php");
$Nom = $_SESSION['nom'];
$Prenom = $_SESSION['prenom'];
?>
<!DOCTYPE html>
<html lang="UTF8">
  <head>
    <link rel="stylesheet" type="text/css" href="../css/Ajouter_Questionnaire.css"/>
    <script type="text/javascript" src="../js/Admin_Liste_Questionnaire.js"></script>
    <script>
    function ShowQuestionnaire(idName,nom,url){
      // Liste du questionnaire
      $.getJSON(url, function( data ){
          for (var i = 0; i < data.length; i++){
            console.log(data[i][nom]);
            var Questionnaires = '<a type="button" class="btn btn-primary btn-lg" href="Admin_parametrage.php">'+data[i][nom]+'</a><br>';
            Questionnaires += '<input checked data-toggle="toggle" type="checkbox">Mis en Ligne'

            Questionnaires += '<div id="icone">'+
                  '<br><button id="poubelle" type="button" class="btn btn-default btn-sm">' +
                  '<span class="glyphicon glyphicon-trash"  aria-hidden="true"></span></button><br>'+
                  '<button id="stylo" type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"  aria-hidden="true">'+
                  '</span></button></div>';
            $( "#"+idName ).append( $( Questionnaires ) );
           }//for
        });//getJson
    }
      ShowQuestionnaire("nomQ","nom","http://127.0.0.1:8080/vvb-ws/rest/questionnaire/Prof/1");
    </script>
  </head>
  <body>
  <div id="conteneur" class="jumbotron">
    <a href="Admin_Accueil_Questionnaire.php">
      <button type="button" class="btn btn-default btn-lg">
        <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
      </button>
    </a>
  <h2>Vos Questionnaire :</h2>
  <br>
  <div id="nomQuestion">
    <p id="nomQ"></p>
  </div>
  <div id=toggle>
    <br>
        <input checked data-toggle="toggle" type="checkbox">Mis en Ligne
  </div>
  <div id="icone">
        <br><button id="poubelle" type="button" class="btn btn-default btn-sm">
        <span class="glyphicon glyphicon-trash"  aria-hidden="true"></span></button><br>
        <button id="stylo" type="button" class="btn btn-default btn-sm">
        <span class="glyphicon glyphicon-pencil"  aria-hidden="true"></span></button>
    </div>
  </div><!-- conteneur-->
  </body>
