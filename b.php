<?php 
//recuperer les donnees envoyes par a.php a cette page b.php
$p=$_POST['prix'];
$q=$_POST['qte'];
$total=$p*$q;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Le prix : <?php echo $p;?></h3>
    <h3>La quantite : <?php echo $q;?></h3>
    <h4>Le total : <?php echo $total;?>DHS</h4>
</body>
</html>