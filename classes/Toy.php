<?php 
require_once __DIR__ . "/Product.php";
class Toy extends Product{
    private $material;
    private $weight;

    public function __construct($material, $weight){
        $this -> material = $material;
        $this -> weight = $weight;
    }
}
?>