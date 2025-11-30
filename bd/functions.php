<?php 

//connexion bd
function connecter_db()  {
    $dbh = new PDO('mysql:host=localhost;dbname=phpdb', "root", "",[ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
return $dbh;
}

//ajouter
function ajouter_produit($libelle,$prix)  {
$dbh=    connecter_db();
$r=$dbh->prepare("insert into produit(libelle,prix) values(?,?)");
$r->execute([$libelle,$prix]);
}

//supprimer 

function supprimer_produit($id)  {
$dbh=    connecter_db();
$r=$dbh->prepare("delete from produit where id=?");
$r->execute([$id]);
}

//selectioner tous les produits (select)
function all()  {
$dbh=    connecter_db();
$r=$dbh->prepare("select * from produit");
$r->execute();
$data=$r->fetchAll();
return $data;
}







?>