<?php

?>


<form action="affichage_formilaire.php" method="POST">
    <input type="number"name="id"placeholder="id" min="0">
    <input type="text" name="nomproduit"placeholder="non produit ">
    <input type="text" name="descriptionproduit"placeholder="description">
    <input type="number" name="prixproduit"placeholder="prix"min="0">
    <input type="number" name="poidproduit" placeholder="poid en g"min="0">
    <input type="text" name="imageproduit" placeholder="lien de l'image">
    <input type="number" name="quantiteproduit" placeholder="quantité en stock">
    <input type="number" name="disponibiliteproduit" placeholder="disponibilité" min="0"max="1">
    <input type="number" name="categorieproduit" placeholder="catégorie ?" min=0 max=3>
    <input type="submit" class="btn bnt-primary" id="envoyer" name="envoyer">


</form>

