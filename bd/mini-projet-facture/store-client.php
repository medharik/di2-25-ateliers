<?php 
include_once("functions_client.php");
extract($_POST);
ajouter_client($nom, $prenom,$email,$adresse);
header("location:index-client.php?op=add&r=client");
?>