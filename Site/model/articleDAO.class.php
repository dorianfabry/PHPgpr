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

  public function get($value,$element,$tri){
    switch ($element) {
      case 'intitule':
      $recherche = $this->db->query("SELECT * FROM article WHERE intitule LIKE '%$value%'");
      break;
      case 'type':
      if ($value!=''){
        switch ($tri) {
          case 'prixcroissant':
          $recherche = $this->db->query("SELECT * FROM article WHERE type='$value' ORDER BY prix ASC ");
          break;
          case 'prixdecroissant':
          $recherche = $this->db->query("SELECT * FROM article WHERE type='$value' ORDER BY prix DESC ");
          break;
          default:
          $recherche = $this->db->query("SELECT * FROM article WHERE type='$value'");
          break;
        }}else{
          switch ($tri) {
            case 'prixcroissant':
            $recherche = $this->db->query("SELECT * FROM article ORDER BY prix ASC ");
            break;
            case 'prixdecroissant':
            $recherche = $this->db->query("SELECT * FROM article ORDER BY prix DESC ");
            break;
            default:
            $recherche = $this->db->query("SELECT * FROM article");
            break;
          }
        }
      break;
      case 'prix':
      $recherche = $this->db->query("SELECT * FROM article WHERE prix<=$value ");
      break;
      case 'reference':
      $recherche = $this->db->query("SELECT * FROM article WHERE reference=$value");
      break;
      default:

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

  function getUnArticle($id){
    $req = "SELECT * FROM article WHERE reference=$id;";
    $sth=$this->db->query($req);
     $res = $sth->fetchAll(PDO::FETCH_CLASS,'Article');
     return $res[0];
  }
  function getUnArticleType($id,$value){
    $req = "SELECT * FROM article WHERE reference=$id AND type='$value';";
    $sth=$this->db->query($req);
     $res = $sth->fetchAll(PDO::FETCH_CLASS,'Article');
     if ($res!= NULL){
       return $res[0];
     }
  }
  function addArticle($intitule,$description,$type,$prix,$reference,$urlphoto){
    $stmt = $this->db->prepare("INSERT INTO ARTICLE (reference,intitule,description,type,prix,urlphoto) VALUES (:reference, :intitule, :description, :type, :prix, :urlphoto);");
    $stmt->bindParam(':reference',$reference);
    $stmt->bindParam(':intitule',$intitule);
    $stmt->bindParam(':description',$description);
    $stmt->bindParam(':type',$type);
    $stmt->bindParam(':prix',$prix);
    $stmt->bindParam(':urlphoto',$urlphoto);
    $sth->execute();
  }
}
  ?>
