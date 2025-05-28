<?php

declare(strict_types=1);

namespace App\Structural\FlyWeight\Impl;

use App\Structural\FlyWeight\TreeTypeInterface;

final class TreeTypeFactory
{
    /** @var array<string, TreeTypeInterface> $treeTypes */
    private array $treeTypes = [];
    public function getTreeType(string $name, string $color, string $texture): TreeTypeInterface
    {
        $key = md5($name . $color . $texture);
        if (!isset($this->treeTypes[$key])) {
            $this->treeTypes[$key] = new ConcreteTreeType($name, $color, $texture);
        } else {
            echo $key . PHP_EOL;
        }
        return $this->treeTypes[$key];
    }
}
