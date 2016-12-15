
<head>
<link rel="stylesheet" type="text/css" href="../css/main.css"/>
<?php include("../includes/header.php");?>
<?php


$Nom = $_SESSION['user'];
$Prenom = $_SESSION['prenom'];
?>

</head>

<body>

<div id="conteneur">
  <div id="test" class="jumbotron">
    <div id = text>
     <h1>Bienvenue</h1>
     <h2><?php echo $Nom." ".$Prenom ?> </h2>
    </div>
  </div>
</div>

</body>
