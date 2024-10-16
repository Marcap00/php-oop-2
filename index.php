<?php
require_once __DIR__ . '/instances/instances.php';
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
    <!-- Font Awesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css'
        integrity='sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=='
        crossorigin='anonymous' />
    <!-- Bootstrap 5 -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css'
        integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=='
        crossorigin='anonymous' />
    <!-- Custom Css -->
    <link rel="stylesheet" href="./app/css/style.css">
    <!-- Vue Js -->
    <script defer src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Custom JS -->
    <script defer src="./app/js/script.js"></script>
</head>

<body>
    <div id="app">
        <header class="d-flex align-items-center p-2">
            <h1 class=" text-white">Boolzpet</h1>
        </header>
        <main class="py-4 overflow-scroll">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-3">
                    <?php foreach ($productList as $productItem) : ?>
                        <div class="col">
                            <div role="button" class="card">
                                <img src="<?= $productItem->getImage() ?>" class="card-img-top"
                                    alt="<?= $productItem->getName() ?>">
                                <div class="card-body fix-height">
                                    <p class="card-text">
                                        <i
                                            class="fa-solid <?= $productItem->getCategory()->getName() === 'Cani' ? 'fa-dog' : 'fa-cat'; ?>"></i>
                                    </p>

                                    <h5 class="card-title"><?= $productItem->getName() ?></h5>

                                    <p class="card-text text-secondary"><?= $productItem->getDescription() ?></p>
                                    <p class="card-text text-secondary">
                                        Codice: <?= $productItem->getCode() ?>
                                    </p>
                                    <p class="card-text">Prezzo: <?= $productItem->getPrice() ?> €</p>
                                    <!-- Controllo se il prodotto è un cibo, allora ha scadenza e valore energetico e solo allora li posso mostrare in pagina -->
                                    <?php if ($productItem instanceof Food) : ?>
                                        <p class="card-text">Scadenza: <?= $productItem->getExpirationDate() ?></p>
                                        <p class="card-text">Valore energetico: <?= $productItem->getEnergyValue() ?> Kcal</p>
                                        <!-- Controllo se il prodotto è un gioco, allora ha resistenza, materiale e livello di addestramento e solo allora li posso mostrare in pagina  -->
                                    <?php elseif ($productItem instanceof Toy) : ?>
                                        <p class="card-text">Resistenza: <?= $productItem->getResistance() ?></p>
                                        <p class="card-text">Materiale: <?= $productItem->getMaterial() ?></p>
                                        <p class="card-text">Livello di addestramento: <?= $productItem->getTrainingLevel() ?>
                                        </p>
                                        <!-- Controllo se il prodotto è una cuccia, allora ha colore, misura e livello di comfort e solo allora li posso mostrare in pagina  -->
                                    <?php elseif ($productItem instanceof Bed) : ?>
                                        <p class="card-text">Colore: <?= $productItem->getColor() ?></p>
                                        <p class="card-text">Misura: <?= $productItem->getSize() ?></p>
                                        <p class="card-text">Livello di comfort: <?= $productItem->getComfortLevel() ?></p>
                                    <?php endif; ?>
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