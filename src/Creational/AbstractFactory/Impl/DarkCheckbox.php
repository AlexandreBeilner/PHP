<?php

declare(strict_types=1);

namespace App\Creational\AbstractFactory\Impl;

use App\Creational\AbstractFactory\CheckboxInterface;

class DarkCheckbox implements CheckboxInterface {

    public function render(): void
    {
        echo "DarkCheckbox<br>";
    }
}
