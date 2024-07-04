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

$products = [ 
    new Food("High", "Cow", "Royal Canin Mini Adult", "Royal Canin", 20.99, "https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg", $categories['dog']),
    new Food("Low", "Chicken", "Almo Nature Holistic", "Almo Nature", 44.99, "https://arcaplanet.vtexassets.com/arquivos/ids/300514/Almo-Nature-Holistic-Maintenance-Medium-Large-Tonno-e-Riso-10118806.jpg", $categories["dog"]),
    new Food("High", "Veal", "Almo nature cat daily lattina", "Almo nature", 34.99, "https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg", $categories["cat"]),
    new Food("High", "mini flakes", "Mangime per pesci guppy in fiocchi", "Guppy", "2.95", "https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg", $categories["fish"]),
    new Accessories("Wood", 1, "Voliera wilma in legno", "Wilma", 184.99, "https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg", $categories["fish"]),
    new Accessories("plutonium", 0.15, "cartucce filtranti per filtro", "EasyCrystal", 2.29, "https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg", $categories["fish"]),
    new Toy("Plastic", 100, "kong classic", "kong", 13.49, "https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg", $categories["dog"]),
    new Toy("Wool", 300, "Topini di peluche", "Trixie", 4.99, "https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg", $categories["cat"])
]


?>