<?php

$array= [
    [
        'produit' => [
            'nom' =>"Ballon ADIDAS",
            'prix' => 40000,
            'poid' => 400,
            'remis' => 5,
            'photo' => "https://www.ballesdesport.com/wp-content/uploads/2021/01/GK3468_1.jpg"
        ]
    ],
    [
        'produit'=> [
            'nom' =>"Ballon NIKE",
            'prix' => 30000,
            'poid'=> 400,
            'remis' => 10,
            'photo' => "https://www.myteam-foot.fr/4031-large_default/ballon-nike-ordem.jpg"
        ]
    ],
    [
        'produit' => [
            'nom' =>"Ballon PUMA",
            'prix' => 20000,
            'poid' => 400,
            'remis' => 0,
            'photo' => "https://www.club-shop.fr/36199-large_default/ballon-de-football-puma-final-5-hs-trainer.jpg",
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


//for ($i=0; $i< count($array);$i++){
//    echo $array[$i]['produit']['nom'].'<br />';
//    echo $array[$i]['produit']['prix'].'<br />';
//    echo $array[$i]['produit']['poid'].'<br />';
//    echo $array[$i]['produit']['remis'].'<br />';
//    echo ' <img src="'.$array[$i]['produit']['photo'].'"><br />';
//}


//$i=0;
//while ($i<count($array) ){
//    echo $array[$i]['produit']['nom'].'<br />';
//    echo $array[$i]['produit']['prix'].'<br />';
//    echo $array[$i]['produit']['poid'].'<br />';
//    echo $array[$i]['produit']['remis'].'<br />';
//    echo ' <img src="'.$array[$i]['produit']['photo'].'"><br />';
//    $i++;
//}



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

include 'my-functions.php';
?>

<body>
<?php
for ($i=0; $i< count($array);$i++){
    ?>
    <table class="table table-hover">

        <tr>
            <td style="border: solid">Produit<br><?php echo $array[$i]['produit']['nom']?></td>
            <td style="border: solid">Prix<br> <?php formatPrice($array[$i]['produit']['prix']) ?></td>
            <td style="border: solid"> Prix HT<br> <?php priceExcludingVAT($array[$i]['produit']['prix']) ?></td>
            <td style="border: solid"> Poid<br><?php echo  $array[$i]['produit']['poid']?></td>
            <td style="border: solid">Prix apres remise <br><?php displayDiscountedPrice($array[$i]['produit']['prix'],$array[$i]['produit']['remis'])?></td>
            <td style="border: solid"><br><img src="<?php echo $array[$i]['produit']['photo']?>" width="150"/></td>
            <td style="border: solid">Commander
                <form action="cart.php" method="post">
                    <input type="number" name="quantité" placeholder="nombres de ballons">
                    <input type="hidden" name="nom" value="<?php echo $array[$i]['produit']['nom']?>">
                    <input type="hidden" name="prix" value="<?php  formatPrice($array[$i]['produit']['prix']) ?>">
                    <button type="submit" > commander </button>
                </form>
            </td>
        </tr>

    </table>















                    <?php
                    }
                    ?>

    </table>
</div>
</body>

</html>
