<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des produits</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body >
    <?php 
    include_once("function.php");
   $produits= all_products();
    
    ?>
        <table class="table">
  <thead>

    <tr>
      <th scope="col">#</th>
      <th scope="col">libelle</th>
      <th scope="col">prix</th>
      <th scope="col">image</th>
      <th scope="col">actions</th>
    </tr>
    
</thead>
<tbody>
    <h2>liste de(s) <?=count($produits)?> produit(s) en stock</h2>
    <div>
        <a href="new-product.php" class="btn btn-primary">Nouveau produit</a>
    </div>
    <?php foreach($produits as $produit) {?>
    <tr>
        <th scope="row"><?=$produit['id']?></th>
        <td><?=$produit['libelle']?></td>
        <td><?=$produit['prix']?></td>

        <td>
        <?php 
        if(!empty($produit['chemin'])){
        ?>
          <img width="150" src="<?=$produit['chemin']?>" alt="<?=$produit['libelle']?>">
        <?php } else { ?>

<h6>Le produit <?=$produit['libelle']?> n'a pas d'image</h6>
          <?php }?></td>
        
        </td>
        <td><a onclick="return confirm('supprimer?');" href="test-delete.php?id=<?=$produit['id']?>" class="btn btn-danger">-</a></td>
    </tr>
    
    <?php } ?>
  </tbody>
</table>

</body>
</html>