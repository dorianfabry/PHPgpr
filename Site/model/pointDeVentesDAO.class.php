<?php
require_once('../model/pointDeVentes.class.php');
class pointDeVentesDAO {
  private $db;
  public function __construct($path){
    $database ='sqlite:'.$path.'/boombox.db';
    try{
      $this->db = new PDO($database);
      //var_dump($database);
    }

    catch (Exception $e)
    {
      die('Erreur : ' . $e->getMessage());
    }
  }

  public function get(){
    $req = "SELECT * FROM POINTDEVENTES;";
    $sth=$this->db->query($req);
    $resultats=$sth->fetchAll(PDO::FETCH_CLASS,'pointDeVentes');
    return $resultats;
  }
}
  ?>
