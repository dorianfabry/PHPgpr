<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php include '../controler/produit.ctrl.php' ?>


      <?php
      foreach ($produits as $article) {
           ?>
           <div class="container-fluid">
             <img src="<?=$cover?>" width="200" height="200" alt="produit">
           </div>




       <?php    }   ?>

  </body>
</html>
