<?php
$dbh = new PDO('mysql:host=localhost;dbname=dump;charset=utf8', 'wissem', '');



function queryParties($queryToExecute) {
    global $dbh;
    $query = $dbh->query($queryToExecute);
    return $query->fetchAll(PDO::FETCH_ASSOC);

}


function insert($id,$name, $description, $price, $weight,$image, $quantity, $available,$categorie_id )
{
    global $bdd;
    $sql= $bdd->prepare('INSERT INTO products (id,name,description,price,weight,image,quantity,available,categorie_id )
                        VALUE(:id,:name,:description,:price,:weight,:image,:quantity,:available,:categorie_id )');
    $sql->excute( array(
        'id'=> $id,
        'name'=>$name,
        'description'=>$description,
        'price'=>$price,
        'weight'=>$weight,
        'image'=>$image,
        'quantity'=>$quantity,
        'available'=>$available,
        'categorie_id'=>$categorie_id


    ));
    echo "produit ajouter";
}

