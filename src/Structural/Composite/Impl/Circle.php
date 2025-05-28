<?php

namespace App\Structural\Composite\Impl;

use App\Structural\Composite\GraphicElementInterface;

final class Circle implements GraphicElementInterface
{
    public function draw(): string
    {
        return 'Circle' . PHP_EOL;
    }
}
