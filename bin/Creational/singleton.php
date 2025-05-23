<?php

declare(strict_types=1);

use App\Creational\Singleton\Config;

require __DIR__ . '/../vendor/autoload.php';

echo 'Iniciando exemplo' . PHP_EOL;

$config = Config::getInstance();

echo singleton . phpspl_object_id($config) . PHP_EOL;
echo singleton . phpprint_r($config->getSettings(), true) . PHP_EOL;
