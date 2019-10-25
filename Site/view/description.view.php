<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
           <?php $cover = $config['image_path'].'/'.$article->getPhoto();?>
            <a href="../controler/produit.ctrl.php"> <img src="img_sites/flecheRetour.png" alt="retour" width='50' heigth='50'> </a>
             <h1><?=$article->getIntitule()?></h1>
             <img src="<?=$cover?>" alt="">
             <p><?=$article->getDescription()?></p>
             <p><?=$article->getPrix()?> €</p>
             <h2>Les points de ventes</h2>
             <div class="pdv">
               <?php
               $idarticle = $article->getReference(); //recupere id de l'article
               foreach($alllatableinter as $articlesaunpdvobj){
                 if (in_array("$idarticle", $articlesaunpdv->getLesIdArticles($articlesaunpdvobj->getIdPointDeVentes()))) {
                   $pdvact = $pointsDeVentes->getLepdv($articlesaunpdvobj->getIdPointDeVentes());
                   $logo = $pdvact->getLogo();?>
                   <img src="<?=$logo?>" alt="">
                <?php }
               }
               ?>

             </div>


  </body>
</html>
