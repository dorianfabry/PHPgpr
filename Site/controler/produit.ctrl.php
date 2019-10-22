<?php
require_once('..\model\article.class.php');
require_once('..\model\articleDAO.class.php');
$database = new articleDAO('../model/DATA');
$article = $database.get("JBL","intitule");




 ?>
