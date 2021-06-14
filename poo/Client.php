<?php


class Client
{
    private $first_name;
    private $last_name;



    public function __construct($first_name,$last_name){

        $this->first_name = $first_name ;
        $this->last_name = $last_name;


    }


    public function displayClient()
    {

        echo 'prenom:' . $this->first_name . '<br/>';
        echo 'Nom :' . $this->last_name . '<br/>';

    }
}