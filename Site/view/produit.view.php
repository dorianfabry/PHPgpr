<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
     foreach($articlesvoulus as $exemple){
      $cover = $config['image_path'].'/'.$exemple->getPhoto();?>
      <a href="description.ctrl.php?id=<?php echo $exemple->getReference() ?>"><img src="<?=$cover?>" alt=""></a>
     <?php    }   ?>
  </body>
</html>
