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
	<div id="conteneur" class="jumbotron">

			<div id="btndeconnexion">
			<form   action="../includes/req_deconnexion.php" role="form"  method="post" >
			<button  type="submit" class="btn btn-default" action="../includes/req_deconnexion.php">
				Déconnexion
				<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
			</button>
			</form>
		</div>

	    <div id = text>
				<h1> Bienvenue </h1>

	     <h2><?php echo "Guest#".$id ?> </h2>
			 <br>
			 <form id="form" data-toggle="validator"  action="#" role="form"  method="post">
			 <div class="form-group">
				 <label for="CodeSession" class="control-label">saisissez le code Session du questionnaire souhaité</label>
				 <input type="text" class="form-control" id="CodeSession" placeholder="CodeSession" name="CodeSession">
			 </div>
			 <div class="form-group">
	       <button id="buttonconnection" type="submit" action="../includes/GuestCodeSession.php" class="btn btn-primary">Se Connecter</button>
	     </div>
	   </form>
	    </div>


	  </div>
</body>
</html>
