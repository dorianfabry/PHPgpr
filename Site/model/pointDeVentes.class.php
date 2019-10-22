<?php

/**
 *
 */
class pointDeVentes
{
  public $id;
  public $intitule;
  public $adresse;
  public $articles;


  public function getIntitule(){
    return $this->intitule;
  }

  public function getId(){
    return $this->id;
  }

  public function getAdresse(){
    return $this->adresse;
  }

  public function getArticles(){
    return $this->articles;
  }

  public function loadPointDeVentesDB(){
  $tab = NULL;
  $taball = NULL;
  $dh = fopen("pointDeVentesDB.txt","r"); // dh pointeur
  for ($i=0; $i < 30; $i++) {
    $tab = explode('|',rtrim(fgets($dh)),200); //convertis la chaine en tableau
    $pointDeVentes = NEW pointDeVentes($tab[0],$tab[1],$tab[2]); //$tab[2] est l'array list d'articles
    $taball[$tab[0]] = $tab;
  }
  return $taball;
}
}

 ?>
