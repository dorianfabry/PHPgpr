<?php
require_once('../model/pointDeVentes.class.php');
require_once('../model/pointDeVentesDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

// Creation de l'instance DAO
$pointsDeVentes = new pointDeVentesDAO($config['database_path']);

// Récupération de l'objet article correspondant à l'id

foreach ($i=0; $i < $pointDeVentes.size() ; $i++){
$res[$i] = $pdv->get($i);
}


// Sans Framework
include('../view/pointDeVentes.view.php');

?>
