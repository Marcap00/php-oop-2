<?php
require_once __DIR__ . '/../requires/requires.php';
// Category instances
$dogCategory = new Category('Cani');
$catCategory = new Category('Gatti');

// Set categories codes
$dogCategory->setCode('cd3954345643');
$catCategory->setCode('cg3924535234');

// Array of categories
$categories = [
    $dogCategory,
    $catCategory
];

// Food instances
$purina = new Food('Purina', 10.99, 'Cibo per cani', 'https://placehold.co/150?text=Product', $categories[0], '2023-12-31', 100);
$whiskas = new Food('Whiskas', 5.99, 'Cibo per gatti', 'https://placehold.co/150?text=Product', $categories[1], '2023-12-31', 100);

// Toys instances
$ball = new Toy('Pallina', 2.99, 'Giocattolo per cani', 'https://placehold.co/150?text=Product', $categories[0], 'Alta', 'Plastica', 'Alto');
$rope =    new Toy('Corda', 1.99, 'Giocattolo per cani', 'https://placehold.co/150?text=Product', $categories[0], 'Media', 'Cotone', 'Medio');
$mouse =    new Toy('Topo', 3.99, 'Giocattolo per gatti', 'https://placehold.co/150?text=Product', $categories[1], 'Bassa', 'Stoffa', 'Basso');

// Beds instances
$cucciaWh = new Bed('Cuccia WH', 20.99, 'Letto per cani', 'https://placehold.co/150?text=Product', $categories[0], 'Marrone', 'Media', 'Alta');
$cucciaWz = new Bed('Cuccia WZ', 40.99, 'Letto per gatti', 'https://placehold.co/150?text=Product', $categories[1], 'Grigio', 'Alta', 'Media');

// Set foods codes
$purina->setCode('pd3928290721');
$whiskas->setCode('wd3928290721');

// Set toys codes
$ball->setCode('bl3928290721');
$rope->setCode('rp3928904782');
$mouse->setCode('ms3928290721');

// Set beds codes
$cucciaWh->setCode('cw392867435634');
$cucciaWz->setCode('cz3928547745');

// Array of foods
$foods = [
    $purina,
    $whiskas
];

// Array of toys
$toys = [
    $ball,
    $rope,
    $mouse
];

// Array of beds
$beds = [
    $cucciaWh,
    $cucciaWz
];

// Array of all products
$productList = array_merge($foods, $toys, $beds);
// var_dump($productList);