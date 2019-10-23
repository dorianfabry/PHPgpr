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
             <?php echo "$config['image_path'] .$article->photo";  ?>
             <img src="<?php  $config['image_path'] .$article->photo ?>" alt="">
           </div>




       <?php    }   ?>

  </body>
</html>
