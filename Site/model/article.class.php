<?php
/**
 *
 */
class Article
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

  public function load(){
  $taball = NULL;
  $dh = fopen("DATA/articleDB.txt","r");
  for ($i=0; $i < 10; $i++) {
    $tab = explode('|',rtrim(fgets($dh)),200); //convertis la chaine en tableau
    $pointDeVentes = NEW Article($tab[0],$tab[1],$tab[2],$tab[3],$tab[4],$tab[5]);
    $taball[$tab[0]] = $tab;
  }
  return $taball;
  var_dump($taball);
}

}





 ?>
