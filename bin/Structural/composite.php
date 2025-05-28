<?php

declare(strict_types=1);

use App\Structural\Composite\Impl\Circle;
use App\Structural\Composite\Impl\ElementGroup;
use App\Structural\Composite\Impl\Square;

require __DIR__ . '/../vendor/autoload.php';

echo 'INICIANDO COMPOSITE EXEMPLE' . PHP_EOL;

$circle = new Circle();
$square = new Square();

echo 'MOSTRANDO DESENHO INDIVIDUAL' . PHP_EOL;
echo $circle->draw();
echo $square->draw();

echo '------------------------------------'. PHP_EOL;

echo 'MOSTRANDO DESENHO COMPOSTo' . PHP_EOL;
$group = new ElementGroup();
$group->addElement($circle);
$group->addElement($square);

echo $group->draw();

