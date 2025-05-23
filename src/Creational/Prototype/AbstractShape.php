<?php

declare(strict_types=1);

namespace App\Creational\Prototype;

abstract class AbstractShape {
    public int $x;
    public int $y;
    public string $color;

    public function __construct(string $color, int $x, int $y)
    {
        $this->color = $color;
        $this->x = $x;
        $this->y = $y;
    }

    abstract public function draw(): void;

    public function __clone()
    {
        echo sprintf('Cloning with color %s', $this->color) . PHP_EOL;
    }
}
