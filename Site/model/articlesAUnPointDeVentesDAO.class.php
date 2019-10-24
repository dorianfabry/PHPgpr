<?php class articlesAUnPointDeVentesDAO {
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

  function getArticlesAUnPointDeVentes(){ //Retourne toutes les lignes
    $req = "SELECT * FROM articlesaunpointdeventes";
    $sth=$this->db->query($req);
     $res = $sth->fetchAll(PDO::FETCH_CLASS,'articlesAUnPointDeVentes');
     return $res;
  }

}
