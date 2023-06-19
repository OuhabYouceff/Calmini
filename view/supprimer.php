<?php
include '../controller/pharmacieC.php';
$pharmacieC = new PharmacieC();
$pharmacieC->supprimermodele($_GET["num"]);
header('Location: PharamaciePanel.php');
?>