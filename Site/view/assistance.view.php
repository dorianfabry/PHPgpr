<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Assistance</title>
  </head>
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

        <li class="nav-item"><a class="nav-link" href="assistance.view.php">Assistance</a></li>

        <li class="nav-item"> <a style="color:#FF4500;" class="nav-link" href="../view/admin.view.php">Administrateur</a></li>

      </ul>
    </nav>

    <main role="main" class="container">

  <div class="starter-template">
    <h1>Nous Contacter</h1>
    <p class="lead">Pour nous contacter </p>
    <div class="row">
      <div class="col-lg-4">
        <img class="img-circle" src="img_sites/tel.png" alt="telephone" style="width:50%">
        <h2>Par Telephone</h2>
        <p>+33 06 84 65 23 (France)</p>

      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="img-circle" src="img_sites/email.png" alt="email" style="width:50%">
        <h2>Par E-mail</h2>
        <p>assistance@boombox.com</p>

      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="img-circle" src="img_sites/Gps.png" alt="adresse" style="width:50%">
        <h2>Par courrier</h2>
        <p>8 rue saint-michel 38000 GRENOBLE FRANCE</p>

      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
  </div>

</main>
  </body>
</html>
