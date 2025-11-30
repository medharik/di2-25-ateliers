<?php 
// connexion avec la bd dans mysql
$cnx = new PDO('mysql:host=localhost;dbname=dbstock', "root", "");
//preparer une requete SQL dans cette connexion cnx
$req=$cnx->prepare("insert into produit(libelle,prix) values(?,?)");
//executer la requete dans cette connexion
$libelle=$_GET['libelle'];
$prix=$_GET['prix'];
$req->execute([$libelle,$prix]);
echo "produit $libelle est ajoute avec succes";
?>