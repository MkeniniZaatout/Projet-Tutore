<head>
<link rel="stylesheet" type="text/css" href="../css/compte.css"/>

  <script type="text/javascript" src="../js/compte.js"></script>


<?php include("../includes/header.php");?>

</head>

<body>

<div id="conteneur" class="jumbotron">

      <div id=info>
      <h2>Informations du compte</h2>
      <p> NOM : <?php  echo $_SESSION['nom'];  ?> </p>
      <p> PRENOM : <?php  echo $_SESSION['prenom'];  ?> </p>
      <p> PSEUDO : <?php  echo $_SESSION['pseudo'];  ?> </p>
      <p> EMAIL : <?php  echo $_SESSION['email'];  ?> </p>
    </div>
    </div>
<div id="conteneur" class="jumbotron">

  <form id="form" data-toggle="validator"  action="../includes/req_informations.php" role="form"  method="post">
      <h2> Modifier informations</h2>
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
      <button type="submit" action="../includes/req_informations.php" class="btn btn-primary">valider</button>
    </div>
  </form>



	</div>
</body>
