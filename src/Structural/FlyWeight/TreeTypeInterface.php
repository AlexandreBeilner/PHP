<?php

declare(strict_types=1);

namespace App\Structural\FlyWeight;

interface TreeTypeInterface
{
    public function getName(): string;
    public function getColor(): string;
    public function getTexture(): string;
}
