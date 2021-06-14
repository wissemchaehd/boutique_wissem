<?php
include 'database.php';
include 'Article.php';
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL)
?>

<?php   
 foreach(produit() as $produit ){
    echo $produit['name'].'<br/>'; 
} 

?>
<br>

<?php   
 foreach(repture() as $produit1 ){
    echo 'produit en rupture'.' '. $produit1['name'].'<br/>';
} 

?>


<br>
<?php   
 foreach( listeproduit() as $produit2 ){
    echo  $produit2['name'].'<br/>' .'quantite :'.$produit2['quantity'].'<br/>' .'prix :'.$produit2['price'].'<br/>'; 
} 

?>
<br>
<?php   
 foreach( listecharlie() as $produit3 ){
    echo  'nom :'.$produit3['first_name'].'<br/>' .'commande:'.$produit3['number'].'<br/>';

}

?>


<?php
foreach(  update(100,20,voiture)as $produit4 ){
    echo  'name :'.$produit4['product_name'].'<br/>';
}

?>



