<?php

use App\Structural\FlyWeight\Impl\Tree;
use App\Structural\FlyWeight\Impl\TreeTypeFactory;

require __DIR__ . '/../../vendor/autoload.php';

echo 'INICNIANDO FLYWHEIGHT' . PHP_EOL;

$factory = new TreeTypeFactory();

$tree = new Tree($factory->getTreeType('ARVORE DE MARACUJA', 'orange', 'AAAAAAAAAAA'), 10, 10);
$tree->draw();
$tree2 = new Tree($factory->getTreeType('ARVORE DE MARACUJA', 'orange', 'AAAAAAAAAAA'), 13, 22);
$tree2->draw();
//$saguzero = $factory->getTreeType('ARVORE DE SAGU', 'white', 'ROUNDED');

