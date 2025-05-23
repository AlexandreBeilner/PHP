<?php

declare(strict_types=1);

use App\Creational\AbstractFactory\Impl\Application;
use App\Creational\AbstractFactory\Impl\DarkThemeFactory;
use App\Creational\AbstractFactory\Impl\LightThemeFactory;

require __DIR__ . "/../vendor/autoload.php";

$dark = new DarkThemeFactory();
$light = new LightThemeFactory();

//$application = new Application($dark);
$application = new Application($light);

$application->render();
