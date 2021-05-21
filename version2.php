<?php
$array = [

    "produit_1" => [
        "nom" =>"avion1",
        "prix" => 400,
        "poid" => 15,
        "remise" => null,
        "photo" => "https://www.site-annonce.fr/sh-img/prix-location-avion-prive-1.jpg"
    ],

    "produit_2"=> [
        "nom" =>"avion2",
        "prix" => 300,
        "poid" => 10,
        "remise" => null,
        "photo" => "https://f1i.autojournal.fr/wp-content/uploads/sites/17/2021/01/max-verstappen-jet-prive-f1.jpg"
    ],

    "produit_3" => [
        "nom" =>"avion3",
        "prix" => 200,
        "poid" => 5,
        "remise" => null,
        "photo" =>"https://img.pixers.pics/pho_wat(s3:700/FO/34/09/39/49/700_FO34093949_fb4ccc15b282a351ebefd19318f31c16.jpg,700,465,cms:2018/10/5bd1b6b8d04b8_220x50-watermark.png,over,480,415,jpg)/papiers-peints-jet-prive.jpg.jpg",
    ],

];
?>

<html lang="fr">
<?php  include 'header.php'; ?>
<body>
<div class="container">
    <div class="row">
        <div class="col align-self-start">
            <?php echo $array["produit_1"] ["nom"]?>
            <?php echo $array["produit_1"] ["prix"]?> eur par journee
            <?php echo $array["produit_1"] ["poid"]?>  personnes
            <?php echo $array["produit_1"] ["remise"]?>
            <?php echo '<img src="'.$array["produit_1"] ["photo"].'" alt="votre avion" width="200">'; ?>
        </div>
        <div class="col align-self-center">
            <?php echo $array["produit_2"] ["nom"]?>
            <?php echo $array["produit_2"] ["prix"]?> eur par journee
            <?php echo $array["produit_2"] ["poid"]?>  personnes
            <?php echo $array["produit_2"] ["remise"]?>
            <?php echo '<img src="'.$array["produit_2"] ["photo"].'" alt="votre avion" width="300">'; ?>

        </div>
        <div class="col align-self-end">
            <?php echo $array["produit_3"] ["nom"]?>
            <?php echo $array["produit_3"] ["prix"]?> eur par journee
            <?php echo $array["produit_3"] ["poid"]?>  personnes
            <?php echo $array["produit_3"] ["remise"]?>
            <?php echo '<img src="'.$array["produit_3"] ["photo"].'" alt="votre avion" width="300">'; ?>

        </div>
    </div>
</div>

</body>
<?php  include 'footer.php'; ?>
</html>