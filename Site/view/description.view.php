<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
           <?php
             $cover = $config['image_path'].'/'.$article->getPhoto();?>
             <h1><?=$article->getIntitule()?>  </h1>
             <img src="<?=$cover?>" alt="">
             <p><?=$article->getDescription()?></p>
             <p><?=$article->getPrix()?></p>
             <a href="description.view.php?id=<?php echo $article->getReference() ?>"><img src="<?=$cover?>" alt=""></a>
            <?php    }   ?>
  </body>
</html>
