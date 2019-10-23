<?php
//ARTICLE
require_once('../model/article.class.php');
require_once('../model/articleDAO.class.php');
$article = new Article();
$produits = $article->load();
//var_dump($produits); TEST fonctionne vecteur d'article dans la créaton d'objet

//$database = new articleDAO('../model/DATA/article.db');
//$database->get(0,'intitule');//test de la database
//pointDeVentes
require_once('../model/pointDeVentes.class.php');
require_once('../model/pointDeVentesDAO.class.php');
$pdv = new pointDeVentes();
$pdvs = $pdv->loadPointDeVentesDB();
var_dump($pdvs);//Affiche vecteur de plusieurs pdvs sans la création d'objet


//----------------Partie Rémi view------------------

//include("../framework/View.class.php");
//$view = new View("produit.view.php");

//$view->photo ="../view/img_sites/Produit".$produits->photo;
//$view->show();


//---------------------------Comme le TP4--------------------------------------------

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

// Creation de l'instance DAO
$articles = new articleDAO($config['databasearticle_path']);

// Récupération de l'objet article correspondant à l'id
$id="1";
$res = $articles->getArticle($id); // Creation d'objet avec FETCH_CLASS


// Sans Framework
$cover = $config['image_path'].'/'.$res->getPhoto();
include('../view/produit.view.php');


 ?>
