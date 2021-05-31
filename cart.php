<html lang="fr">


<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'catalogue7.php';
include 'my-functions.php';
global $array;


$prixremise =  displayDiscountedPrice($array[$_POST["info"]]["prix"],$array[$_POST["info"]]["remise"]);
$total =  Total($prixremise, $_POST ['quantité']);
$prixHT =  priceExcludingVAT($total);
$TVA = $total - $prixHT ;
$tranport =  transport($array[$_POST["info"]]["poid"],$_POST['quantité']);

?>
<?php
if($_POST ['quantité']<=0){goto a;}

?>

<body>
<table class="table table-hover">
    <tr>
        <td style="padding-right: 30%"> Produit </td>
        <td style="padding-left: 10%"> Prix unitaire  </td>
        <td style="padding-left :10%"> Quantité </td>
        <td style="padding-left :10%"> Total </td>
    </tr>
    <tr>
        <td><?php echo $array[$_POST["info"]]["nom"] ?></td>
        <td style="padding-left: 10%"><?php echo $prixremise . ' €' ?></td>
        <td style="padding-left: 10%"><?php echo $_POST ['quantité'] ?></td>
        <td style="padding-left: 10%"><?php echo $total. ' €' ?></td>
    </tr>

<tr>
        <td> </td>
    <td> </td>
        <td style="padding-left: 10%"> Total HT </td>
        <td style="padding-left: 10%"><?php echo $prixHT . ' €'?></td>


    </tr>
    <tr>
        <td> </td>
        <td> </td>
        <td style="padding-left: 10%"> TVA </td>
        <td style="padding-left: 10%"><?php echo $TVA. ' €' ?></td>

    </tr>
    <tr>
        <td> <form action="cart.php" method="post">
                <input type="hidden" name="info" value="<?php echo $key ?>">

                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option selected>Choix du Transporteur</option>
                <option name ="la poste"   value=Transporteur">La poste</option>
                <option name ="UPS"        value ="Transporteur1"> UPS</option>
            </select>
                <button type="submit" > commander </button>
            </form>

        </td>
    </tr>

    <tr>
        <td> </td>
        <td> </td>
        <td style="padding-left:10%">Transport </td>
        <td style="padding-left: 10%"> <?php echo $tranport . ' €';?></td>

    </tr>
<!--    <tr>-->
<!--        <td> </td>-->
<!--        <td> </td>-->
<!--        <td style="padding-left:10%">Total TTC </td>-->
<!--        <td style="padding-left: 10%">--><?php //echo $totalavectransport. ' €' ?><!--</td>-->
<!---->
<!--    </tr>-->
</table>


</body>
</html>
<?php
a:
if($_POST['quantité']<=0)
{echo 'Veuillez entrer un entier positif dans le champ quantité';}
?>