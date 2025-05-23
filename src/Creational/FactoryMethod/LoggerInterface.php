<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod;

interface LoggerInterface
{
    public function log(string $message): void;
}
