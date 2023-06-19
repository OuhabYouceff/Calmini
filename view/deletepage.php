<?php
include '../controller/evenementC.php';
$EvenementC = new EvenementC();
$EvenementC->supprimerEvenement($_GET["num"]);
header('Location: EvenementPanel.php');
?>