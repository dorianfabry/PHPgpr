<?php
require_once('../model/article.class.php');
require_once('../model/articleDAO.class.php');

$nomproduit = $_POST['nomproduit'];
$type = $_POST['type'];
$description = $_POST['descr'];
$prix = $_POST['prix'];
$urlphoto = $_POST['urlphoto'];
//creation objet dans la base de donnees
$config = parse_ini_file('../config/config.ini');//recuperation du fichier config
$articles = new articleDAO($config['database_path']);//creation de l'instance DAO
$articles->addArticle($nomproduit,$description,$type,$prix,16,$urlphoto);//ajout de l'article a la bd
$file = fopen("../model/DATA/articleDB.txt","a"); //ouverture du fichier en ecriture a la fin
fwrite($file,"16|$nomproduit|$description|$type|$prix|$urlphoto"); //ecriture
fclose($file);//fermeture du fichier

//photo
$repertoireDestination = "../view/img_sites/Produit/";
$taillemax = 3145728;
$photo = $_POST['attach'];

// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['photo']) AND $_FILES['photo']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['photo']['size'] <= $taillemax)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['photo']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['photo']['tmp_name'], '../view/img_sites/Produit/' . basename($_FILES['photo']['name']));
                        echo "L'envoi a bien été effectué !";
                }
                else
                {
                    echo 'extension non-autorisee';
                }
        }
        else
        {
            echo 'image trop grosse';
        }
}
elseif (isset($_FILES['photo']) AND $_FILES['photo']['error'] == UPLOAD_ERR_NO_FILE)
{
    echo 'fichier inexistant';
}
elseif (isset($_FILES['photo']) AND $_FILES['photo']['error'] == UPLOAD_ERR_PARTIAL)
{
    echo 'fichier uploadé que partiellement';
}
elseif (isset($_FILES['photo']) AND $_FILES['photo']['error'] == UPLOAD_ERR_INI_SIZE)
{
    echo 'fichier trop gros';
}
elseif (isset($_FILES['photo']) AND $_FILES['photo']['error'] == UPLOAD_ERR_FORM_SIZE)
{
    echo 'fichier trop gros';
}
elseif (!isset($_FILES['photo']))
{
    echo 'pas de variable';
}
else
{
    echo 'probleme a l\'envoi';
}
?>
