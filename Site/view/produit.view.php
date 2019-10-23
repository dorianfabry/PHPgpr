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
             <?php  echo "$article->photo";?>
             <img src="../view/img_sites/Produit/<?php$article->photo ?>" alt="">
           </div>




       <?php    }   ?>

  </body>
</html>
