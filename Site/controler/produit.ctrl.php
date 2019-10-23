<?php
require_once('../model/article.class.php');
require_once('../model/articleDAO.class.php');
$article = new Article();
$produits = $article->load();
//var_dump($produits);
$database = new articleDAO('article.db');
$database->get(0,'intitule');//test de la database





 ?>
