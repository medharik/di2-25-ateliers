<?php 
//recuperer les donnees envoyer depuis a.php 
//par get
$lib=$_GET['libelle'];
$prix=$_GET['prix'];
$qte=$_GET['quantite'];
$total=$prix*$qte;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>le total du produit <?php echo $lib;?>  est : <?php echo $total;?>DHS</h2>
    
</body>
</html>