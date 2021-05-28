<html>
<meta charset="UTF-8"/>
<?php


?>
<body>

<table class="table table-hover">
    <tr>
        <td> Produit </td>
        <td> prix unitaire  </td>
        <td> Quantité </td>
        <td> Total </td>
    </tr>

    <tr>
        <td><?php echo htmlspecialchars($_POST['nom']) ?></td>
        <td><?php echo(int) htmlspecialchars($_POST['prix']) ?></td>
        <td><?php echo(int) htmlspecialchars($_POST['quantité']) ?></td>
    <tr/>

    <tr>
        <td </td>
        <td </td>
        <td> Total HT </td>

    </tr>
    <tr>
        <td </td>
        <td </td>
        <td> TVA </td>

    </tr>
    <tr>
        <td </td>
        <td </td>
        <td>Total TTC </td>

    </tr>




</body>
</html>
