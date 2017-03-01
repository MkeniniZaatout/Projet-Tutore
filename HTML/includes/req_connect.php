<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=quizz;charset=utf8', 'root', '');
	//echo "vous etes connecté";
	// Se connecter à la bd de Jordan
	// $bdd2 = new PDO('org.postgresql:host=localhost:5432;dbname=vvb;charset=utf8', 'postgres', 'root');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
?>
