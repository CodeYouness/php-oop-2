<?php 
require_once __DIR__ . "/Product.php";
class Accessories extends Product{
    private $material;
    private $height;

    public function __construct($material, $height,$name, $brand, $price, $imageUrl, Category $category){
        parent::__construct($name, $brand, $price, $imageUrl, $category);
        $this -> material = $material;
        $this -> height = $height;
    }

    public function getMaterial(){
        return $this -> material;
    }

    public function getHeight(){
        return $this -> height;
    }
}
?>