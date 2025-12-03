<?php
//objectif est de faire le crud (CREATE , READ,UPDATE, DELETE)à d'une ressource produit(id,libelle,prix), en utilisant les fonctions

//connecter_db : role : connection a la bd

function connecter_db()
{

    $host = 'localhost'; // Or your database host
    $dbname = 'phpdb';
    $username = 'root';
    $password = '';

    try {

        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
        $pdo = new PDO($dsn, $username, $password);

        // Set PDO to throw exceptions on errors, which is recommended for error handling
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
        // echo "Connected to $dbname successfully!";
    } catch (PDOException $e) {
        // Handle connection errors
        echo "Connection failed: " . $e->getMessage();
        // You might want to log the error instead of displaying it directly in a production environment
    }
}

//ajouter_produit : role : ajouter un produit dans la table produit en lui donnant un libelle et un prix
function ajouter_produit($libelle, $prix)
{

    try {
        //connexion bd

        $cnx = connecter_db();

        // ds cette connexion , on prepare une requete sql
        $r = $cnx->prepare("insert into produit(libelle,prix) values(?,?)");

        // on execute cette requete
        $r->execute([$libelle, $prix]);
    } catch (\Throwable $th) {
        echo "erreur d'ajout du produit " . $th->getMessage();
    }


}





//supprimer_produit

function supprimer_produit($id)
{

    try {
        //connexion bd

        $cnx = connecter_db();

        // ds cette connexion , on prepare une requete sql
        $r = $cnx->prepare("DELETE FROM produit WHERE id=? ");

        // on execute cette requete
        $r->execute([$id]);
    } catch (\Throwable $th) {
        echo "erreur  de suppression produit " . $th->getMessage();
    }


}
//modifier_produit
// modifier_produit('dell',8000,2);
function modifier_produit($libelle, $prix, $id)
{

    try {
        //connexion bd

        $cnx = connecter_db();

        // ds cette connexion , on prepare une requete sql
        $r = $cnx->prepare("UPDATE produits
SET libelle = ?, prix = ?
WHERE id = ?;");

        // on execute cette requete
        $r->execute([$libelle, $prix, $id]);
    } catch (\Throwable $th) {
        echo "erreur de MAJ du produit " . $th->getMessage();
    }


}
//all_produit : role : recuperer tous les produits (lignes ) depuis la table produit
function all_products()
{

    try {
        //connexion bd

        $cnx = connecter_db();

        // ds cette connexion , on prepare une requete sql
        $r = $cnx->prepare("select * from produit ");
        $r->execute();
        $produits = $r->fetchAll();
        return $produits;
        // on execute cette requete
    } catch (\Throwable $th) {
        echo "erreur  de selection produit " . $th->getMessage();
    }


}
// $p=all_products();
// find_by_id : rechercher un produit dans la bd par son id
function find_by_id($id)
{

    try {
        //connexion bd

        $cnx = connecter_db();

        // ds cette connexion , on prepare une requete sql
        $r = $cnx->prepare("select * from produit where id=?");
        $r->execute([$id]);
        $produit = $r->fetch();
        return $produit;
        // on execute cette requete
    } catch (\Throwable $th) {
        echo "erreur  de selection produit " . $th->getMessage();
    }


}
