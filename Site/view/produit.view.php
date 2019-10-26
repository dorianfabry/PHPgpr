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
    <?php
     foreach($articlesvoulus as $exemple){
      $cover = $config['image_path'].'/'.$exemple->getPhoto();?>
      <a href="../controler/description.ctrl.php?id=<?php echo $exemple->getReference() ?>"><img src="<?=$cover?>" alt=""></a>
     <?php    }   ?>
  </body>
</html>
