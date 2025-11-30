<?php 

// recuperer les donnees depuis le form (par la methode)
$libelle=$_POST['libelle'];
$prix=$_POST['prix'];
//connexion avec la base de donnees : 
$connexion = new PDO('mysql:host=localhost;dbname=dbdi2',  "root",  "");

//preparer une requete SQL dans cette connexion

$req=$connexion->prepare("insert into produit(libelle,prix) values('$libelle',$prix)");
// executer la requete 
$req->execute();
echo "ajout du produit $libelle effectue avec succes ";



// create table produit(
// id int primary key AUTO_INCREMENT,
// libelle varchar(50),
// prix float
// )
?>