<?php

declare(strict_types=1);

use App\Structural\Bridge\Impl\DarkTheme;
use App\Structural\Bridge\Impl\LightTheme;
use App\Structural\Bridge\Impl\ProductPage;
use App\Structural\Bridge\Impl\SimplePage;

require_once __DIR__ . '/../vendor/autoload.php';

echo 'INICIANDO BRIDGE EXEMPLE' . PHP_EOL;

$lightTheme = new LightTheme();
$darkTheme = new DarkTheme();

echo 'LIGHT ' .  PHP_EOL;
$simplePage = new SimplePage($lightTheme);
echo $simplePage->view();

echo '-----------------------------------------'.PHP_EOL;

echo 'DARK ' .  PHP_EOL;
$simplePage = new SimplePage($darkTheme);
echo $simplePage->view();

echo '-----------------------------------------'.PHP_EOL;

echo 'LIGHT ' .  PHP_EOL;
$productPage = new ProductPage($lightTheme, '7', 'SABONETE');
echo $productPage->view();

echo '-----------------------------------------'.PHP_EOL;

echo 'DARK ' .  PHP_EOL;
$productPage->changeTheme($darkTheme);
echo $productPage->view();

echo '-----------------------------------------'.PHP_EOL;
