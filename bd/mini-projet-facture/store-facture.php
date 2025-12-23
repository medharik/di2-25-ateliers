<?php 
include_once("functions_facture.php");
extract($_POST);
ajouter_facture($client_id, $dateFacture,$dateEcheance,$remise,$typePaiement,$status);
header("location:index-facture.php?op=add&r=facture");
?>