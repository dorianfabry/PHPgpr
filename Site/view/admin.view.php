<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="text-align:center; background-color:rgba(255,69,0,0.8);">
    <h1>Ajout d'un Produit</h1>
    <form class="" action="form.php" method="post" enctype="multipart/form-data">
      <p>
        Le nom du produit : <br>
      <input type="text" name="nomproduit" value="">
      </p>
      <p>
        Le type du produit : <br>
        <select class="type" name="type">
          <optgroup label="Casques">
          <option value="ecouteursf">ecouteursf</option>
          <option value="casque">casque</option>
          </optgroup>
          <optgroup label="Enceintes">
          <option value="enceinteportable">enceinteportable</option>
          <option value="barredeson">barredeson</option>
          <option value="partybox">partybox</option>
          </optgroup>
        </select>
      </p>
      <p>
        Description du produit : <br>
        <textarea name="descr" rows="6" cols="40">Saisir la description du produit à ajouter</textarea>
      </p>
      <p>
        Prix : <br>
      <input type="text" name="prix" value="">
     </p>
      <p>
       Joindre la photo du produit(résolution carré, 10Mo Max) <br>
       <input type="file" name="photo" id="photo" value="">
       </p>
       <p>
       URL de la photo :
       <input type="text" name="urlphoto" value="">
     </p>
     <p>
      Reference produit :
     <input type="text" name="ref" value="16+nbproduitrajouter">
      </p>
      <p>
      <input type="submit" value="Envoyer">
      <input type="reset" value="Annuler">
      </p>
    </form>
  </body>
</html>
