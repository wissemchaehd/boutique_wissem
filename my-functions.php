<?php
function formatPrice($price)
{
    $newPrice = number_format($price,2);
    return($newPrice). ' €';


}


function priceExcludingVAT($price)
{
    $newPrice1 =number_format($price*100 / 120,2) ;
    return($newPrice1);
}


function displayDiscountedPrice($price,$remise)
{
    $promo = number_format($price-($price/100 *$remise),2) ;
    return($promo);
}

function  Total($price,$quantite){
    $totals = number_format($price * $quantite,2);
    return($totals);

}
function TVA($price,$price1,$quantite){
    $tva =  number_format($price-$price1,2)* $quantite;

    return ($tva);
}


function transport1($poid , $quantite)
{
    $x = $poid * $quantite ;

    $fraisdeport = 5;

    if( 0 < $x & $x< 500 )
    {
        //$fraisdeport = 5;
        //echo $fraisdeport;

    }
    elseif (501<$x & $x<2000)
    {
        $fraisdeport = 0.9 * ($fraisdeport * ceil($x/500));
        //echo $fraisdeport;
        //echo ceil($x/500);
    }
    else
    {
        $fraisdeport = 0;

    }
    return $fraisdeport;
}
function transport($poid , $quantite)
{
    $x = $poid * $quantite ;

    $fraisdeport = 6;

    if( 0 < $x & $x< 500 )
    {
        //$fraisdeport = 5;
        //echo $fraisdeport;

    }
    elseif (501<$x & $x<2000)
    {
        $fraisdeport = 0.9 * ($fraisdeport * ceil($x/500));
        //echo $fraisdeport;
        //echo ceil($x/500);
    }
    else
    {
        $fraisdeport = 0;

    }
    return $fraisdeport;
}
?>



