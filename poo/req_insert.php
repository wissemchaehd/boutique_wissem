<?php
$dbh = new PDO('mysql:host=localhost;dbname=dump;charset=utf8', 'wissem', '');





function insert($name, $description, $price, $weight,$image, $quantity, $available,$categorie_id )
{
    global $dbh;
    $sql= $dbh->prepare('INSERT INTO products (name,description,price,weight,image,quantity,available,categorie_id )
                        VALUE(:name,:description,:price,:weight,:image,:quantity,:available,:categorie_id )');
    $sql->execute( array(

        'name'=>$name,
        'description'=>$description,
        'price'=>$price,
        'weight'=>$weight,
        'image'=>$image,
        'quantity'=>$quantity,
        'available'=>$available,
        'categorie_id'=>$categorie_id,


    ));
    echo "produit ajouter";
}

