<meta charset="UTF-8">
<?php
session_start();
$user_type = $_SESSION['type'];
 ?>
<link rel="stylesheet" type="text/css" href="../css/header.css"/>
<link href="../bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
<link href="../bootstrap-3.3.7-dist/css/bootstrap-theme.min.css"  rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>



<div id="sidebar-wrapper">
   <ul class="sidebar-nav">
       <li class="sidebar-brand">
         <?php if ($user_type == "user") { ?>
           <a href="../pages/main.php">
                <?php }else{ ?><a href="../pages/guest.php"> <?php } ?>
               QUIZZ
           </a>
       </li>
     <?php if ($user_type == "user") { ?>
       <li>
           <a href="compte.php">Compte</a>
       </li>
     <?php } ?>
       <li>
           <a href="#">Resultat</a>
       </li>
       <li>
           <a href="#">Questionnaire</a>
       </li>
       <li>
           <a href="#">Information</a>
       </li>

   </ul>
   <a id="deconnexion" href="../includes/deconnexion.php">déconnexion</a>
</div>
