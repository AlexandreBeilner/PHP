<?php

declare(strict_types=1);

use App\Impl\Product;
use App\Impl\ShoppingCart;

require_once __DIR__ . '/../vendor/autoload.php';

$mirabel = new Product('mirabel', 3.5);
$quati = new Product('quati', 7.99);

$shoppingCart = new ShoppingCart();

$shoppingCart->addItem($mirabel, 4);
$shoppingCart->addItem($quati, 1);


$total = $shoppingCart->getTotal();
echo 'Total ' . $total . PHP_EOL;
$shoppingCart->removeItem($quati);
$total = $shoppingCart->getTotal();
echo 'Total ' . $total . PHP_EOL;
