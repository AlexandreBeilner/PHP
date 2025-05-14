<?php

declare(strict_types=1);

use App\Singleton\Config;

require __DIR__ . '/../vendor/autoload.php';

echo 'Iniciando exemplo' . PHP_EOL;

$config = Config::getInstance();

echo spl_object_id($config) . PHP_EOL;
echo print_r($config->getSettings(), true) . PHP_EOL;
