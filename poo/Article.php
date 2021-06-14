
<?php
class Article{


    public $Nom;
    public $Description;
    public $Prix;
    public $image;
    public $Poids;
    public $Image;
    public $Disponible;
    public $quantity;


    public function __construct($name, $description, $price, $weight,$image, $quantity, $available)
    {
        $this->Nom = $name;
        $this->Description = $description;
        $this->Prix = $price;
        $this->Poids= $weight;
        $this->Image= $image;
        $this->quantity= $quantity;
        $this->Disponible = $available;
    }

    public function displayArticle(Article $article){

        echo  'Nom :'.$article->getNom().'<br/>';
        echo  'Description :'.$article->getDescription().'<br/>';
        echo  'Prix :'.$article->getPrix().'<br/>';
//        echo  'Image :'.'<img src='. '"'.$article->getImage().'"' . 'alt="" width="200">'.'<br/>';
        echo "Image : <img src= '" . $article->getImage() . "' height=500 width=500 >".'<br/>';
        echo  'poid :'.$article->getPoids().'<br/>';
        echo  'Quantité'.$article->getQuantity().'<br/>';
        echo  'Disponible'.$article->getDisponible().'<br/>';
//        echo "*******************************".'<br>';
    }


    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * @param mixed $Nom
     */
    public function setNom($Nom)
    {
        $this->Nom = $Nom;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param mixed $Description
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->Prix;
    }

    /**
     * @param mixed $Prix
     */
    public function setPrix($Prix)
    {
        $this->Prix = $Prix;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getPoids()
    {
        return $this->Poids;
    }

    /**
     * @param mixed $Poids
     */
    public function setPoids($Poids)
    {
        $this->Poids = $Poids;
    }

    /**
     * @return mixed
     */
    public function getDisponible()
    {
        return $this->Disponible;
    }

    /**
     * @param mixed $Disponible
     */
    public function setDisponible($Disponible)
    {
        $this->Disponible = $Disponible;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }


}
