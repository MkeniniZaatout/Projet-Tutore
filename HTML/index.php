<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="stylesheet" type="text/css" href="css/index.css"/>

<link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
<link href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css"  rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

</head>
<body>
	<div id= "container">
	<div class="wrapper">
		<form action="includes/req_authentification.php" method="post" name="Login_Form" class="form-signin">
		    <img id="image" src="images/logo.png" style="width : 80%; margin-left : 2em; />
			  <hr class="colorgraph"><br>

			  <input type="text" class="form-control" name="Username" placeholder="Username" required autofocus >
			  <input type="password" class="form-control" name="Password" placeholder="Password" required >
			  <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="login" type="Submit">Se connecter</button>
				<br>
				<a id="btn-invite" action="includes/req_GuestConnect.php" class="btn-secondary btn-lg" href="includes/req_GuestConnect.php" role="button">invité</a>
		</form>

	</div>
</div>
</body>
</html>
