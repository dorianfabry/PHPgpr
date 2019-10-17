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

  function __construct($_array)
  {
      setIntitule($_array[0]);

      setDescription($_array[1]);

      setType($_array[2]);

      setPrix($_array[3]);

      setReference($_array[4]);

      setPhoto($_array[5]);
  }

  public function setIntitule($value){
    $this->intitule = $value;
  }
  public function setDescription($value){
    $this->description  = $value;
  }
  public function setType($value){
    $this->type = $value;
  }
  public function setPrix($value){
    $this->prix = $value;
  }
  public function setReference($value){
    $this->reference = $value;
  }
  public function setPhoto($value){
    $this->photo = $value;
  }
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
