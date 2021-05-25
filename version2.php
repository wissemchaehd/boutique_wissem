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




//foreach ($array as $key => $prod) {
//    echo $key.' : <br/>';
//    foreach ($prod as $key2 => $prod2){
//        if ($key2 === 'photo') {
//            echo $key2." :  <img src='".$prod2."' /><br />";
//        } else {
//            echo $key2." :  ".$prod2.'<br />';
//        }
//    }
//}
//$keys = array_keys($array);
//for($i=0; $i < count($keys); ++$i) {
//    echo $keys[$i] .' : <br/>';
//    $array2 = $array[$keys[$i]];
//    $keys2 = array_keys($array2);
//    for($j=0; $j < count($keys2); ++$j) {
//        if ($keys2[$j] === 'photo') {
//            echo $keys2[$j]." :  <img src='".$array2[$keys2[$j]]."' width='200' height='auto' /><br />";
//        } else {
//            echo $keys2[$j]." :  ".$array2[$keys2[$j]].'<br />';
//        }
//    }
//}

//$i = 0;
//do {echo $array[$i]['produit']['nom'].'<br />';
//    echo $array[$i]['produit']['prix'].'<br />';
//    echo $array[$i]['produit']['poid'].'<br />';
//    echo $array[$i]['produit']['remis'].'<br />';
//    echo ' <img src="'.$array[$i]['produit']['photo'].' width="200" height="auto"><br />';
//    $i++;
//
//
//}
//
//while ($i < count($array));
//$i++;
//
//
$i=0;
$keys = array_keys($array);
while ($i<count($array) ){
    echo $array[$i]['produit']['nom'].'<br />';
    echo $array[$i]['produit']['prix'].'<br />';
    echo $array[$i]['produit']['poid'].'<br />';
    echo $array[$i]['produit']['remis'].'<br />';
    echo ' <img src="'.$array[$i]['produit']['photo'].'"><br />';
    $i++;
}


?>







<!---->
<!--<html lang="fr">-->
<?php // include 'header.php'; ?>
<!--<body>-->
<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col align-self-start">-->
<!--            --><?php //echo $array["produit_1"] ["nom"]?>
<!--            --><?php //echo $array["produit_1"] ["prix"]?><!-- eur par journee-->
<!--            --><?php //echo $array["produit_1"] ["poid"]?><!--  personnes-->
<!--            --><?php //echo $array["produit_1"] ["remise"]?>
<!--            --><?php //echo '<img src="'.$array["produit_1"] ["photo"].'" alt="votre avion" width="200">'; ?>
<!--        </div>-->
<!--        <div class="col align-self-center">-->
<!--            --><?php //echo $array["produit_2"] ["nom"]?>
<!--            --><?php //echo $array["produit_2"] ["prix"]?><!-- eur par journee-->
<!--            --><?php //echo $array["produit_2"] ["poid"]?><!--  personnes-->
<!--            --><?php //echo $array["produit_2"] ["remise"]?>
<!--            --><?php //echo '<img src="'.$array["produit_2"] ["photo"].'" alt="votre avion" width="300">'; ?>
<!---->
<!--        </div>-->
<!--        <div class="col align-self-end">-->
<!--            --><?php //echo $array["produit_3"] ["nom"]?>
<!--            --><?php //echo $array["produit_3"] ["prix"]?><!-- eur par journee-->
<!--            --><?php //echo $array["produit_3"] ["poid"]?><!--  personnes-->
<!--            --><?php //echo $array["produit_3"] ["remise"]?>
<!--            --><?php //echo '<img src="'.$array["produit_3"] ["photo"].'" alt="votre avion" width="300">'; ?>
<!---->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--</body>-->
<?php // include 'footer.php'; ?>
<!--</html>-->