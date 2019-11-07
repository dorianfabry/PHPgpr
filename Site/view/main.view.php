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
<style media="screen">
  footer{
    position: fixed;
    bottom: 0px ;
    width : 100%;

  }
</style>
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">BoomBox</a>
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

      <li class="nav-item"> <a style="color:#FF4500;" class="nav-link" href="../view/connexion.view.php">Administrateur</a></li>

    </ul>
  </nav>
  <section id="main">
    <div class="carousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselIndicators" data-slide-to="1"></li>
        <li data-target="#carouselIndicators" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img_sites/illustration/HP_banner_JBL-Pulse-4-Stairs_desktop2.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img_sites/illustration/SC02886_JBL_Flip5_Web_Banners_2880x1080.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img_sites/illustration/SC02673_JBL_Partybox_Banner_2880x1080px.jpg" alt="Third slide">
    </div>
  </div>
    </div>
  </section>

  <footer>
    <nav nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="#">Nous Contacter</a></li>
        <li class="nav-item"><a class="nav-link" href="#">F.A.Q</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Mention légales</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Conditions d'utilisation</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Qui sommes nous?</a></li>
      </ul>
    </nav>
  </footer>


</body>
</html>
