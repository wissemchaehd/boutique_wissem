<?php
include 'catalogue7.php';
include 'my-functions.php';
?>

<?php
foreach ($array as $key => $prod) {?>
    <form action="cart.php" method="post">
                        <input type="number" name="quantité" placeholder="nombres de ballons">
                        <input type="hidden" name="info" value="<?php echo $key?>">

                        <button type="submit" > commander </button>
                    </form>
<?php
    echo $key.' : <br/>';
    foreach ($prod as $key2 => $prod2){
        if ($key2 === 'photo') {
            echo $key2."  <img src='".$prod2."', width='150' /> <br />";
        } else {
            echo $key2." :  ".$prod2.'<br />';

        }
    }
}
?>
<?php var_dump($prod);