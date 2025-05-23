<?php

declare(strict_types=1);

namespace App\Creational\AbstractFactory\Impl;

use App\Creational\AbstractFactory\ButtonInterface;

class LightButton implements ButtonInterface {

    public function render(): void
    {
        echo "LightButton<br>";
    }
}
