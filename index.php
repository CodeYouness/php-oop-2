<?php 
require_once __DIR__ . "/db.php";

var_dump($products);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Boolshop</title>
</head>

<body>

    <header>
        <h1 class="text-center">Boolshop</h1>
    </header>

    <main class="container">
        <h2>I nostri prodotti</h2>

        <div class="row">
            <?php foreach ($products as $category => $product) { ?>
            <div class="col-4">

                <div class="card mb-3">

                    <img src="<?php echo $product->getImgUrl()?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product->getName()?></h5>
                        <p class="fw-6"><?php echo $product->getCategory()->getCategory() ?></p>
                        <p class="card-text"><?php echo $product->getPrice() ?> &euro;</p>

                        <?php if(get_class($product) === 'Food') { ?>
                        <p>Quality: <?php echo $product->getQuality() ?></p>
                        <p>Type of meat: <?php echo $product->getMeat() ?></p>

                        <?php }elseif (get_class($product) === 'Toy') { ?>
                        <p>Material: <?php echo $product->getMaterial() ?></p>
                        <p>Weigth: <?php echo $product->getWeight() ?> g</p>
                        <?php }elseif (get_class($product) === 'Accessories'){ ?>
                        <p>Material: <?php echo $product->getMaterial() ?></p>
                        <p>Weigth: <?php echo $product->getHeight() ?> kg</p>
                        <?php } ?>

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