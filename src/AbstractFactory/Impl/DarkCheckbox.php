<?php

declare(strict_types=1);

namespace App\AbstractFactory\Impl;

use App\AbstractFactory\CheckboxInterface;

class DarkCheckbox implements CheckboxInterface {

    public function render(): void
    {
        echo "DarkCheckbox<br>";
    }
}
