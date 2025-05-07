<?php

declare(strict_types=1);

namespace App\Prototype;

class Rectangle extends AbstractShape
{
    public function draw(): void
    {
        echo sprintf(
                'Drawing rectangle with color %s',
                $this->color
            ) . PHP_EOL;
    }
}
