<?php

declare(strict_types=1);

namespace App\AbstractFactory\Impl;

use App\AbstractFactory\CheckboxInterface;

class LightCheckbox implements CheckboxInterface {

    public function render(): void
    {
        echo "LightCheckbox<br>";
    }
}
