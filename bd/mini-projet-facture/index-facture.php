<?php 
include_once("functions_facture.php");
$factures=all_facture_client();

?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>facture App</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  
</head>
  <body>

  <!-- menu -->
      <?php include_once("_menu.php");?>
<div class="container">
    
<?php include_once("_altert.php");?>
    <!-- titre -->
 <h2>Liste des factures </h2>

<!-- ou -->
    <!-- tableau -->
     <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">date facture</th>
      <th scope="col">date echeance</th>
      <th scope="col">remise</th>
      <th scope="col">type de paiemement</th>
      <th scope="col">status</th>
      <th scope="col">client</th>

      <th scope="col">actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($factures as $facture) {?>
    <tr>
      <th scope="row"><?=$facture['numero']?></th>
      <td><?=$facture['dateFacture']?></td>
      <td><?=$facture['dateEcheance']?></td>
      <td><?=$facture['remise']?></td>
      <td><?=$facture['typePaiement']?></td>
      <td><?=$facture['status']?></td>
      <td><?=$facture['nom']?> <?=$facture['prenom']?> </td>
      <td>
        <div class="btn-group" >

        <a href="delete-facture.php?id=<?=$facture['id']?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
        <a href="" class="btn btn-warning">M</a>
        <a href="" class="btn btn-info">C</a>
        </div>

      </td>

    </tr>
  <?php } ?>
   
  </tbody>
</table>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>