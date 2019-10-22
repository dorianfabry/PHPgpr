<?php
require_once('pointDeVentes.class.php');
require_once('pointDeVentesDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

// Creation de l'instace DAO
$jukebox = new MusicDAO($config['database_path']);

$m = $jukebox->get(1);
var_dump($m);
?>
