<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="stylesheet" type="text/css" href="../css/guest.css"/>
<?php include("../includes/header.php");?>
<?php

$id = $_SESSION['id'];
?>
</head>

<body>
	<div id="conteneur">
	  <div id="test" class="jumbotron">
	    <div id = text>
	     <h1>Bienvenue</h1>
	     <h2><?php echo "Guest#".$id ?> </h2>
	    </div>
	  </div>
	</div>
</body>
</html>
