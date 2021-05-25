<?php


function formatPrice($price)
{
    $newPrice = number_format($price/100,2);
    echo $newPrice. ' €';

//    return $newPrice;
}

function priceExcludingVAT($price)
{
    $newPrice = (100 * $price) / (100 + 20);

    return formatPrice($newPrice);
}