<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>facture App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>

  <!-- menu -->
      <?php include_once("_menu.php");?>
<div class="container">
    
    <!-- <div class="alert alert-primary" role="alert">
        A simple primary alert—check it out!
    </div> -->
    <!-- titre -->
 <h2 class="text-center text-primary">Nouvelle Facture</h2>
 
   <!-- form -->
<div class="row">
    <div class="col-md-6 mx-auto shadow">
            <form action="store-facture.php" method="post">
  <div class="mb-3">
    <label for="dateFacture" class="form-label">Date de Facture : </label>
    <input type="date" name="dateFacture" class="form-control" id="date">
  </div>
  <div class="mb-3">
    <label for="dateEcheance" class="form-label">Date d'echeance : </label>
    <input type="date" name="dateEcheance" class="form-control" id="dateEcheance">
  </div>
  <div class="mb-3">
    <label for="remise" class="form-label">Remise : </label>
    <input value="0" type="number" step="0.01" name="remise" class="form-control" id="remise">
  </div>
  <div class="mb-3">
    <label for="">Type de paiement : </label>
   <div class="form-check form-switch">
  <input value="cheque" class="form-check-input" type="radio" name="typePaiement" role="switch" id="cheque">
  <label class="form-check-label" for="cheque">Cheque</label>
</div>
   <div class="form-check form-switch">
  <input value="versement" class="form-check-input" type="radio" name="typePaiement" role="switch" id="versement">
  <label class="form-check-label" for="versement">Versement bancaire</label>
</div>
   <div class="form-check form-switch">
  <input value="espece" class="form-check-input" type="radio" name="typePaiement" role="switch" id="espece">
  <label class="form-check-label" for="espece">Espece</label>
</div>
  
  </div>
  <div class="mb-3">
    <label for="">Status : </label>
   <div class="form-check form-switch">
  <input value="paye" class="form-check-input" type="radio" name="status" role="switch" id="paye">
  <label class="form-check-label" for="paye">Paye</label>
</div>
   <div class="form-check form-switch">
  <input checked value="impaye" class="form-check-input" type="radio" name="status" role="switch" id="impaye">
  <label class="form-check-label" for="impaye">Impaye</label>
</div>

  
  </div>
  <div class="mb-3">
    <?php
    include_once("functions_client.php");
$clients=    all_clients();
    ?>
    <label for="client_id" class="form-label">Client : </label>
  <select name="client_id" id="client_id">
<?php foreach ($clients as $client) {?>
    <option value="<?=$client['id']?>"><?=$client['nom'] ?> <?=$client['prenom'] ?></option>
<?php } ?>
  </select>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Ajouter la facture</button>
</form>
    </div>
</div>
<!-- ou -->

 
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>