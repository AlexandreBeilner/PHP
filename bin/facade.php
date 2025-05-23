<?php

declare(strict_types=1);

use App\Facade\VideoConverterFacade;

require __DIR__ . '/../vendor/autoload.php';

echo 'INICIANDO EXEMPLO FACADE' . PHP_EOL;

$facade = new VideoConverterFacade();

$facade->convertVideo('file.was', 'mp3');

