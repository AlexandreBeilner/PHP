<?php

declare(strict_types=1);

namespace App\Prototype;

use App\Prototype\AbstractShape;

final class Circle extends AbstractShape
{
    public int $radius;

    public function __construct(int $x, int $y, string $color, int $radius)
    {
        parent::__construct($color, $x, $y);
        $this->radius = $radius;
    }

    public function draw(): void
    {
        echo sprintf(
                'Drawing circle with color %s and radius %d',
                $this->color, $this->radius
            ) . PHP_EOL;
    }
}
