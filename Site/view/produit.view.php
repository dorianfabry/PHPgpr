<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php include '../controler/produit.ctrl.php' ?>


      <?php

      foreach ($article as $produit) {
           ?>
           <div class="container-fluid">
             <img src="<?php  $config['image_path'] .$produit->photo ?>" alt="">
           </div>




       <?    }   ?>

  </body>
</html>
