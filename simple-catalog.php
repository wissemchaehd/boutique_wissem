<?php

$produits = ['avion1', 'avion2', 'helicoptere', 'helicoptere2','jet'];
sort($produits);

foreach ($produits as $prod) {
    echo "$prod.<br/>";
}