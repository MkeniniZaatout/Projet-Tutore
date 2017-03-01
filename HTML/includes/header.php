<meta charset="UTF-8">
<?php
session_start();
$user_type = $_SESSION['type'];
if ($user_type != "Guest")
$Admin = $_SESSION['admin'];
 ?>
<link rel="stylesheet" type="text/css" href="../css/header.css"/>
<link href="../bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
<link href="../bootstrap-3.3.7-dist/css/bootstrap-theme.min.css"  rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

<!-- Pour bootstrap toggle dans Ajouter_Questionnaire -->
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">

<?php if ($user_type == "user") {  ?>

  <nav class="navbar navbar-default">

    <div id="navbar"class="container-fluid">
      <div class="navbar-header">

        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
        </button>
        <a id="logo" class="navbar-brand" href="../pages/main.php" >
<img id="image" src="../images/logopetit.png" />
</a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li>
              <a href="compte.php">Compte
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
              </a>
          </li>
          <li>
              <a href="../pages/resultat.php">Resultat
               <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
             </a>
          </li>
          <li>
            <?php if ($Admin) {?>
              <a href="Admin_Accueil_Questionnaire.php">Questionnaire
            <?php } else {?>
                 <a href="../pages/User_Questionnaire.php">Questionnaire
            <?php } ?>
                <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span></a>
          </li>
          <li>
              <a href="#">Information
               <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
             </a>
          </li>
        </ul>
        <form id="signin" class="navbar-form navbar-right" role="form" action="../includes/req_deconnexion.php">
               <button type="submit" class="btn btn-default"  action="../includes/req_deconnexion.php">
               Déconnexion <span class="glyphicon glyphicon-off" aria-hidden="true"></span>

             </button>
         </form>
      </div>

    </div>

  </nav>

<?php } ?>
