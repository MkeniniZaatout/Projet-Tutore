
<head>
<link rel="stylesheet" type="text/css" href="../css/main.css"/>
<?php include("../includes/header.php");?>
<?php


$Nom = $_SESSION['nom'];
$Prenom = $_SESSION['prenom'];
$Admin = $_SESSION['admin'];
?>

</head>

<body>

<div id="conteneur" class="jumbotron">
    <div id = text>
     <h1>Bienvenue</h1>
     <?php if ($Admin) { ?>
       <h2>Professeur : <?php echo $Nom." ".$Prenom ?></h2>
       <?php }else { ?>
     <h2><?php echo $Nom." ".$Prenom ?> </h2>
     <?php } ?>
    </div>
</div>

</body>
