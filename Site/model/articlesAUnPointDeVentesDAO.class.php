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

  function getArticlesAUnPointDeVentes(){ //Retourne toutes les lignes de la bd
    $req = "SELECT * FROM articlesaunpointdeventes";
    $sth=$this->db->query($req);
     $res = $sth->fetchAll(PDO::FETCH_CLASS,'articlesAUnPointDeVentes');
     return $res;
  }

  function getLesIdArticles($id){ //retourne un tableau d'id d'articles du pdv
    $req = "SELECT * FROM articlesaunpointdeventes WHERE idpointdeventes=$id;";
    $sth=$this->db->query($req);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'articlesAUnPointDeVentes');
    $tabidarticles = explode(',',$res[0]->getIdArticles());
    return $tabidarticles;
  }
  
}
