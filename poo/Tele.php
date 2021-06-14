<?php


class Tele extends Article
{
    public $pixel;
    public $classeEnrgetique;

    public function __construct($name, $description, $price, $weight, $image, $quantity, $available,$pixel,$classeEnrgetique)
    {
        parent:: __construct($name, $description, $price, $weight, $image, $quantity, $available);
        $this-> pixel = $pixel;
        $this -> classeEnrgetique = $classeEnrgetique;

    }

    /**
     * @return mixed
     */
    public function getPixel()
    {
        return $this->pixel;
    }

    /**
     * @param mixed $pixel
     */
    public function setPixel($pixel)
    {
        $this->pixel = $pixel;
    }

    /**
     * @return mixed
     */
    public function getClasseEnrgetique()
    {
        return $this->classeEnrgetique;
    }

    /**
     * @param mixed $classeEnrgetique
     */
    public function setClasseEnrgetique($classeEnrgetique)
    {
        $this->classeEnrgetique = $classeEnrgetique;
    }
    public function displayArticle(Tele $article)
    {
        parent::displayArticle($article);
        echo  'Classe energetique : '.$article->getClasseEnrgetique().'<br/>';
        echo  'Pixel : '.$article->getPixel().'<br/>';
    }

}