<?php 
require_once __DIR__ . "/Product.php";
class Accessories extends Product{
    private $material;
    private $height;

    public function __construct($material, $height){
        $this -> material = $material;
        $this -> height = $height;
    }
}
?>