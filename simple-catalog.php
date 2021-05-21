<?php

$produits = ['avion1', 'avion2', 'helicoptere', 'helicoptere2','jet'];
sort($produits);
for ($i = 0; $i < count($produits); $i++) {
    $prod = $produits[$i];
    echo ./ $prod . '<br>';
}

