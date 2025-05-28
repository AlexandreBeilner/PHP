<?php

declare(strict_types=1);

namespace App\Structural\FlyWeight\Impl;

use App\Structural\FlyWeight\TreeTypeInterface;

final class Tree
{
    private int $x;
    private int $y;

    private TreeTypeInterface $treeType;
    public function __construct(TreeTypeInterface $treeType, int $x, int $y)
    {
        $this->treeType = $treeType;
        $this->x = $x;
        $this->y = $y;
    }

    public function draw(): void
    {
        echo "GERANDO A ARVORE " . $this->x . " " . $this->y . PHP_EOL;
    }
}
