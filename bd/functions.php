<?php

//connexion bd
function connecter_db()
{
    //GESTION DES ERREURS (EXCEPTIONS)
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=phpdb', "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    } catch (PDOException $error) {
        echo "Erreur de connexion a la base de donnees " . $error->getMessage();
    }

    return $dbh;

}
// }PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
// 3 ENVIRONNEMENTS : DEVELOPPEMENT => TEST => PRODUCTION 

//ajouter
function ajouter_produit($libelle, $prix)
{ 
    try {
        $dbh = connecter_db();
        $r = $dbh->prepare( "insert  into produit(libellee,prix) values(?,?)");
        $r->execute([$libelle, $prix]);
    } catch (\Throwable $th) {
        echo "Erreur d'ajout du produit $libelle , Erreur : " . $th->getMessage();
        if ($th->getCode()=='42S22') {
            echo "une colonne n;est pas correct"
        }
    }
    

}

//supprimer 

function supprimer_produit($id)
{
    try {
        $dbh = connecter_db();
        $r = $dbh->prepare("delete from produit where id=?");
        $r->execute([$id]);
    } catch (\Throwable $e) {
       echo  "Erreur de suppression du produit , Details de l'erreur : ".$e->getMessage();
    }
}

//selectioner tous les produits (select)
function all()
{
   try {
     $dbh = connecter_db();
    $r = $dbh->prepare("select * from produit");
    $r->execute();
    $data = $r->fetchAll();
    return $data;
   } catch (\Throwable $th) {
   echo "Erreur de selection des produits , Error : ".$th->getMessage();
   }
}







?>