<?php

namespace App\Structural\Composite\Impl;

use App\Structural\Composite\GraphicElementInterface;

final class Square implements GraphicElementInterface
{
    public function draw(): string
    {
        return 'Quadrado' . PHP_EOL;
    }
}
