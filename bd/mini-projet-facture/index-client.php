<?php 
include_once("functions_client.php");
$clients=all_clients();

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
 <h2>Liste des clients </h2>

<!-- ou -->
    <!-- tableau -->
     <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">email</th>
      <th scope="col">adresse</th>
      <th scope="col">actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($clients as $client) {?>
    <tr>
      <th scope="row"><?=$client['id']?></th>
      <td><?=$client['nom']?></td>
      <td><?=$client['prenom']?></td>
      <td><?=$client['email']?></td>
      <td><?=$client['adresse']?></td>
      <td>
        <div class="btn-group" >

        <a href="delete-client.php?id=<?=$client['id']?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
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