<?php 

include_once("function-utiles.php");
//ajouter_facture : role : ajouter un facture dans la table facture en lui donnant un client_id et un dateFacture
function ajouter_facture($client_id, $dateFacture,$dateEcheance,$remise,$typePaiement,$status)
{

    try {
        //connexion bd

        $cnx = connecter_db();

        // ds cette connexion , on prepare une requete sql
        $r = $cnx->prepare("insert into facture(client_id,dateFacture,dateEcheance,remise,typePaiement,status) values(?,?,?,?,?,?)");

        // on execute cette requete
        $r->execute([$client_id, $dateFacture,$dateEcheance,$remise,$typePaiement,$status]);
    } catch (\Throwable $th) {
        echo "erreur d'ajout du facture " . $th->getMessage();
    }


}





//supprimer_facture

function supprimer_facture($numero)
{

    try {
        //connexion bd

        $cnx = connecter_db();

        // ds cette connexion , on prepare une requete sql
        $r = $cnx->prepare("DELETE FROM facture WHERE numero=? ");

        // on execute cette requete
        $r->execute([$numero]);
    } catch (\Throwable $th) {
        echo "erreur  de suppression facture " . $th->getMessage();
    }


}
//modifier_facture
// modifier_facture('dell',8000,2);
function modifier_facture($client_id, $dateFacture,$dateEcheance,$remise, $typePaiement,$status,$numero)
{

    try {
        //connexion bd

        $cnx = connecter_db();

        // ds cette connexion , on prepare une requete sql
        $r = $cnx->prepare("UPDATE factures
SET client_id = ?, dateFacture = ? , dateEcheance=? , remise=?, typePaiement=?,status=?
WHERE numero = ?;");

        // on execute cette requete
        $r->execute([$client_id, $dateFacture,$dateEcheance,$remise,$typePaiement,$status, $numero]);
    } catch (\Throwable $th) {
        echo "erreur de MAJ du facture " . $th->getMessage();
    }


}

function all_factures()
{

    try {
        //connexion bd

        $cnx = connecter_db();

        // ds cette connexion , on prepare une requete sql
        $r = $cnx->prepare("select * from facture order by numero desc ");
        $r->execute();
        $factures = $r->fetchAll();
        return $factures;
        // on execute cette requete
    } catch (\Throwable $th) {
        echo "erreur  de selection des factures  " . $th->getMessage();
    }


}
// $p=all_products();
// find_by_id : rechercher un facture dans la bd par son numero
function find_by_id($numero)
{

    try {
        //connexion bd

        $cnx = connecter_db();

        // ds cette connexion , on prepare une requete sql
        $r = $cnx->prepare("select * from facture where numero=?");
        $r->execute([$numero]);
        $facture = $r->fetch();
        return $facture;
        // on execute cette requete
    } catch (\Throwable $th) {
        echo "erreur  de selection facture " . $th->getMessage();
    }


}