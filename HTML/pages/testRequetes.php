<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="stylesheet" type="text/css" href="../css/Creation_Groupe.css"/>
<script type="text/javascript" src="../js/req_Ws.js"></script>

<?php include("../includes/header.php");?>

<script>
 function testRecup(){
var myJson = GetMoyenneProf('1');

for (var i = 0; i < myJson.length; i++) {
          // console.log(data[2]);
          var object = myJson[i];
          console.log("Nom du Questionnaires : "+myJson[i]['questionnaire']);
          console.log("moyenne : "+myJson[i]['moyenne']);


  //  result.innerText = data.result; //display the result in an HTML element
}// each
}

</script>

</head>

<body >
	<div id="conteneur" class="jumbotron">


	       <button  onclick="testRecup();">test</button>

	    </div>


</body>
</html>
