var startTime = 0;
var start = 0;
var end = 0;
var diff = 0;
var delai = 0;
var timerID = 0;
function chrono(){

	if(delai>=0)
	{
			if(delai>1)
			{
					var sec = " secondes.";
			} else {
					var sec = " seconde.";
			}
			document.getElementById("chronotime").innerHTML = delai + sec ;
			delai-- ;
			x = setTimeout("chrono()",1000) ;
	}
	else
	{
			clearTimeout(x) ;
	}
}

function chronoStart(cpt){
	delai = cpt;
	chrono();
}

function chronoContinue(){

	start = new Date()-diff;
	start = new Date(start);
	chrono();
}
function chronoReset(){
	document.getElementById("chronotime").innerHTML = "0 secondes.";
	start = new Date();
}
function chronoStopReset(){
	document.getElementById("chronotime").innerHTML = "0 secondes.";
}
function chronoStop(){

	clearTimeout(timerID);
}

function ALERT()
{
	alert("ntm");
}
