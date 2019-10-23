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
             <img src="<?php  '../view/img_sites/Produit/'.$article[5] ?>" alt="">
           </div>




       <?php    }   ?>

  </body>
</html>
