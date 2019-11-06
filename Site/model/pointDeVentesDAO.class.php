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

  public function get(){ //recuperation de tous les objets pointDeVentes de la bd
    $req = "SELECT * FROM POINTDEVENTES;";
    $sth=$this->db->query($req);
    $resultats=$sth->fetchAll(PDO::FETCH_CLASS,'pointDeVentes');
    return $resultats;
  }
  public function getLepdv($id){ // recuperation d'un pdv en indiquant son id
    $req = "SELECT * FROM POINTDEVENTES WHERE id=$id;";
    $sth=$this->db->query($req);
    $resultats=$sth->fetchAll(PDO::FETCH_CLASS,'pointDeVentes');
    return $resultats[0];
  }

}
  ?>
