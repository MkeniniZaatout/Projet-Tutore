<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="stylesheet" type="text/css" href="../css/guest.css"/>
<script type="text/javascript" src="../js/req_Ws.js"></script>

<?php include("../includes/header.php");?>

</head>

<body >
	<div id="conteneur" class="jumbotron">

	    <div id = text>
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
