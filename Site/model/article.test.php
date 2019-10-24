<?php
require_once('article.class.php');
require_once('articleDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

// Creation de l'instace DAO
$articles = new articleDAO($config['database_path']);

$m = $articles->getArticles();
var_dump($m);
//$n = $articles->getUnArticle(8);
//var_dump($n);
?>
