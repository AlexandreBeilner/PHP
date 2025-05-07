<?php

declare(strict_types=1);

use App\Prototype\Circle;
use App\Prototype\Rectangle;
use App\Prototype\ShapeRegister;

require __DIR__ . "/../vendor/autoload.php";

$shapeRegister = new ShapeRegister();

$circle = new Circle(12, 13, 'green', 4);
$rectangle = new Rectangle('blue', 13, 4);

$shapeRegister->addShape('circle', $circle)->addShape('rectangle', $rectangle);

$myCircle = $shapeRegister->getShape('circle');
$myCircle->color = 'red';
$myCircle->draw();
