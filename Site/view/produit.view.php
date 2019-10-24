<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

      <?php
<<<<<<< HEAD
=======

>>>>>>> 8ce6ff1122ac3fb231d6a865f31c44cfa4da04dc
       foreach($articlesvoulus as $exemple){
        $cover = $config['image_path'].'/'.$exemple->getPhoto();?>
        <a href="description.view.php?id=<?php echo $exemple->getReference() ?>"><img src="<?=$cover?>" alt=""></a>
       <?php    }   ?>

  </body>
</html>
