<?php
require_once('../model/article.class.php');
require_once('../model/articleDAO.class.php');
require_once('../model/articlesAUnPointDeVentes.class.php');
require_once('../model/articlesAUnPointDeVentesDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

// Creation de l'instance DAO
$articlesvoulus = NULL;

$articles = new articleDAO($config['database_path']);
if (isset($_GET['valeur'])&&isset($_GET['element'])){
  $value=$_GET['valeur'];
  $elem = $_GET['element'];
  if (isset($_GET['tri'])) {
    $tri = $_GET['tri'];
    $articlesvoulus =$articles->get($value,$elem,$tri);//tri = prixdecroissant
    }else{
    $articlesvoulus = $articles->get($value,$elem,'0');//value = casque et elem = type;
  }}else{
    $articlesvoulus =$articles->getArticles();
}



// Le bon type a afficher en fonction de la categorie(casque ..) Actuelle.
$typeaafficher = NULL;
if (isset($_GET['valeur'])){
  $val = $_GET['valeur'];
  if ($val != ''){
$typeaafficher = $articlesvoulus[1]->getType();
  }
}

//Filtrage par point de ventes
$articlesaunpdv = new articlesAUnPointDeVentesDAO($config['database_path']);
if (isset($_GET['pdvid'])){
  $pdvid = $_GET['pdvid'];
  $articlesvoulus = NULL;//reinit la valeur
  $articlesid = $articlesaunpdv->getLesIdArticles($pdvid);//recupere la listes des idarticles du pdv
  if (isset($_GET['valeur'])) {
    $valeur=$_GET['valeur'];
    if ($valeur != ''){
      $i=0;
    foreach ($articlesid as $idarticle) {
      if ($articles->getUnArticleType($idarticle,$valeur) != NULL){
        $articlesvoulus[$i] = $articles->getUnArticleType($idarticle,$valeur);//remplis les articles
        $i++;
      }
    }
  }else{
    $i=0;
    foreach ($articlesid as $idarticle) {
        $articlesvoulus[$i] = $articles->getUnArticle($idarticle);//remplis les articles
        $i++;
      }
    }
  }
}



//view
include('../view/produit.view.php');


 ?>
