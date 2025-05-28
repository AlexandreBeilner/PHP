<?php

declare(strict_types=1);

use App\Structural\Decorator\Impl\BoldDecorator;
use App\Structural\Decorator\Impl\ItalicDecorator;
use App\Structural\Decorator\Impl\SimpleText;

require __DIR__ . '/../vendor/autoload.php';

echo 'INICIANDO EXEMPLO DE DECORATOR' . PHP_EOL;

echo 'SEM DECORATOR' . PHP_EOL;
$text = new SimpleText('EXEMPLO DE DECORATOR');
echo $text->format() . PHP_EOL;
echo '-------------------------------------' . PHP_EOL;

echo 'WiTH BOLD DECORATOR' . PHP_EOL;
$boldDecorator = new BoldDecorator($text);
echo $boldDecorator->format() . PHP_EOL;
echo '----------------------------------' . PHP_EOL;

echo 'WITH ITALIC DECORATOR' . PHP_EOL;
$italicDecorator = new ItalicDecorator($text);
echo $italicDecorator->format() . PHP_EOL;
echo '----------------------------------' . PHP_EOL;

echo 'WITH BOLD AND ITALIC DECORATOR' . PHP_EOL;
$italicDecorator = new ItalicDecorator($boldDecorator);
echo $italicDecorator->format() . PHP_EOL;
echo '-------------------------------' . PHP_EOL;
