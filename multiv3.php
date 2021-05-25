<?php

$array= [
    [
        'produit' => [
            'nom' =>"avion1",
            'prix' => 400,
            'poid' => 15 .'   '. 'personnes',
            'remis' => 5 . '% de remise ',
            'photo' => "https://www.site-annonce.fr/sh-img/prix-location-avion-prive-1.jpg"
        ]
    ],
    [
        'produit'=> [
            'nom' =>"avion2",
            'prix' => 300,
            'poid'=> 10 .'   '. 'personnes' ,
            'remis' => 10 . '% de remise',
            'photo' => "https://f1i.autojournal.fr/wp-content/uploads/sites/17/2021/01/max-verstappen-jet-prive-f1.jpg"
        ]
    ],
    [
        'produit' => [
            'nom' =>"avion3",
            'prix' => 200,
            'poid' => 5 .'   '. 'personnes' ,
            'remis' => 0,
            'photo' => "https://img.pixers.pics/pho_wat(s3:700/FO/34/09/39/49/700_FO34093949_fb4ccc15b282a351ebefd19318f31c16.jpg,700,465,cms:2018/10/5bd1b6b8d04b8_220x50-watermark.png,over,480,415,jpg)/papiers-peints-jet-prive.jpg.jpg",
        ]
    ],
];

//foreach ($array as $prod) {
//    foreach ($prod as $key => $value) {
//        echo $key. '<br />';
//        foreach ($value as $key2 => $value2) {
//            echo $key2.' : '.$value2.'<br/>';
//        }
//    }
//
//}
//
//
//for ($i=0; $i< count($array);$i++){
//    echo $array[$i]['produit']['nom'].'<br />';
//    echo $array[$i]['produit']['prix'].'<br />';
//    echo $array[$i]['produit']['poid'].'<br />';
//    echo $array[$i]['produit']['remis'].'<br />';
//    echo ' <img src="'.$array[$i]['produit']['photo'].'"><br />';
//}
//
//
//$i=0;
//while ($i<count($array) ){
//    echo $array[$i]['produit']['nom'].'<br />';
//    echo $array[$i]['produit']['prix'].'<br />';
//    echo $array[$i]['produit']['poid'].'<br />';
//    echo $array[$i]['produit']['remis'].'<br />';
//    echo ' <img src="'.$array[$i]['produit']['photo'].'"><br />';
//    $i++;
//}
//
//
//
//$i = 0;
//do {
//    echo $array[$i]['produit']['nom'].'<br />';
//    echo $array[$i]['produit']['prix'].'<br />';
//    echo $array[$i]['produit']['poid'].'<br />';
//    echo $array[$i]['produit']['remis'].'<br />';
//    echo ' <img src="'.$array[$i]['produit']['photo'].' width="200" height="auto"><br />';
//    $i++;
//} while ($i < count($array));
?>
<html lang="fr">
<?php
include 'header.php';

?>
<body>
<div>
    <table>
        <?php
            for ($i=0; $i< count($array);$i++){
        ?>
        <tr>
            <td style="border: solid;"><?php echo $array[$i]['produit']['nom']?></td>
            <td style="border: solid;"><?php echo $array[$i]['produit']['prix']?></td>
            <td style="border: solid;"><?php echo  $array[$i]['produit']['poid']?></td>
            <td style="border: solid;"><?php echo  $array[$i]['produit']['remis']?></td>
            <td style="border: solid;"><img src="<?php echo $array[$i]['produit']['photo']?>" width="200"/></td>
        </tr>
        <?php
            }
        ?>
    </table>
</div>
</body>
<?php  include 'footer.php'; ?>
</html>
