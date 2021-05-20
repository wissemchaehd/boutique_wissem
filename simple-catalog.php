<?php

$products = [avion1,avion2,helicoptere,helicoptere2];
sort($products);
$premier_produit = $products[0];
echo "$premier_produit<br/>";
$dernier_produit = end($products);
echo "$dernier_produit";
?>