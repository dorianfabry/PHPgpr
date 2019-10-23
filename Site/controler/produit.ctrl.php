<?php
require_once('../model/article.class.php');
require_once('../model/articleDAO.class.php');
$article = new Article();
$produits = $article->load();
//var_dump($produits);

//$url1 = $produits[1][5];
//$database = new articleDAO('../model/DATA/article.db');
//$database->get(0,'intitule');//test de la database

//include("../framework/View.class.php");
//$view = new View("produit.view.php");

//$view->photo ="../view/img_sites/Produit".$produits->photo;
//$view->show();


//---------------------------TP4--------------------------------------------

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

// Creation de l'instance DAO
$articles = new articleDAO($config['databasearticle_path']);

// Récupération de l'objet article correspondant à l'id
$id="1";
$res = $articles->getArticle($id);


// Sans Framework
$cover = $config['image_path'].'/'.$res->getPhoto();
include('../view/produit.view.php');


 ?>
