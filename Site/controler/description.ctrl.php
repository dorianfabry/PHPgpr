<?php
require_once('../model/article.class.php');
require_once('../model/articleDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

//recupere id de la query string
  $id=$_GET['id'];
  $articles = new articleDAO($config['database_path']);
  $article = $articles->getUnArticle($id);

  $articlesaunpdv = new articlesAUnPointDeVentes($config['database_path']);
  $lesarticlesdetoutlespdvs = $articlesaunpdv->getArticlesAUnPointDeVentes();


include('../view/description.view.php');


 ?>
