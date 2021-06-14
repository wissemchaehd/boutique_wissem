<?php


require_once  __DIR__.'/Client.php';
require_once __DIR__.'/Catalogue.php';
require_once __DIR__.'/Tele.php';

$article = new Article('produit 1', 'je suis une description de article 1', '10','100','https://www.php.net/images/php8/logo_php8.svg', '5',1);
$article->displayArticle($article);


$tele = new Tele('tele1', 'je suis une description tele 1', '2', '12', 'https://www.php.net/images/php8/logo_php8.svg','5',1,1200,'A');
$tele->displayArticle($tele);
$catalogue = new Catalogue();
$catalogue->displayCat($catalogue);