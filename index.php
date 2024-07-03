<?php 
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/Category.php";
require_once __DIR__ . "/classes/Food.php";
require_once __DIR__ . "/classes/Toy.php";
require_once __DIR__ . "/classes/Accessories.php";

$royalcanin = new Product("Royal canin", "20.99", new Category("dog"))
?>