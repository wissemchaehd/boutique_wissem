<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

    $dbh = new PDO('mysql:host=localhost;dbname=dump;charset=utf8', 'wissem', '');



    function queryParties($queryToExecute) {
        global $dbh;
        $query = $dbh->query($queryToExecute);
        return $query->fetchAll(PDO::FETCH_ASSOC);

    }




function produit() {
    global $dbh;
    $sql = 'SELECT products.name, products.quantity FROM products';
    return queryParties($sql);
}


function repture() {
    global $dbh;
    $sql = ' SELECT products.name, products.quantity FROM products
    WHERE products.quantity = 0';
    return queryParties($sql);
}


function listeproduit() {
    global $dbh;
    $sql = 'SELECT products.name , order_product.quantity, products.price
    FROM products
    INNER JOIN order_product ON order_product.product_id = products.id
    WHERE order_product.order_id =1 ';

    return queryParties($sql);
}

function listecharlie() {
    global $dbh;
    $sql ='SELECT orders.number, sum(order_product.quantity * products.price ) AS PrixTotal , customers.first_name
    FROM orders
    INNER JOIN order_product ON orders.id = order_product.order_id
    INNER JOIN products ON order_product.product_id = products.id
    INNER JOIN customers ON customers.id = orders.customer_id
    WHERE customers.first_name = "Charlize"
    GROUP BY orders.number';

    return queryParties($sql);

}





function update( $newprice, $newquantity, $product_name)
{
    global $dbh;

    $req = $dbh->prepare('UPDATE products SET price = :newprice, quantity = :newquantity WHERE name = :product_name ');
    $req->execute(array(
        'newprice' => $newprice,
        'newquantity' => $newquantity,
        'product_name' => $product_name

    ));echo "le produit est ".$req.' '."est bien mise à jour".'<br>';
}