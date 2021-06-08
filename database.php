<?php


    $dbh = new PDO('mysql:host=localhost;dbname=dump;charset=utf8', 'wissem', '');




    function queryParties($queryToExecute) {
        global $dbh;
        $query = $dbh->query($queryToExecute);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    
    }




function produit() {

    $sql = 'SELECT products.name, products.quantity FROM products';
    return queryParties($sql);
}


function repture() {

    $sql = ' SELECT products.name, products.quantity FROM products
    WHERE products.quantity = 0';
    return queryParties($sql);
}


function listeproduit() {

    $sql = 'SELECT products.name , order_product.quantity, products.price 
    FROM products 
    INNER JOIN order_product ON order_product.product_id = products.id 
    WHERE order_product.order_id = 1';

    return queryParties($sql);
}

function listecharlie() {

    $sql = 'SELECT orders.number , 
    sum(order_product.quantity * products.price ) AS PrixTotal , customers.first_name
    FROM orders
    INNER JOIN order_product ON orders.id = order_product.order_id
    INNER JOIN products ON order_product.product_id = products.id
    INNER JOIN customers ON customers.id = orders.customer_id
    WHERE customers.first_name = "Charlize"
    GROUP BY orders.number';

    return queryParties($sql);
}









