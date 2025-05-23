<?php

declare(strict_types=1);

namespace App\Creational\AbstractFactory\Impl;

use App\Creational\AbstractFactory\ButtonInterface;
use App\Creational\AbstractFactory\CheckBoxInterface;
use App\Creational\AbstractFactory\UIFactoryInterface;

class LightThemeFactory implements UIFactoryInterface {

    public function createButton(): ButtonInterface
    {
        return new LightButton();
    }

    public function createCheckBox(): CheckBoxInterface
    {
        return new LightCheckbox();
    }
}
