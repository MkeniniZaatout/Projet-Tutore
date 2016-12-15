<head>
<link rel="stylesheet" type="text/css" href="../css/compte.css"/>
<?php include("../includes/header.php");?>


</head>

<body>

<div id="conteneur">
    <div id="test" class="jumbotron">

    <?php

          echo $_SESSION['nom'];
          echo $_SESSION['prenom'];
          echo $_SESSION['pseudo'];
          echo $_SESSION['email'];
      ?>

    </div>
  <div id="test" class="jumbotron">

  <form id="form" data-toggle="validator"  action="../includes/informations.php" role="form"  method="post">
      <h2 id="titre"> Modifier informations</h2>
    <div class="form-group">
      <label for="inputPseudo" class="control-label">Pseudo</label>
      <input type="text" class="form-control" id="inputPseudo" placeholder="Pseudo" name="Pseudo">
    </div>
    <div class="form-group">
      <label for="inputEmail" class="control-label">Email</label>
      <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Email invalide" name ="Email">
      <div class="help-block with-errors"></div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="control-label">Changer le mot-de-passe</label>
      <div class="form-inline row">
        <div class="form-group col-sm-6">
          <input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" name="Password">
          <div class="help-block">Minimum of 6 characters</div>
        </div>
        <div class="form-group col-sm-6">
          <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="les mots de passe ne correspondent pas" placeholder="Confirmation">
          <div class="help-block with-errors"></div>
        </div>
      </div>
    </div>

    <div class="form-group">
      <button type="submit" action="../includes/informations.php" class="btn btn-primary">valider</button>
    </div>
  </form>

</div>
	</div>
</body>
