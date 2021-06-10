
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
        $this->Prix = $price;
        $this->image = $image;
        $this->weight= $weight;
        $this->available = $available;
        $this->categorie_id = $categorie_id;
    }
    public function displayArticle(){

        echo  'Nom :'.$this->Nom.'<br/>';
        echo  'Description :'.$this->Description.'<br/>';
        echo  'Prix :'.$this->Prix.'<br/>';
        echo  'Image :'.'<img src='." $this->image ". 'alt="" width="200">'.'<br/>';
        echo  'poid :'.$this->Poids.'<br/>';
        echo  'Disponible'.$this->Disponible.'<br/>';
    }


}

