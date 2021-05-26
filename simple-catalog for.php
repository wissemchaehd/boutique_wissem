<?php

$products = ['avion1', 'avion2', 'helicoptere', 'helicoptere2','jet'];

for ($i = 0; $i < count($products); $i++) {
        $prod = $products[$i];
    echo $prod . '<br>';
}



foreach ($products as $prod) {
    echo "$prod.<br/>";
}




$i = 0;

while( $i <  count( $products ) )
{
    echo $products[ $i ] . '<br />';
    $i++;
}



do{
    echo $products[ $i ] . '<br />';
    $i++;
}
while( $i <  count( $products ) )



?>