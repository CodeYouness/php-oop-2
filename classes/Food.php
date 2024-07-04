<?php 
require_once __DIR__ . "/Product.php";
class Food extends Product{
    private $quality;
    private $meat;

    public function __construct($quality, $meat,$name, $brand, $price, $imageUrl, Category $category){
        parent::__construct($name, $brand, $price, $imageUrl,$category);
        $this -> quality = $quality;
        $this -> meat = $meat;
    }
}

?>