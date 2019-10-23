<?php class articleDAO {
  private $db;

  public function __construct($path){
    $database ='sqlite:'.$path.'/article.db';
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

  function getArticle($id){
    $req = "SELECT * FROM article WHERE reference='$id'";
    $sth=$this->db->query($req);
     var_dump($sth);
     $res = $sth->fetchAll(PDO::FETCH_CLASS,'Article');
     var_dump($res);exit(0);
     return $res[0];
  }
}
  ?>
