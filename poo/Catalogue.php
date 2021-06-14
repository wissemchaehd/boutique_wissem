
<?php

require_once  __DIR__.'/Article.php';
require_once  __DIR__.'/Tele.php';


class Catalogue {
    public $allproduct=[];

     public function __construct()
     {
        $dbh = new PDO('mysql:host=localhost;dbname=dump;charset=utf8', 'wissem', '');
        $productResult = $dbh->query('SELECT * FROM products');
        $rows = $productResult->fetchAll();

        foreach ($rows as $product ){
            $article = new Article($product['name'],$product['description'],$product[ 'price'],$product[ 'weight'],$product['image'],$product[ 'quantity'],$product['available']);
            $this->allproduct[] = $article;
        }
    }

    public function displayCat(Catalogue $cat)
    {
        foreach ($cat->getAllproduct() as $article )
        {
            $article->displayArticle($article);
        }

    }

    /**
     * @return array
     */
    public function getAllproduct()
    {
        return $this->allproduct;
    }

    /**
     * @param array $allproduct
     */
    public function setAllproduct($allproduct)
    {
        $this->allproduct = $allproduct;
    }


}
$catalogue = new Catalogue();
