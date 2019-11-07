<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../view/produit.view.css">
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

        <li class="nav-item"><a class="nav-link" href="../controler/produit.ctrl.php">Tous les Produits</a></li>

        <li class="nav-item"><a class="nav-link" href="assistance.view.php">Assistance</a></li>
      </ul>
    </nav>
    <fieldset>
        <button class="button button1" onclick=window.location.href='produit.ctrl.php?valeur=<?=$typeaafficher?>&element=type&tri=prixdecroissant'>Du + au - cher</button>
        <button class="button button2" onclick=window.location.href='produit.ctrl.php?valeur=<?=$typeaafficher?>&element=type&tri=prixcroissant'>Du - au + cher</button>
    </fieldset>
    <form class="" action="index.html" method="post">
      <label for="">Filtrez par point de ventes : </label>
      <select name="pdv" onChange="location.href=''+this.options[this.selectedIndex].value+'';">
           <option>PointDeVentes</option>
           <option value="produit.ctrl.php?pdvid=1&valeur=<?=$typeaafficher?>&element=type&tri=prixdecroissant">Fnac</option>
           <option value="produit.ctrl.php?pdvid=2&valeur=<?=$typeaafficher?>&element=type">LDLC</option>
           <option value="produit.ctrl.php?pdvid=3&valeur=<?=$typeaafficher?>&element=type">Materiel.net</option>
           <option value="produit.ctrl.php?pdvid=4&valeur=<?=$typeaafficher?>&element=type">Exalys</option>
           <option value="produit.ctrl.php?pdvid=5&valeur=<?=$typeaafficher?>&element=type">Orange</option>
      </select>
    </form>

    <div class="produits">
    <?php if ($articlesvoulus != NULL) {
      foreach($articlesvoulus as $exemple){ //parcours de la liste des articles à afficher
      $cover = $config['image_path'].'/'.$exemple->getPhoto();?>
      <div class="produit">
        <img src="<?=$cover?>" alt="" class="photo">
        <p><?php echo $exemple->getIntitule(); ?></p> <!-- pour chaque article on affiche l'intitule le prix la photo et un lien plus d'infos sur l'article souhaite avec sa reference ajoutée query string -->
        <p class="prix"><?php echo $exemple->getPrix(); ?> € pièce </p>
<a class="lien" href="../controler/description.ctrl.php?id=<?php echo $exemple->getReference(); ?>"><p class="lien">PLUS D'INFOS</p></a>
     </div>
   <?php } }?>
   <?php if ($articlesvoulus == NULL){ ?> <!-- Si l'on fait un tri par pointdeventes et qu'il n'y a pas de produits à afficher alors on affiche un message d'info -->
     <p>Pas d'articles disponibles pour ce revendeur</p>
   <?php } ?>
     </div>
  </body>
</html>
