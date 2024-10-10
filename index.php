<?php
require_once __DIR__ . '/classes/Bed.php';
require_once __DIR__ . '/classes/Food.php';
require_once __DIR__ . '/classes/Toys.php';
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/Category.php';

$categories = [
    new Category('Cani'),
    new Category('Gatti'),
];

$typeProducts = [
    $toys = 'Giocattolo',
    $beds = 'Cuccia',
    $foods = 'Cibo',
];

$foods = [
    new Food('Purina', 10.99, $typeProducts[2], 'https://placehold.co/150?text=Product', $categories[0], '2023-12-31', 100),
    new Food('Whiskas', 5.99, $typeProducts[2], 'https://placehold.co/150?text=Product', $categories[1], '2023-12-31', 100),
];

$toys = [
    new Toys('Pallina', 2.99, $typeProducts[0], 'https://placehold.co/150?text=Product', $categories[0], 'Alta', 'Plastica', 'Alto'),
    new Toys('Corda', 1.99, $typeProducts[0], 'https://placehold.co/150?text=Product', $categories[0], 'Media', 'Cotone', 'Medio'),
    new Toys('Topo', 3.99, $typeProducts[0], 'https://placehold.co/150?text=Product', $categories[1], 'Bassa', 'Stoffa', 'Basso'),
];

$beds = [
    new Bed('Cuccia WH', 20.99, $typeProducts[1], 'https://placehold.co/150?text=Product', $categories[0], 'Marrone', 'Media', 'Alta'),
    new Bed('Cuccia WZ', 40.99, $typeProducts[1], 'https://placehold.co/150?text=Product', $categories[1], 'Grigio', 'Alta', 'Media'),
];

$productList = array_merge($foods, $toys, $beds);
// var_dump($productList);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolzpet</title>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
        rel="stylesheet" />
    <!-- Bootstrap 5 -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css'
        integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=='
        crossorigin='anonymous' />
    <!-- Custom Css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Vue Js -->
    <script defer src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Custom JS -->
    <script defer src="js/script.js"></script>
</head>

<body>
    <div id="app">
        <header class="d-flex align-items-center p-2">
            <h1 class=" text-white">Boolzpet</h1>
        </header>
        <main class="py-4 overflow-scroll">
            <div class="container">
                <div class="row row-cols-3 g-3">
                    <?php foreach ($productList as $productItem) : ?>
                    <div class="col">
                        <div class="card">
                            <img src="<?= $productItem->image ?>" class="card-img-top" alt="<?= $productItem->name ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= $productItem->name ?></h5>
                                <p class="card-text"><?= $productItem->description ?></p>
                                <p class="card-text">Prezzo: <?= $productItem->price ?> €</p>
                                <p class="card-text">Categoria: <?= $productItem->category->name ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </main>
    </div>
</body>

</html>