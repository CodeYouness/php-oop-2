<?php 
require_once __DIR__ . "/Product.php";
class Food extends Product{
    private $quality;
    private $meat;

    public function __construct($quality, $meat){
        $this -> quality = $quality;
        $this -> meat = $meat;
    }
}
?>