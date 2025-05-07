<?php

declare(strict_types=1);

namespace App\AbstractFactory\Impl;

use App\AbstractFactory\ButtonInterface;

class DarkButton implements ButtonInterface {

    public function render(): void
    {
        echo "DarkButton<br>";
    }
}
