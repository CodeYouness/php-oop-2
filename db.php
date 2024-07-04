<?php 
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/Category.php";
require_once __DIR__ . "/classes/Food.php";
require_once __DIR__ . "/classes/Toy.php";
require_once __DIR__ . "/classes/Accessories.php";
$categories = [
    "fish" => new Category("fish"),
    "dog" => new Category("dog"),
    "bird" => new Category("bird"),
    "cat" => new Category("cat")
];

$royalcanin = new Product("Royal canin", "20.99", "https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg", $categories["dog"]);

var_dump($royalcanin);
?>