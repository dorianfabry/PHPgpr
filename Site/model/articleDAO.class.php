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

  public function get(string $value,string $element){

  }

  ?>
