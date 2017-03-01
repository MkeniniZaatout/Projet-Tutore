var eleve;
var nbClic = 0;
function showGroupe(){
nbClic++;
     // document.getElementById("recapitulatif").innerHTML = html;
      eleve = $('#selectGroupe option:selected').val();
      document.getElementById("recapitulatif").innerHTML += "<div id="+nbClic+">"+eleve+"</div>";
      // document.getElementById("recapitulatif").innerHTML += "<div id="+nbClic+"></div>"
    // document.getElementById("recapitulatif").innerHTML += "<div>";
}
function showNomGroupe(){
var nomgrp = $('#saisieNomGroupe').val();
nomgrp = "<b>"+nomgrp+":<b>";
document.getElementById("recapitulatif").innerHTML += nomgrp;
}
