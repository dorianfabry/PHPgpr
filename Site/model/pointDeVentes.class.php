<?php

/**
 *
 */
class pointDeVentes
{

  public $intitule;
  public $adresse;
  public $articles;


  function __construct()
  {
          setIntitule($_array[0]);

          setAdresse($_array[1]);

          setArticles($_array[2]);
  }
  public function setIntitule($value){
    $this->intitule = $value;
  }
  public function setAdresse($value){
    $this->description  = $value;
  }
  public function setArticles($value){
    $this->type = $value;
  }
}







 ?>
