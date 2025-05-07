<?php

declare(strict_types=1);

namespace App\AbstractFactory\Impl;

use App\AbstractFactory\ButtonInterface;

class LightButton implements ButtonInterface {

    public function render(): void
    {
        echo "LightButton<br>";
    }
}
