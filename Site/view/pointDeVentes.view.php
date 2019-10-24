<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="">
      <?php for($i = 0 ; $i <5;$i++){ ?>
             <p><?=$res[$i]->getIntitule();?></p>
      <?php } ?>
    </div>
  </body>
</html>
