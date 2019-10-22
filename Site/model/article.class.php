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

}





 ?>
