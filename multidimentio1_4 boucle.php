<?php
$array= [

    'produit_1' => [
        'nom' =>"avion1",
        'prix' => 400 .'   '. 'eur par j',
        'poid' => 15 . 'personnes',
        'remis' => 5 . '% de remise ',
        'photo' => "https://www.site-annonce.fr/sh-img/prix-location-avion-prive-1.jpg"
    ],

    'produit_2'=> [
        'nom' =>"avion2",
        'prix' => 300 .'   '. 'eur par j',
        'poid'=> 10 .'   '. 'personnes' ,
        'remis' => 10 . '% de remise',
        'photo' => "https://f1i.autojournal.fr/wp-content/uploads/sites/17/2021/01/max-verstappen-jet-prive-f1.jpg"
    ],

    'produit_3' => [
        'nom' =>"avion3",
        'prix' => 200 .'   '. 'eur par j',
        'poid' => 5 .'   '. 'personnes' ,
        'remis' => null,
        'photo' => "https://img.pixers.pics/pho_wat(s3:700/FO/34/09/39/49/700_FO34093949_fb4ccc15b282a351ebefd19318f31c16.jpg,700,465,cms:2018/10/5bd1b6b8d04b8_220x50-watermark.png,over,480,415,jpg)/papiers-peints-jet-prive.jpg.jpg",
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
$keys = array_keys($array);
////var_dump($keys);
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
//$i=0;
//
//while ( $i < count($keys)) {
//    echo $keys[$i] .' : <br/>';
//    $j=0;
//    $array2 = $array[$keys[$i]];
//    $keys2 = array_keys($array2);
//    while( $j< count($keys2)) {
//
//        echo $keys2[$j]." :  ".$array2[$keys2[$j]].'<br />';
//        $j++;
//    }
//    $i++;
//}

$i=0;

Do {
    echo $keys[$i] .' : <br/>';
    $j=0;
    $array2 = $array[$keys[$i]];
    $keys2 = array_keys($array2);
    Do {

        if ($keys2[$j] === 'photo') {
            echo $keys2[$j]." :  <img src='".$array2[$keys2[$j]]."' width='200' height='auto' /><br />";
        } else {
            echo $keys2[$j]." :  ".$array2[$keys2[$j]].'<br />';
        }
        $j++;
    } while( $j< count($keys2));
    $i++;
} while ( $i < count($keys));

?>
