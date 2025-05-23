<?php

namespace App\Composite\Impl;

use App\Composite\GraphicElementInterface;

final class Circle implements GraphicElementInterface
{
    public function draw(): string
    {
        return 'Circle' . PHP_EOL;
    }
}
