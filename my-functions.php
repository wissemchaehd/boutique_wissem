<?php
function formatPrice($price)
{
    $newPrice = number_format($price/100,2);
    echo $newPrice. ' €';


}


function priceExcludingVAT($prix)
{
    $newPrice = (100 * $prix) / (100 + 20);
    formatPrice($newPrice);
}


function displayDiscountedPrice($price,$remise)
{
    $promo = $price-($price/100 *$remise);
    formatPrice($promo);
}
?>



