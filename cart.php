<html>
<meta charset="UTF-8"/>
<?php
include 'header.php';

?>
<body>

<table class="table table-hover">
    <tr>
        <td style="color: #a48e1f"> Produit </td>
        <td style="color: #a48e1f"> prix unitaire  </td>
        <td style="color: #a48e1f"> Quantité </td>
        <td style="color: #a48e1f"> Total </td>
    </tr>

    <tr>
        <td style="color: #a48e1f"><?php echo htmlspecialchars($_POST['nom']) ?></td>
        <td style="color: #a48e1f"><?php echo(int) htmlspecialchars($_POST['prix']) ?></td>
        <td style="color: #a48e1f"><?php echo(int) htmlspecialchars($_POST['quantité']) ?></td>
    <tr/>

    <tr>
        <td </td>
        <td </td>
        <td style="color: #a48e1f"> Total HT </td>

    </tr>
    <tr>
        <td </td>
        <td </td>
        <td style="color: #a48e1f"> TVA </td>

    </tr>
    <tr>
        <td </td>
        <td </td>
        <td style="color: #a48e1f">Total TTC </td>

    </tr>




</body>
</html>
