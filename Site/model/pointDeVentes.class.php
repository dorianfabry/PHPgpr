<?php

/**
 *
 */
class pointDeVentes
{
  public $id;
  public $intitule;
  public $adresse;
  public $logo;
  public $url;


  public function getIntitule(){
    return $this->intitule;
  }

  public function getId(){
    return $this->id;
  }

  public function getAdresse(){
    return $this->adresse;
  }

  public function getLogo(){
    return $this->logo;
  }

  public function getUrl(){
    return $this->url;
  }

  public function loadPointDeVentesDB(){
  $tab = NULL;
  $tabarticles = NULL;
  $taball = NULL;
  $dh = fopen("pointDeVentesDB.txt","r"); // dh pointeur
  $dj = fopen("articlePointDeVentesDB.txt","r");
  for ($i=0; $i < 6; $i++) {
    $tab = explode('|',rtrim(fgets($dh)),200); //convertis la chaine en tableau
    $tabarticles = explode(',',rtrim(fgets($dj)),200); //permet de creer un tableau de n° d'articles
    $pointDeVentes = NEW pointDeVentes($tab[0],$tab[1],$tabarticles);
    $taball[$tab[0]] = $tab;
  }
  return $taball;
}
}

 ?>
