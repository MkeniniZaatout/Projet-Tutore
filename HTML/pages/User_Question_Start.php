<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="stylesheet" type="text/css" href="../css/user_question_start.css"/>
<script type="text/javascript" src="../js/chrono.js"></script>
<?php include("../includes/header.php");?>
</head>
<body onload="chronoStart(50)">

  <div id="Divchrono" class="jumbotron">
    <span id="chronotime">secondes</span>
    <form name="chronoForm">
    </form>
    <div id="countdown">
               <progress id="avancement" value="10" max="100"></progress>
               <span id="pourcentage"></span>
    </div>
          <div id="infoPro">
          <p>num de la question/nbr de question</p>
          </div>
  </div>

      <div id="carre">
        <p>Questionnaire pour les noob :
          1) Blablabla ?
        </p>
      </div>
      <div id="carreReponse">
      <span> <button type="button" class="btn btn-default" style="width : 20em;">Left</button></span><br />
      <span> <button type="button" class="btn btn-default"style="width : 20em;">coucou</button></span><br />
      <span> <button type="button" class="btn btn-default"style="width : 20em;">tg</button></span><br />
      </div>
</body>
</html>
