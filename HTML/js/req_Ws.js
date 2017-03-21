
function GetQuestionnaireProf(id_prof)
{
  $.getJSON('http://127.0.0.1:8080/vvb-ws/rest/questionnaire/Prof/'+id_prof, function( data ){
    var data = data;
    console.log(data);
      for (var i = 0; i < data.length; i++) {
           console.log("Nom du Questionnaires : "+data[i]['nom']);
           console.log("Duree du uestionnaire : "+data[i]['temps']);
           console.log("Point par bonne réponse : "+data[i]['bonneR']);
           console.log("Point par mauvaise réponse : "+data[i]['mauvaiseR']);
           console.log("Point par réponse vide :"+data[i]['aucuneR']);
           console.log("Clef du questionnaire : "+data[i]['clef']);
           console.log(" Id du prof du questionnaire : " +data[i]['idUtilisateur']);
           var arrayQuestion = data[i]['questions'];
              for (var j = 0; j < arrayQuestion.length; j++) {
                var numQ = j+1;
                console.log(" Question "+numQ+" : " + data[i]['questions'][j]['nom']);
                console.log(" Type de question : " + data[i]['questions'][j]['typeReponse']);
                  for (var k = 0; k < arrayQuestion.length; k++) {
                    var numQ = j+1;
                    console.log(" Question "+numQ+" : " + data[i]['questions'][j]['nom']);
                  }
              }
          }
          return data;// for data.length
          //console.log('Your Json result is:  ' + data[0]);//you can comment this, i used it to debug
  			});//
}// getJson

function GetMoyenneProf(id_prof)
{
  $.getJSON('http://127.0.0.1:8080/vvb-ws/rest/score/enseignant/'+id_prof, function( data )
  {
    Json = data;

  });
    return Json;
}// getJson


function GetGroupes(id_Groupe)
{

  $.getJSON('http://127.0.0.1:8080/vvb-ws/rest/groupe/'+id_Groupe, function( data ){
  				// $.each( data, function(key , value){
          //for (var i = 0; i < data.length; i++) {
            // console.log(data[2]);
            var object = data;
            console.log("id: "+data['id']);
            console.log("nom : "+data['nom']);
            console.log("utilisateurs: "+data['utilisateurs']);
            console.log("groupes : "+data['groupes']);
            console.log("id_createur: "+data['idCreateur']);



    //  result.innerText = data.result; //display the result in an HTML element
  //  }// each
  return data;
  			});// each

}// getJson


function GetAllGroupes()
{

  $.getJSON('http://127.0.0.1:8080/vvb-ws/rest/groupe/', function( data ){
  				// $.each( data, function(key , value){
          for (var i = 0; i < data.length; i++) {
            // console.log(data[2]);
            var object = data[i];
            console.log("id: "+data[i]['id']);
            console.log("nom : "+data[i]['nom']);
            console.log("utilisateurs  : "+data[i]['utilisateurs']);
              var arrayUser = data[i]['utilisateurs'];
            for (var j = 0; j < arrayUser.length; j++) {
            console.log(" id : "+data[i]['utilisateurs'][j]['id']);
            console.log(" login : "+data[i]['utilisateurs'][j]['login']);
            console.log(" admin : "+data[i]['utilisateurs'][j]['admin']);
            }
            console.log("groupes : "+data[i]['groupes']);
            var arrayGroup = data[i]['groupes'];
            for (var j = 0; j < arrayGroup.length; j++) {
                console.log("groupes : "+data[i]['groupes'][j]['nom']);
            }

            console.log("id_createur: "+data[i]['idCreateur']);

return data;

    //  result.innerText = data.result; //display the result in an HTML element
    }// each
  			});// each

}// getJson


//   var xhr = new XMLHttpRequest();
//   alert("fdpntm");
//   xhr.open('GET', 'http://10.0.2.25:9999/vvbws/rest/questionnaire/Prof/1');
//   xhr.send(null);
//   var response = JSON.parse(xhr.responseText);
// alert("reponse");
//  document.getElementById('output').innerHTML = '<span>' + response + '</span>'; // Et on affiche !
//}
