<?php

namespace App\Impl;

use App\ExampleInterface;

class Example implements ExampleInterface
{
    public function greet(string $name): string
    {
        return 'Olá, ' . htmlspecialchars($name) . ' do Example Class';

    }
}
