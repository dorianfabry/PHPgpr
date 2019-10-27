<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

        <li class="nav-item"><a class="nav-link" href="#">Histoires</a></li>

        <li class="nav-item"><a class="nav-link" href="#">Assistance</a></li>
      </ul>
    </nav>
    <div class="produits">
    <?php
     foreach($articlesvoulus as $exemple){
      $cover = $config['image_path'].'/'.$exemple->getPhoto();?>
      <div class="produit">
        <img src="<?=$cover?>" alt="">
        <p><?php echo $exemple->getIntitule() ?></p>
        <p class="prix"><?php echo $exemple->getPrix() ?> € pièce </p>
        <a class="liendescription" href="../controler/description.ctrl.php?id=<?php echo $exemple->getReference() ?>">PLUS D'INFOS</a>
     </div>
     <?php    }   ?>
     </div>
  </body>
</html>
