<?php
	include("../includes/header.php");
	$Nom = $_SESSION['nom'];
	$Prenom = $_SESSION['prenom'];
?>
<!DOCTYPE html>
<html lang="UTF8">
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

		<script src="https://code.jquery.com/jquery-3.1.1.min.js" defer></script>
		<script src="dist/js/bootstrap-checkbox.min.js" defer></script>

		<link rel="stylesheet" type="text/css" href="../css/Ajouter_Reponses.css"/>
		<script type="text/javascript" src="../js/Admin_Ajouter_Questionnaire.js"></script>
		<script>
		$(document).ready(function(){
			function ajoutReponseLibre(div_id){
				// nbclic++;
				// Id de la div reponse
				var id = 1;
				var content;
				var idReponse = "reponse-"+id;
				var idSupprimer = "Sup-"+id;
				// Question/Reponse Libre ajouté a la div
				content = '<div id="' + idReponse + '" class="input-group"><span class="input-group-addon">Votre reponse :</span><input id="libre" type="text" class="form-control" name="libre[]" placeholder="Saisir la reponse"></div><div id="' + idSupprimer + '"><input type="button" value="Supprimer la reponse"';
				content += "onclick='supprimerReponse(\""  + idReponse + "\",\"" + idSupprimer + "\")'></div>";

				var i;
				$("#"+div_id).append(content);

				id++;
				idReponse = "reponse-"+id;
				idSupprimer = "Sup-"+id;

				content += '<div id="' + idReponse + '" class="input-group"><span class="input-group-addon">Votre reponse :</span><input id="msg" type="text" class="form-control" name="libre[]" placeholder="Saisir la reponse"></div><div id="' + idSupprimer + '"><input type="button" value="Supprimer la reponse"';
				content += "onclick='supprimerReponse(\""  + idReponse + "\",\"" + idSupprimer + "\")'></div>";

			}
			onglet();
			ongletImage();
			Enable();
		});
		</script>
	</head>

	<body>
		<div id="conteneur" class="jumbotron">
			<div id="btn-Suivant">
				<a href="Admin_Recapitulatif.php">
					<button class="btn btn-default btn-lg">
						<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
						</button>
				</a>
			</div>
			<a id="btn-Retour"href="Admin_Accueil_Questionnaire.php">
				<button type="button" class="btn btn-default btn-lg">
					<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
				</button>
			</a>

			<br><br><br>

			<!-- Le Début du formulaire ICI  Admin_parametrage.php-->
			<form method="POST" action="Admin_parametrage.php">
				<p>Saisir le titre de votre questionnaire</p>

				<div class="input-group">
					<span class="input-group-addon">Questionnaire :</span>
					<input type="text" class="form-control" name="titreQuestionnaire" placeholder="Saisir le nom du questionnaire"  required>
				</div><br><br>

				<p>Saisir une question </p>

				<div class="input-group">
					<span class="input-group-addon">Question :</span>
					<input id="question" type="text" class="form-control col-lg-4" name="Question" placeholder="Saisir la question"  required >
					<input id="obligatoire" name="obligatoire" type="radio">Obligatoire<br>
					<input id="obligatoire" name="obligatoire" type="radio">Non Obligatoire
				</div>


				<div id="conteneur" class="jumbotron">
					<div id="Image">
						<ul class="nav nav-tabs nav-justified typeImage">
							<li><a href="#Image" role="Image" style="background-color:#EEEEEE;">Ajouter Une Image</a></li>
							<div class="typeImage typeImageBlock" style="background-color:#EEEEEE;">
								<p>
									<h3>Ajouter une image :</h3>
									<input type="file" id="imageQuestion" onchange="loadimageQuestion(this)"/>
									<input type="hidden" name="imageQuestion" id="imageQuestion"/>
								</p>
								<canvas id="vue" width="0" height="0"></canvas>
							</div>
						</ul>
					</div>

					<div class="reponses">
						<h2>Réponses :</h2>

						<ul class="nav nav-tabs nav-justified typeReponse">
							<li><a href="#typeVraiFaux" role="typeVraiFaux" style="background-color:#EEEEEE;">Vrai/Faux</a></li>
							<li><a href="#typeChoixMulti" role="typeChoixMulti" style="background-color:#EEEEEE;">Choix multiple</a></li>
							<li><a href="#typeQuestionTroue" role="typeQuestionTroue" style="background-color:#EEEEEE;">Réponse libre</a></li>
						</ul>

						<div class="typeVraiFaux typeReponseBlock" style="background-color:#EEEEEE;">
							<h3>Vrai faux :</h3>
							<hr>
							<button id="buttonAjoutVraiFaux" href="#" type="button" href="#aboutModal" data-toggle="modal" data-target="#myModal" class="btn btn-circle btn-success" title="Ajouter vrai/faux pour la question" onclick='ajoutReponseVraiFaux("VraiFaux")'><b>+</b></button>
							<div id="VraiFaux">
							</div>
						</div><!-- .typeVraiFaux -->

						<div class="typeChoixMulti typeReponseBlock" style="background-color:#EEEEEE;">
							<p><h3>Choix multiple :</h3></p>
							<hr>
							<button id="buttonAjoutMulti" href="#" type="button" href="#aboutModal" data-toggle="modal" data-target="#myModal" class="btn btn-circle btn-success" title="Ajouter une reponse" onclick='ajoutReponse("ChoixMulti")'><b>+</b></button>
							<div id="ChoixMulti"></div>
						</div><!-- .typeChoixMulti -->

						<div class="typeQuestionTroue typeReponseBlock" style="background-color:#EEEEEE;">
							<h3>Réponse libre :</h3>
							<hr>
							<button href="#" type="button" href="#aboutModal" data-toggle="modal" data-target="#myModal" class="btn btn-circle btn-success" title="Ajout une reponse" onclick='ajoutReponseLibre("QuestionTroue")'><b>+</b></button>
							<div id="QuestionTroue"></div>
						</div><!-- .typeQuestionTroue -->

					</div><!-- .reponses -->

				</div><!-- 2e conteneur -->
					<div>
						AJOUTER UNE QUESTION :
						<button id="buttonAjoutMulti" type="button" href="#ajoutQuestionReponse" data-toggle="modal" data-target="#myModal" class="btn btn-circle btn-success" title="Ajouter une question" onclick='ajoutQuestionReponse()'><b>+</b></button><br>
					<div/>
					<div id="Cible">
						<input type="submit" id="submitInput" disabled="true" name="envoi" value="Ajouter le questionnaire" class="btn btn-success btn-block btnAjouterQuestion">
					</div>
			</form><!-- La fin du formulaire ICI-->
			<?php var_dump($_POST); ?>
		</div>

	</body>
</html>
