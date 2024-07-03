<?php 

class Product {
    private $name;
    private $price;
    private $imgUrl;

    public function __construct($name, $price, $imgUrl){
        $this -> name = $name;
        $this -> price = $price;
        $this -> imgUrl = $imgUrl;
    }

    public function getName(){
        return $this -> name;
    }

    public function getPrice(){
        return $this -> price;
    }
}

?>