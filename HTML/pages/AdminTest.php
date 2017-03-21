<head>
<link rel="stylesheet" type="text/css" href="../css/Ajouter_Questionnaire.css"/>
<script type="text/javascript" src="../js/Admin_Liste_Questionnaire.js"></script>
<?php include("../includes/header.php");?>
<?php
$Nom = $_SESSION['nom'];
$Prenom = $_SESSION['prenom'];
?>
</head>
<body>
<div id="conteneur" class="jumbotron">
<?php
// if(empty($_POST['']))
// var_dump($_POST);
// print $_POST[''];
print $_POST['radioVraisFaux'];
/*
if($_POST['radioVraisFaux'] != " "){
print $_POST['radioVraisFaux'];
}

if($_POST['optRadioChoix'] != "" && $_POST['choixMultiple'] != ""){
print $_POST['optRadioChoix'];
print $_POST['choixMultiple'];
}
*/
 ?>
</div><!-- conteneur-->

</body>
