<?php

$produits = ['avion1', 'avion2', 'helicoptere', 'helicoptere2','jet'];
sort($produits);

$i = 0;
$max = count( $produits );

while( $i < $max )
{
    echo $produits[ $i ] . '<br />';
    $i++;
}
?>