<?php
//Recuperation des fichiers necessaires
require_once('../model/article.class.php');
require_once('../model/articleDAO.class.php');
require_once('../model/articlesAUnPointDeVentes.class.php');
require_once('../model/articlesAUnPointDeVentesDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

$articlesvoulus = NULL; // on initialise a null les articles que l'on souhaite afficher

// Creation de l'instance DAO
$articles = new articleDAO($config['database_path']);

if (isset($_GET['valeur'])&&isset($_GET['element'])){ //Si valeur et element dans la query string
  $value=$_GET['valeur'];
  $elem = $_GET['element'];
  if (isset($_GET['tri'])) { //et si tri est defini dans la query string
    $tri = $_GET['tri'];
    $articlesvoulus =$articles->get($value,$elem,$tri);//les articles voulus en fonction des parametres de la query string sont recupérés
    }else{
    $articlesvoulus = $articles->get($value,$elem,'0');//si tri non defini
  }}else{
    $articlesvoulus =$articles->getArticles(); //si rien dans la query string on recupere tous les articles
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
