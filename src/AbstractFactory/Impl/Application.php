<?php

declare(strict_types=1);

namespace App\AbstractFactory\Impl;

use App\AbstractFactory\ButtonInterface;
use App\AbstractFactory\CheckboxInterface;
use App\AbstractFactory\UIFactoryInterface;

class Application {
    private ButtonInterface $button;
    private CheckboxInterface $checkbox;

    public function __construct(UIFactoryInterface $factory)
    {
        $this->button = $factory->createButton();
        $this->checkbox = $factory->createCheckBox();
    }

    public function render()
    {
        echo 'RENDER UI' . PHP_EOL;
        $this->button->render();
        $this->checkbox->render();
        echo 'FIM';
    }
}
