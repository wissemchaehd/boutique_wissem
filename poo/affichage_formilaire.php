<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'req_insert.php';
include 'formulaire.php';


insert($_POST["id"],$_POST["nomproduit"],$_POST["descriptionproduit"],$_POST["prixproduit"],$_POST["poidproduit"],$_POST["imageproduit"],$_POST["quantiteproduit"],$_POST["disponibiliteproduit"],$_POST["categorieproduit"]);


?>
<body>
<li><?php echo $_POST['nomproduit'] ?> </li>
<li><?php echo $_POST['descriptionproduit'] ?> </li>
<li><?php echo $_POST['prixproduit'] ?> </li>
<li><?php echo $_POST['poidproduit'] ?> </li>
<li><?php echo $_POST['imageproduit'] ?> </li>
<li><?php echo $_POST['quantiteproduit'] ?> </li>
<li><?php echo $_POST['disponibiliteproduit'] ?> </li>
<li><?php echo $_POST['categorieproduit'] ?> </li>
</body>