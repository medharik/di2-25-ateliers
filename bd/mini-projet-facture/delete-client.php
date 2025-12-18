<?php 
include_once("functions_client.php");

supprimer_client($_GET['id']);
header("location:index-client.php?op=del&r=client");
?>