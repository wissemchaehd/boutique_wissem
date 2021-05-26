<?php

$produit_1 = [
    "nom" =>"avion1",
    "prix" => 400,
    "poid" => 15,
    "remise" => 5,
    "photo" => "https://www.site-annonce.fr/sh-img/prix-location-avion-prive-1.jpg",
];

$produit_2 = [
    "nom" =>"avion2",
    "prix" => 300,
    "poid" => 10,
    "remise" =>10,
    "photo" => "https://f1i.autojournal.fr/wp-content/uploads/sites/17/2021/01/max-verstappen-jet-prive-f1.jpg",
];

$produit_3 = [
    "nom" =>"avion3",
    "prix" => 200,
    "poid" => 5,
    "remise" => 0,
    "photo" =>"https://img.pixers.pics/pho_wat(s3:700/FO/34/09/39/49/700_FO34093949_fb4ccc15b282a351ebefd19318f31c16.jpg,700,465,cms:2018/10/5bd1b6b8d04b8_220x50-watermark.png,over,480,415,jpg)/papiers-peints-jet-prive.jpg.jpg",
];


?>



<html lang="fr">

<?php
include 'header.php';
include 'my-functions.php'

?>

    <h5> <?php echo $produit_1["nom"]?></h5>
    <h5> prix <?php formatPrice($produit_2["prix"])?> euro/jour</h5>
    <h5> prix HT<?php   priceExcludingVAT($produit_1["prix"])?> euro/jour</h5>
    <h5> capacité <?php echo $produit_2["poid"]?> personnes </h5>
    <h5> prix aprés remise<?php displayDiscountedPrice($produit_2["prix"],$produit_2["remise"])?><h5> <br/>
    <?php echo '<img src="'.$produit_1["photo"].'" alt="votre avion" width="400">'; ?>

    <h5> <?php echo $produit_2["nom"]?></h5>
    <h5> prix <?php formatPrice($produit_2["prix"])?> euro/jour</h5>
    <h5> prix HT<?php   priceExcludingVAT($produit_1["prix"])?> euro/jour</h5>
    <h5> capacité <?php echo $produit_2["poid"]?> personnes </h5>
    <h5> prix aprés remise <?php displayDiscountedPrice($produit_2["prix"],$produit_2["remise"])?></5><br/>
    <?php echo '<img src="'.$produit_2["photo"].'" alt="votre avion" width="400">'; ?>

    <h5> <?php echo $produit_3["nom"]?></h5>
    <h5> prix <?php formatPrice($produit_3["prix"])?> euro/jour</h5>
    <h5> prix HT<?php   priceExcludingVAT($produit_3["prix"])?> euro/jour</h5>
    <h5> capacité <?php echo $produit_3["poid"]?> personnes </h5>
    <h5> prix aprés remise <?php displayDiscountedPrice($produit_1["prix"],$produit_1["remise"])?></5><br/>
    <?php echo '<img src="'.$produit_3["photo"].'" alt="votre avion" width="400">'; ?>


<?php  include 'footer.php'; ?>



</html>