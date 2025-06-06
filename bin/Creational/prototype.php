<?php

declare(strict_types=1);

use App\Creational\Prototype\Circle;
use App\Creational\Prototype\Rectangle;
use App\Creational\Prototype\ShapeRegister;

require __DIR__ . "/../vendor/autoload.php";

$shapeRegister = new ShapeRegister();

$circle = new Circle(12, 13, 'green', 4);
$rectangle = new Rectangle('blue', 13, 4);

$shapeRegister->addShape('circle', $circle)->addShape('rectangle', $rectangle);

$myCircle = $shapeRegister->getShape('circle');
$myCircle->color = 'red';
$myCircle->draw();
