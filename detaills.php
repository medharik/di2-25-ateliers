<?php 


// isset($y);// false car y n'existe pas 
// $x=null;
// isset($x);//false;
// $z=10;
// isset($z);//true
//$s=""
// isset($s);true
$total=0;
// var_dump($_POST);
//falsy (<=> false) : 0,0.0,"",'',[],null <=> EMPTY

//recuperer les donnees recu depuis le formulaire : 
if (!empty($_POST['prix']) && !empty($_POST['qte'])) {
    
    $prix=$_POST['prix'];
    $qte=$_POST['qte'];
    $total=$prix*$qte;
}else{
    // echo "tous les champs sont obligatoires, veuillez remplir correctement le form suivant
    //      <a href=\"form.php\">Page du formulaire</a>";
    //redirection vers form.php
    header("location:form.php?rep=no");

}
// $age=20;
// echo ' On\'ail  a '.$age.' ans';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Le total est : <?=$total;?></h2>
</body>
</html>