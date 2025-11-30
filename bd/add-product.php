<?php 
include_once("functions.php");
//recuperer les donnes depuis le form (par post)

ajouter_produit($_POST['libelle'],$_POST['prix']);

header('location:liste-produits.php');


?>