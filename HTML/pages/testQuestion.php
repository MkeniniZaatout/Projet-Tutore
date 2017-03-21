<?php
$titreQuestion = $_POST['titreQuestionnaire'];
$question = $_POST['Question'];
$reponse = array("foo", "bar", "hello", "world");
 header('Location: Admin_Recapitulatif.php?titreQuestionnaire=' . $question . '?question='. $titreQuestion . '?reponse=' . $reponse . '');
?>
