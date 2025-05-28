<?php

use App\Structural\Proxy\Impl\ImageProxy;
use App\Structural\Proxy\Impl\RealImage;

require __DIR__ . '/../../vendor/autoload.php';

echo "INCIANDO EXEMPLO PROXY" . PHP_EOL;

$realImage = new RealImage('imagem/aaa.png');
$realImage->display();

echo '------------------------------' . PHP_EOL;

$proxy = new ImageProxy('foo/bar.jpg');
$proxy->display();
