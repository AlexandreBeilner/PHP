<?php

declare(strict_types=1);

use App\Impl\Order;
use App\Impl\Product;

require_once __DIR__ . '/../vendor/autoload.php';

$camisa = new Product('camisa', 50);
$calsa = new Product('calsa', 75);

$order = new Order();

$order->addItems($camisa, 2)->addItems($calsa, 1);

echo 'TOTAL: ' . $order->getTotal() . PHP_EOL;
echo 'Criado em: ' . $order->getCreatedAt()->format('d/m/Y') . PHP_EOL;
