<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>passage de donnees cote serveur</title>
</head>

<body>

    <h2>envoi via form </h2>

    <form action="b.php" method="post">
        prix <input type="text" name="prix" id="">
        qte <input type="text" name="qte" id="">
        <button>envoyer</button>
    </form>
    <hr>
    <a href="c.php?lib=hp">HP</a> <br>
    <a href="c.php?lib=dell">DELL</a>
</body>

</html>