<html>
<meta charset="UTF-8"/>
<?php
include 'my-functions.php';
?>
<body>

<table>
    <tr>
        <td style="padding-right: 30%"> Produit </td>
        <td style="padding-left: 10%"> Prix unitaire  </td>
        <td style="padding-left :10%"> Quantité </td>
        <td style="padding-left :10%"> Total </td>
    </tr>

    <tr>
        <td><?php echo htmlspecialchars($_POST['nom']) ?></td>
        <td style="padding-left: 10%"><?php echo(int) htmlspecialchars($_POST['prix']). ' €' ?></td>
        <td style="padding-left: 10%"><?php echo(int) htmlspecialchars($_POST['quantité']) ?></td>
        <td style="padding-left: 10%"><?php echo(int) Total($_POST['prix'],$_POST['quantité']). ' €' ?></td>
    <tr/>

    <tr>
        <td> </td>
        <td> </td>
        <td style="padding-left: 10%"> Total HT </td>
        <td style="padding-left: 10%"><?php echo(int) Total($_POST['PrixHT'],$_POST['quantité']). ' €'?></td>


    </tr>
    <tr>
        <td> </td>
        <td> </td>
        <td style="padding-left: 10%"> TVA </td>
        <td style="padding-left: 10%"><?php echo(int) TVA($_POST['prix'],$_POST['PrixHT'],$_POST['quantité']). ' €' ?></td>

    </tr>
    <tr>
        <td> <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option selected>Choix du Transporteur</option>
                <option value="1">Transporteur 1</option>
                <option value="2">Tranporteur 2</option>
            </select>
            <button type="submit" > Valider </button>
        </td>
    </tr>
   
    <tr>
        <td> </td>
        <td> </td>
        <td style="padding-left:10%">Total TTC </td>
        <td style="padding-left: 10%"><?php echo(int) Total($_POST['prix'],$_POST['quantité']). ' €' ?></td>

    </tr>
    <tr>
        <td> </td>
        <td> </td>
        <td style="padding-left:10%">Transport </td>
        <td style="padding-left: 10%"><?php echo(int) Total($_POST['prix'],$_POST['quantité']). ' €' ?></td>

    </tr>





</body>
</html>
