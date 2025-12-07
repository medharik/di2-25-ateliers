<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nouveau produit - upload </title>
</head>
<body>
    <form action="uploder.php" method="post" enctype="multipart/form-data">
        <input type="text" name="libelle" placeholder="Entrer un libelle">
        <input type="text" name="prix" placeholder="Entrer un prix">
        <input type="file" name="image" id="">
        <button>Ajouter le produit</button>
    </form>
    
</body>
</html>