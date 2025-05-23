<?php

namespace App\Composite\Impl;

use App\Composite\GraphicElementInterface;

final class Square implements GraphicElementInterface
{
    public function draw(): string
    {
        return 'Quadrado' . PHP_EOL;
    }
}
