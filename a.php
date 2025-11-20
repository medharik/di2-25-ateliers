<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>passage de donnees entre pages</title>
</head>

<body>
    <h2>Envoie par form (get ou post)</h2>
    <form action="b.php" method="get">
        Libelle : <input type="text" name="libelle" id="">
        Prix: <input type="text" name="prix" id="">
        Quantite: <input type="text" name="quantite" id="">
        <button>Envoyer</button>

    </form>

    <a href="details.php?libelle=hp">HP</a> <br>
    <a href="details.php?libelle=dell">DELL</a> <br>


</body>

</html>