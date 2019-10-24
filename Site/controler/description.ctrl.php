<?php
require_once('../model/article.class.php');
require_once('../model/articleDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

  $articlesvoulus =$articles->getArticles();
  $if=$_GET['id'];
  $elem = $_GET['element'];
  $articlesvoulus = $articles->get($value,$elem);
}else{
    $articlesvoulus =$articles->getArticles();
}

// Récupération de l'objet article correspondant à l'id
//$id=1;
//$res = $articles->getArticle($id); // Creation d'objet avec FETCH_CLASS


// Sans Framework
//$cover = $config['image_path'].'/'.$res->getPhoto();
include('../view/produit.view.php');


 ?>
