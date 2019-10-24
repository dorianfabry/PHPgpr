<?php class articleDAO {
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

  public function get( $value,$element){
    switch ($element) {
      case 'intitule':
      $recherche = $this->db->query("SELECT * FROM article WHERE intitule LIKE '%$value%'");
      break;
      case 'type':
      $recherche = $this->db->query("SELECT * FROM article WHERE type='$value'");
      break;
      case 'prix':
      $recherche = $this->db->query("SELECT * FROM article WHERE prix<=$value ");
      break;
      case 'reference':
      $recherche = $this->db->query("SELECT * FROM article WHERE reference='$value'");
      break;

    }
    $resultats=$recherche->fetchAll(PDO::FETCH_CLASS,'Article');
    return $resultats;
  }

  function getArticles(){
    $req = "SELECT * FROM article";
    $sth=$this->db->query($req);
     $res = $sth->fetchAll(PDO::FETCH_CLASS,'Article');
     return $res;
  }
}
  ?>
