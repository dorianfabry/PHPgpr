<?php
//Recuperation des fichiers necessaires pour les classes articles
require_once('../model/article.class.php');
require_once('../model/articleDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

//recupere id de la query string
  $id=$_GET['id'];
  $articles = new articleDAO($config['database_path']);
  $article = $articles->getUnArticle($id); //Recuperation de l'article correspondant à l'id

//Recuperation des fichiers necessaires pour la listes des id articles aux pdvs
  require_once('../model/articlesAUnPointDeVentes.class.php');
  require_once('../model/articlesAUnPointDeVentesDAO.class.php');

  $articlesaunpdv = new articlesAUnPointDeVentesDAO($config['database_path']);
  $alllatableinter = $articlesaunpdv->getArticlesAUnPointDeVentes(); //Recuperation de la liste des idarticles à un pdv

//Recuperation des fichiers necessaires pour les points de ventes
  require_once('../model/pointDeVentes.class.php');
  require_once('../model/pointDeVentesDAO.class.php');
  $pointsDeVentes = new pointDeVentesDAO($config['database_path']);






include('../view/description.view.php');


 ?>
