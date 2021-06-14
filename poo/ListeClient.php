<?php
require_once  __DIR__.'/Client.php';



class ListeClient
{

    public $allproduct=[];

    public function __construct(){
        $dbh = new PDO('mysql:host=localhost;dbname=dump;charset=utf8', 'wissem', '');
        $allproduct = $dbh->query('SELECT last_name.customers, first_name.customers FROM customers');

        foreach ($allproduct as $product ){

            $a= new Client($product['$first_name'],$product['$last_name']);
            array_push($this->allproduct,$a );
        }
        $allproduct->fetchAll(PDO::FETCH_ASSOC);
    }
    public function displayCat(){
        foreach ($this->allproduct as $product ){

            $product-> displayClient();
        }


    }
}