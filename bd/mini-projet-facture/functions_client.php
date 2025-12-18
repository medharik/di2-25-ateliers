<?php 

include_once("function-utiles.php");
//ajouter_client : role : ajouter un client dans la table client en lui donnant un nom et un prenom
function ajouter_client($nom, $prenom,$email,$adresse)
{

    try {
        //connexion bd

        $cnx = connecter_db();

        // ds cette connexion , on prepare une requete sql
        $r = $cnx->prepare("insert into client(nom,prenom,email,adresse) values(?,?,?,?)");

        // on execute cette requete
        $r->execute([$nom, $prenom,$email,$adresse]);
    } catch (\Throwable $th) {
        echo "erreur d'ajout du client " . $th->getMessage();
    }


}





//supprimer_client

function supprimer_client($id)
{

    try {
        //connexion bd

        $cnx = connecter_db();

        // ds cette connexion , on prepare une requete sql
        $r = $cnx->prepare("DELETE FROM client WHERE id=? ");

        // on execute cette requete
        $r->execute([$id]);
    } catch (\Throwable $th) {
        echo "erreur  de suppression client " . $th->getMessage();
    }


}
//modifier_client
// modifier_client('dell',8000,2);
function modifier_client($nom, $prenom,$email,$adresse, $id)
{

    try {
        //connexion bd

        $cnx = connecter_db();

        // ds cette connexion , on prepare une requete sql
        $r = $cnx->prepare("UPDATE clients
SET nom = ?, prenom = ? , email=? , adresse=?
WHERE id = ?;");

        // on execute cette requete
        $r->execute([$nom, $prenom,$email,$adresse, $id]);
    } catch (\Throwable $th) {
        echo "erreur de MAJ du client " . $th->getMessage();
    }


}

function all_clients()
{

    try {
        //connexion bd

        $cnx = connecter_db();

        // ds cette connexion , on prepare une requete sql
        $r = $cnx->prepare("select * from client order by id desc ");
        $r->execute();
        $clients = $r->fetchAll();
        return $clients;
        // on execute cette requete
    } catch (\Throwable $th) {
        echo "erreur  de selection des clients  " . $th->getMessage();
    }


}
// $p=all_products();
// find_by_id : rechercher un client dans la bd par son id
function find_by_id($id)
{

    try {
        //connexion bd

        $cnx = connecter_db();

        // ds cette connexion , on prepare une requete sql
        $r = $cnx->prepare("select * from client where id=?");
        $r->execute([$id]);
        $client = $r->fetch();
        return $client;
        // on execute cette requete
    } catch (\Throwable $th) {
        echo "erreur  de selection client " . $th->getMessage();
    }


}