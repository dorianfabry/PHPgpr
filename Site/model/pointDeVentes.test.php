<?php
require_once('pointDeVentes.class.php');
require_once('pointDeVentesDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

// Creation de l'instace DAO
$pointDeVentes = new pointDeVentesDAO($config['database_path']);

$m = $pointDeVentes->get(1);
var_dump($m);
?>
