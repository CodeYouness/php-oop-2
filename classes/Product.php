<?php 
require_once __DIR__ . "/Category.php";
class Product {
    private $name;
    private $price;
    private $imgUrl;

    public function __construct($name, $price, $imgUrl, Category $category){
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