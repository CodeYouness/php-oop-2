<?php 
require_once __DIR__ . "/db.php";

var_dump($products)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Boolshop</title>
</head>

<body>

    <header>
        <h1 class="text-center">Boolshop</h1>
    </header>

    <main class="container">
        <h2>I nostri prodotti</h2>

        <div class="row">
            <?php foreach ($products as $product) { ?>
            <div class="col-4">

                <div class="card mb-3">

                    <img src="<?php echo $product->getImgUrl()?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product->getName()?></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Add to basket</a>

                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </main>
</body>

</html>