<?php
require_once('../model/pointDeVentes.class.php');
class pointDeVentesDAO {
  private $db;
  public function __construct($path){
    $database ='sqlite:'.$path.'/pointDeVentes.db';
    try{
      $this->db = new PDO($database);
      //var_dump($database);
    }

    catch (Exception $e)
    {
      die('Erreur : ' . $e->getMessage());
    }
  }

  public function get($id){
    $req = "SELECT * FROM pointDeVentes WHERE id='$id'";
    $sth=$this->db->query($req);
    $resultats=$sth->fetchAll(PDO::FETCH_CLASS,'pointDeVentes');
    return $resultats[0];
  }
}
  ?>
