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

function getLesIdArticles($id){ //retourne un tableau d'id d'articles du pdv
  $req = "SELECT * FROM articlesaunpointdeventes WHERE idpointdeventes=$id;";
  $sth=$this->db->query($req);
  $res = $sth->fetchAll(PDO::FETCH_CLASS,'articlesAUnPointDeVentes');
  $tabidarticles = explode(',',$res[0]->getIdArticles());
  return $tabidarticles;  
}

  //Il faut une fonction pour que avec le deuxieme attribut creer un tableau d'id produits
  // correspondants au point de ventes ensuite il faut que pour 1 produits on ai les points
  // de ventes disponibles (recherche where id produit est dans le vecteur d'un point de
  // de ventes alors on affiche le pdv )

}
