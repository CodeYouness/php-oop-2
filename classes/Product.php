<?php 
require_once __DIR__ . "/Category.php";
class Product {
    private $name;
    private $price;
    private $brand;
    private $imgUrl;

    public function __construct($name, $brand, $price, $imgUrl, Category $category){
        $this -> name = $name;
        $this -> price = $price;
        $this -> brand = $brand;
        $this -> imgUrl = $imgUrl;
    }

    public function getName(){
        return $this -> name;
    }

    public function getPrice(){
        return $this -> price;
    }

    public function getBrand(){
        return $this -> brand;
    }

    public function getImgUrl(){
        return $this -> imgUrl;
    }
}

?>