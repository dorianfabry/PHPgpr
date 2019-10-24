<?php
require_once('articlesAUnPointDeVentes.class.php');
require_once('articlesAUnPointDeVentesDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

// Creation de l'instace DAO
$articlesaunpdv = new articlesAUnPointDeVentes($config['database_path']);

$m = $articlesaunpdv->getArticlesAUnPointDeVentes();
var_dump($m);
//$n = $articles->getUnArticle(8);
//var_dump($n);
?>
