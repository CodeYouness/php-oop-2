<?php 
require_once __DIR__ . "/Product.php";
class Toy extends Product{
    private $material;
    private $weight;

    public function __construct($material, $weight, $name, $brand, $price, $imageUrl, Category $category){
        parent::__construct($name, $brand, $price, $imageUrl, $category);
        $this -> material = $material;
        $this -> weight = $weight;
    }

    public function getMaterial(){
        return $this -> material;
    }

    public function getWeight(){
        return $this -> weight;
    }
}
?>