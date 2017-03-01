function ShowQuestionnaire(idName,nom,url){
  // Info du questionnaire
  var nom
  		$.getJSON(url, function( data ){
  				$.each( data, function(key , value){
  				nom = data[nom];
  			});// each
  		var Questionnaires = '<a type="button" class="btn btn-primary btn-lg" href="Admin_parametrage.php">'+nom+'</a>';
  		document.getElementById(idName).innerHTML = Questionnaires;
  		});// getJson
  // var reponse;
  // reponse = httpGetSync("http://localhost:8080/vvb-ws/rest/questionnaire/2");
  // console.log(reponse);
}
