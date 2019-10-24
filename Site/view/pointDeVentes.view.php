<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="">
      <?php for($i = 0 ; $i <5;$i++){
        $cover = $config['image_path'].'/../PointDeVentes/'.$allpdv[$i]->getLogo();?>
             <p> <img src="<?=$cover?>" alt="<?=$allpdv[$i]->getLogo()?>" width="100" height="100"> </p>
      <?php } ?>
    </div>
  </body>
</html>
