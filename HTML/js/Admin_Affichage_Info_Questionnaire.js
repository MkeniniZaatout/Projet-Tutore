function InfoQuestionnaire(){
	var nom;
	var temps;
	var bonneR;
	var aucuneR;
	var ptmauvaiseR;
	var idProf;
			$.getJSON("http://10.0.2.25:9999/vvb-ws/rest/questionnaire/Prof/1", function( data ){
					$.each( data, function(key , value){
					nom = data['nom'];
					temps = data['temps'];
					bonneR = data['bonneR'];
					aucuneR = data['aucuneR'];
					ptmauvaiseR = data['mauvaiseR'];
					idProf = data['idUtilisateur'];
				});// each
	var informations ="<p>Voici Les informations du questionnaire "+nom+" recuperer de la Bd :<br> -temps:"+temps+" <br>-point par bonne reponse:"+ptmauvaiseR+" <br>-point par bonne mauvaise reponse:"+bonneR+"<br>.L'id du prof lié à la question : "+idProf+"</p>" ;
	document.getElementById("conteneur").innerHTML = informations;
	});// getJson

}
