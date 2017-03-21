function ShowQuestionnaire(idName,nom,url){
  // Liste du questionnaire
  $.getJSON(url, function( data ){
      for (var i = 0; i < data.length; i++){
        console.log(data[i][nom]);
        var Questionnaires = '<a type="button" class="btn btn-primary btn-lg" href="Admin_parametrage.php">'+data[i][nom]+'</a>';
        $( "#"+idName ).append( $( Questionnaires ) );
        // document.getElementById(idName).innerHTML = Questionnaires;
       }//for
    });//getJson
}
function test(){
  console.log('NTMMMM');
}
