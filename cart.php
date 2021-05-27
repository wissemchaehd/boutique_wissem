<html>
<meta charset="UTF-8"/>
<?php
include 'header.php';
include 'my-functions.php';
?>
<body>
<table>
    <tr>
        <td style="border: solid"> Produit </td>
        <td style="border: solid"> prix unitaire  </td>
        <td style="border: solid"> Quantité </td>
        <td style="border: solid"> Total </td>
    </tr>

    <tr>
        <td style="border: solid"><?php echo(int) htmlspecialchars($_POST['quantité']) ?></td>
        <td style="border: solid"><?php echo(int) htmlspecialchars($_POST['quantité']) ?></td>
        <td style="border: solid"><?php echo(int) htmlspecialchars($_POST['quantité']) ?></td>
        <td style="border: solid"><?php echo(int) htmlspecialchars($_POST['quantité']) ?></td>
    <tr/>
</body>
</html>
