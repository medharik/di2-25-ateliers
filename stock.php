<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stock de produits</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<?php 
$hp=['libelle'=>'hp','prix'=>5000,'qte'=>3];
$dell=['libelle'=>'dell','prix'=>6000,'qte'=>0];
$sony=['libelle'=>'sony','prix'=>8000,'qte'=>5];
$acer=['libelle'=>'acer','prix'=>4000,'qte'=>0];
$stock=[$hp,$dell,$sony,$acer];
?>
<body>
    <h1>Produits en stock</h1>
    <h2>liste des <?=count($stock)?> Produits</h2>
 
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Libelle</th>
      <th scope="col">prix</th>
      <th scope="col">qte</th>
      <th scope="col">total</th>
      <th scope="col">Etat de stock</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach($stock as $k=>$v){?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $v['libelle']?></td>
      <td><?= $v['prix']?></td>
      <td><?=$v['qte']?></td>
      <td><?=$v['qte']*$v['prix']?></td>
      <td><?php  if ($v['qte']>0) {?>
       
        <span class="badge text-bg-primary">En stock</span>
        <?php } else { ?>
            <span class="badge text-bg-danger">En Rupture de  stock</span>

   <?php }?>
            </td>
    </tr>
    <?php }?>
  
  </tbody>
</table>
    
</body>
</html>