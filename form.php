<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire </title>
</head>
<body>
    <h2>envoi par la methode GET</h2>
    <?php      if (isset($_GET['rep']) && $_GET['rep']=='no') {?>
    <h2 style="color: red;">tous les champs sont obligatoires</h2>
    
    
    <?php } ?>
    
    
    <form action="detaills.php" method="post">

    Prix : <input required type="number" name="prix" step="0.01" min="0" id="" autocomplete="off">
    Quantite : <input type="number" name="qte" id="" min="0">
    <button>valider</button>
    </form>
</body>
</html>