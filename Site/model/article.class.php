<?php
/**
 *
 */
class Article //Description de la classe Article
{
  public $intitule;
  public $description;
  public $type;
  public $prix;
  public $reference;
  public $photo;


  public function getIntitule(){
    return $this->intitule;
  }
  public function getDescription(){
    return $this->description;
  }
  public function getType(){
    return $this->type;
  }
  public function getPrix(){
    return $this->prix;
  }
  public function getReference(){
    return $this->reference;
  }
  public function getPhoto(){
    return $this->photo;
  }

  public function load(){ //fonction load pour creer des objets articles avec un fichier .txt si besoin
  $taball = NULL;
  $dh = fopen("../model/DATA/articleDATA/articleDB.txt","r");
  for ($i=0; $i < 10; $i++) {
    $tab = explode('|',rtrim(fgets($dh)),200); //convertis la chaine en tableau
    $pointDeVentes = NEW Article($tab[0],$tab[1],$tab[2],$tab[3],$tab[4],$tab[5]);
    $taball[$tab[0]] = $tab;
  }
  return $taball;
}

}

//test pour verif le fonctionnement de la classe
//$art = new Article();
//$tab = $art->load();
//var_dump($tab);



 ?>
