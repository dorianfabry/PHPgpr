<?php
require_once('../model/pointDeVentes.class.php');
require_once('../model/pointDeVentesDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

// Creation de l'instance DAO
$pointsDeVentes = new pointDeVentesDAO($config['database_path']);

// Récupération de l'objet article correspondant à l'id
$id=1;
$res = array($pointsDeVentes->get($id),$pointsDeVentes->get($id+1),$pointsDeVentes->get($id+2)
,$pointsDeVentes->get($id+3),$pointsDeVentes->get($id+4));

// Sans Framework
for ($i=0; $i < 5 ; $i++) {
  $intitu[$i] = $res[$i]->getIntitule();
}
include('../view/pointDeVentes.view.php');

?>
