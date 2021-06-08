<?php
include 'database.php';
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
    echo  'prenom :'.$produit3['first_name'].'<br/>' .'commande:'.$produit3['number'].'<br/>'; 

} 

?>




