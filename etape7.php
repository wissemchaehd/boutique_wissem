<?php
$array = [
    [
        'produit' => [
            'nom' => 'Ballon ADIDAS',
            'prix' => 400,
            'poid' => 400,
            'remise' => 5,
            'photo' => "https://www.ballesdesport.com/wp-content/uploads/2021/01/GK3468_1.jpg"
        ]
    ],
    [
        'produit' => [
            'nom' => 'Ballon NIKE',
            'prix' => 300,
            'poid' => 400,
            'remise' => 10,
            'photo' => "https://www.myteam-foot.fr/4031-large_default/ballon-nike-ordem.jpg"
        ]
    ],
    [
        'produit' => [
            'nom' => 'Ballon PUMA',
            'prix' => 200,
            'poid' => 400,
            'remise' => 0,
            'photo' => "https://www.club-shop.fr/36199-large_default/ballon-de-football-puma-final-5-hs-trainer.jpg",
        ]
    ],
];
?>

<?php
include 'my-functions.php';
?>
<html lang="fr">
<body>
<table>
        <?php
        for ($i=0; $i< count($array);$i++){
            ?>
            <tr>
                <td style="padding-bottom: 5%"> <h2><?php echo $array[$i]['produit']['nom']?></h2></td>
            </tr>
            <tr>
                <td style="padding-bottom: 5%"> <h3>Prix</h3> <?php echo formatPrice($array[$i]['produit']['prix']) ?></td>
            </tr>
            <tr>
                <td style="padding-bottom: 5%"><h3>Prix HT </h3><?php echo priceExcludingVAT($array[$i]['produit']['prix']) ?></td>
            </tr>
            <tr>
                <td style="padding-bottom: 5%"><h3> Poid </h3><?php echo  $array[$i]['produit']['poid']?></td>
            </tr>
            <tr>
                <td style="padding-bottom: 5%"><h3> Prix Remise </h3><?php echo displayDiscountedPrice($array[$i]['produit']['prix'],$array[$i]['produit']['remise'])?></td>
            </tr>
            <tr>
                <td style="padding-bottom: 5%"><img src="<?php echo $array[$i]['produit']['photo']?>" width="150"/></td>
            </tr>
            <tr>
                <td>Commander
                    <form action="cart.php" method="post">
                        <input type="number" name="quantité" placeholder="nombres de ballons">
                        <input type="hidden" name="nom" value="<?php echo $array[$i]['produit']['nom']?>">
                        <input type="hidden" name="prix" value="<?php  echo displayDiscountedPrice($array[$i]['produit']['prix'],$array[$i]['produit']['remise']) ?>">
                        <input type="hidden" name="PrixHT" value="<?php echo priceExcludingVAT($array[$i]['produit']['prix']) ?>
">
                        <button type="submit" > commander </button>
                    </form>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>

</body>

</html>
