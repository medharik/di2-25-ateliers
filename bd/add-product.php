<?php 
include_once("function.php");
ajouter_produit($_POST['libelle'], $_POST['prix']);
header("location:liste-produits.php");

?>