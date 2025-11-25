<?php 

function is_valid($x) {
    if (isset($x)  && is_numeric($x) ) {
        return true;
    }else return false;
}

if (is_valid($_GET['prix']) && is_valid($_GET['qte'])) {
    $total=$_GET['prix']*$_GET['qte'];
    echo "total est $total DHS";
} else {
    echo "Erreur : les deux valeurs sont obligatoires et doivent etre numerique ";
}



// if (kayne($_GET['prix']) && kayn($_GET['qte'])  ) {
//     if(is_numeric($_GET['prix']) && is_numeric($_GET['qte'])){
//         $total=$_GET['prix']*$_GET['qte'];
//      echo "<h3>le total est $total DHS</h3>";

//     }else{
//         echo "Erreur : ce n'est pas un nombre";
//     }
// }else{
//     echo "tous les champs sont obligatoires";
// }

?>
