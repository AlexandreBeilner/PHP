<?php

declare(strict_types=1);

namespace App\Creational\AbstractFactory\Impl;

use App\Creational\AbstractFactory\ButtonInterface;

class DarkButton implements ButtonInterface {

    public function render(): void
    {
        echo "DarkButton<br>";
    }
}
