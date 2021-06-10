
<?php
class Article{
    public $Nom;
    public $Description;
    public $Prix;
    public $Image;
    public $Poids;
    public $image;
    public $Disponible;

    public function __construct($id,$name, $description, $price, $weight,$image, $quantity, $available, $categorie_id){

        $this-> id = $id;
        $this-> name = $name;
        $this->Description = $description;
        $this->price = $price;
        $this->weight= $weight;
        $this->image = $image;
        $this->quantity= $quantity;
        $this->available = $available;
        $this->categorie_id = $categorie_id;
    }
    public function displayArticle(){

        echo  'Nom :'.$this->name.'<br/>';
        echo  'Description :'.$this->Description.'<br/>';
        echo  'Prix :'.$this->price.'<br/>';
        echo  'Image :'.'<img src='." $this->image ". 'alt="" width="200">'.'<br/>';
        echo  'poid :'.$this->weight.'<br/>';
        echo  'Disponible'.$this->available.'<br/>';
    }


}
