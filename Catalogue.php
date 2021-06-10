
<?php include ' database.php';
include 'Article.php';
?>
<?php
class Catalogue{
 public $allproduct=[];

 public function __construct($id,$name, $description, $price, $weight,$image, $quantity, $available, $categorie_id){
    $dbh = new PDO('mysql:host=localhost;dbname=dump;charset=utf8', 'wissem', '');
$allproduct = $dbh->query('SELECT * FROM products');

 foreach ($allproduct as $product ){

     $a= new Article($product[ $id],$product[ $name],$product[$description],$product[ $price],$product[ $weight],$product[$image],$product[ $quantity],$product[$available],$product[$available]);
     array_push($this->allproduct,$a );
 }

}
    public function displayCat(){
        foreach ($this->allproduct as $product ){

            $product->displayCat();
        }

    }


}


?>