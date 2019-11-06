<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../view/description.view.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>BoomBox</title>
</head>
  <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <a class="navbar-brand" href="../view/main.view.php">BoomBox</a>
      <ul class="navbar-nav">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarCasque" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Casque
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarCasque">
            <a class="dropdown-item" href="../controler/produit.ctrl.php?valeur=ecouteursf&element=type">Ecouteurs sans fil</a>
            <a class="dropdown-item" href="../controler/produit.ctrl.php?valeur=casque&element=type">Circum-auriculaires</a>
            <a class="dropdown-item" href="../controler/produit.ctrl.php?valeur=casque&element=type">Anti-Bruit</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarEnceintes" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Enceintes
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarEnceintes">
            <a class="dropdown-item" href="../controler/produit.ctrl.php?valeur=partybox&element=type">PartyBox</a>
            <a class="dropdown-item" href="../controler/produit.ctrl.php?valeur=barredeson&element=type">Barres de son</a>
            <a class="dropdown-item" href="../controler/produit.ctrl.php?valeur=enceinteportable&element=type">Enceintes Portables</a>
        </li>

        <li class="nav-item"><a class="nav-link" href="../controler/produit.ctrl.php">Tous les Produits</a></li>

        <li class="nav-item"><a class="nav-link" href="#">Histoires</a></li>

        <li class="nav-item"><a class="nav-link" href="#">Assistance</a></li>
      </ul>
    </nav>
           <?php $cover = $config['image_path'].'/'.$article->getPhoto();?><!--Url de la photo de l'article -->

           <h1><a class="flecheretour" href="javascript:window.history.go(-1)">  <img src="../view/img_sites/flecheRetour.png" alt="retour" width='50' heigth='50'> </a> <?=$article->getIntitule()?> </h1>
           <div class="all">


           <div class="gauche" height="80%"><!-- div gauche : affichage de l'image -->
             <img src="<?=$cover?>" alt="" width="350" height="350">
           </div>

           <div class="droite"> <!-- div droite : description prix et pdvs de l'article -->
             <p><?=$article->getDescription()?></p>
             <p><?=$article->getPrix()?> € pièce</p>
             <h3>Les points de ventes</h3>
             <p>Choisissez votre revendeur :</p>
             <div class="pdv">
               <?php
               $idarticle = $article->getReference(); //recupere id de l'article
               foreach($alllatableinter as $articlesaunpdvobj){
                 if (in_array("$idarticle", $articlesaunpdv->getLesIdArticles($articlesaunpdvobj->getIdPointDeVentes()))) {
                   $pdvact = $pointsDeVentes->getLepdv($articlesaunpdvobj->getIdPointDeVentes());
                   $logo = $pdvact->getLogo();?><!--Une boucle pour afficher les logos des pdvs de l'article  -->
                  <a class="lepdv" href="<?=$pdvact->getUrl();?>"> <img src="../view/img_sites/PointDeVentes/<?=$logo?>" alt="" width="100" height="100"> </a>
                <?php }
              }?>
             </div>
           </div>
         </div>




  </body>
</html>
