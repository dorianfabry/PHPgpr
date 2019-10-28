<?php
require_once('../model/article.class.php');
require_once('../model/articleDAO.class.php');

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



// tri par prix croissant
$typeaafficher = NULL;
if (isset($_GET['valeur'])){
  $val = $_GET['valeur'];
  if ($val != ''){
$typeaafficher = $articlesvoulus[1]->getType();
  }
}
//un article

//view
include('../view/produit.view.php');


 ?>
