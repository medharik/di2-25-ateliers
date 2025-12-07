<?php 
include_once("function.php");
//recup les data depuis le form par post
$libelle=$_POST['libelle'];
$prix=$_POST['prix'];
$chemin=uploader($_FILES['image']);
if(!empty($chemin)) ajouter_produit($libelle,$prix,$chemin);
else echo "<br>Erreur";
?>