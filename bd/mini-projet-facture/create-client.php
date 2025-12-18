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
 <h2 class="text-center text-primary">Nouveau client</h2>
 
   <!-- form -->
<div class="row">
    <div class="col-md-6 mx-auto shadow">
            <form action="store-client.php" method="post">
  <div class="mb-3">
    <label for="nom" class="form-label">Nom : </label>
    <input type="text" name="nom" class="form-control" id="nom">
  </div>
  <div class="mb-3">
    <label for="prenom" class="form-label">Prenom : </label>
    <input type="text" name="prenom" class="form-control" id="prenom">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email : </label>
    <input type="email" name="email" class="form-control" id="email">
  </div>
  <div class="mb-3">
    <label for="adresse" class="form-label">Adresse : </label>
    <textarea type="text" name="adresse" class="form-control" id="adresse">
        </textarea>

  </div>
  
  
  <button type="submit" class="btn btn-primary">Ajouter ce nouveau client</button>
</form>
    </div>
</div>
<!-- ou -->

 
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>