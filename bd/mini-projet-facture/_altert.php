<?php if(isset($_GET['op']) && $_GET['op']=='add' && isset($_GET['r'])) { ?>
    <div class="alert alert-primary" role="alert">
      <?=$_GET['r']?> ajoute avec succes
    </div>
    <?php }?>
<?php if(isset($_GET['op']) && $_GET['op']=='del' && isset($_GET['r'])) { ?>
    <div class="alert alert-danger" role="alert">
      <?=$_GET['r']?> supprime avec succes
    </div>
    <?php }?>