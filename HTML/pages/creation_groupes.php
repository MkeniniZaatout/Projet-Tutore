<head>
<link rel="stylesheet" type="text/css" href="../css/Creation_Groupe.css"/>
<script type="text/javascript" src="../js/creation_groupe.js"></script>
<?php include("../includes/header.php");
include("../includes/req_connect.php");
$Nom = $_SESSION['nom'];
$Prenom = $_SESSION['prenom'];
?>
</head>

<body>
<div id="conteneur" class="jumbotron">

  <a href="Admin_Accueil_Questionnaire.php"><button type="button" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></button></a>

<h2>Création d'un groupe :</h2><br>

<form method="post" action="TODO.php">
    <label>Nom du groupe : </label> <input id="saisieNomGroupe" type="text" class="form-control" placeholder="Donnez un nom à votre groupe" name="creationNomGroupe">
	<div class="text-right">
	<button type="button" class="btn btn-success" onclick="showNomGroupe()">Ajouter nom groupe</button>
	</div>
    <br>

    <label>Rechercher un étudiant : </label>
    <!--
            TODO : Barre de recherche type auto-completion (ex: barre de recherche Facebook)
        ||  Actuel : datalist (= input text qui propose des options au fur et à mesure que l'on entre du texte // PAS D'ASCENCEUR => Brouillon, pas conseillé
        ||  Autre solution : balise select => pas conseillé, trop d'étudiants // => Maximum de "visibles"/ascenceur présent + possibilité de rechercher en tapant à la sélection
        ||  optgroup = select + catégories (classes par exemple)
        || choix : select + bootstrap
    -->

      <select class="form-control" id="selectGroupe">
        <?php
        $reponse1 = $bdd->query("SELECT nom,prenom FROM user WHERE nom != 'rey' AND prenom != 'gaetan'");
        while ($donnees = $reponse1->fetch())
        {
          echo "<option value=$donnees[1]$donnees[0]>$donnees[1] $donnees[0]</option>";
        }

        ?>

            <option value="Ribeiro Alexis">Ribeiro Alexis</option>
            <option value="Panzera Alexis">Panzera Alexis</option>
        </select>
        <br>
    <div class="text-right">
        <button type="button" class="btn btn-success" onclick="showGroupe()">Ajouter au groupe</button>
    </div>
    <br><br>
    <h3>Recapitulatif : </h3>
    <div id="Groupe">
      <div id="recapitulatif" class="text-center">
      </div>
    </div>
<br><br>
<div class="text-center">
        <button type="submit" class="btn btn-success">Valider la création du groupe</button>
    </div>
 </form>

</div><!-- conteneur-->


</body>
